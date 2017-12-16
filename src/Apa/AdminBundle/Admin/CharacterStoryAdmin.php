<?php
// src/Apa/AdminBundle/Admin/CharacterStoryAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class CharacterStoryAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {
        /* Prévisualisation de l'avatar */
            $avatar = $this->getSubject()->getAvatar();
            $fileFieldOptions = array('required' => false);

            if($avatar && $avatar == 'avatarByDefault.png'){
                $container = $this->getConfigurationPool()->getContainer();
                $fullPath = $container->get('request')->getBasePath().'/'.'uploads/apastory/images/'.'/'.$avatar;
                $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
            }
            else{
                if ($avatar && ($webPath = $this->getSubject()->getUploadDir())) {
                    $container = $this->getConfigurationPool()->getContainer();
                    $fullPath = $container->get('request')->getBasePath().'/'.$webPath.'/'.$avatar;
                    $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
                }
            }


        /* Prévisualisation de la galerie */
            $images = $this->getSubject()->getImages();

            // use $fileFieldOptions so we can add other options to the field
            $fileFieldOptions2 = array('required' => false);

            $galerie = array();
            foreach($images as $image ) {
                if ($image && ($webPath = $image->getUploadDir())) {
                    $path = $image->getPath();
                    // get the container so the full path to the image can be set
                    $container = $this->getConfigurationPool()->getContainer();
                    $fullPath = $container->get('request')->getBasePath().'/'.$webPath.'/'.$path;
                    // add a 'help' option containing the preview's img tag
                    $fileFieldOptions2['help'] = '<img src="'.$fullPath.'" class="admin-preview admin-galerie" />';
                    $galerie[] = $fileFieldOptions2['help'];
                }
            }

        $formMapper
            ->add('firstname', 'text', array('label' => 'Prénom'))
            ->add('arrayFirstnames', 'text', array('label' => 'Prénoms'))
            ->add('name', 'text', array('label' => 'Nom', 'required' => false))
            ->add('file', 'file', array('label' => 'Avatar', 'required' => false), $fileFieldOptions)
            ->add('species', 'text', array('label' => 'Espèce'))
            ->add('gender', 'text', array('label' => 'Sexe'))
            ->add('dateBirth', 'sonata_type_date_picker', array('label' => 'Date de naissance','dp_language'=>'fr','format' => 'yyyy-MM-dd'))
            ->add('placeBirth', 'text', array('label' => 'Lieu de naissance'))
            ->add('citation', 'text', array('label' => 'Citation'))
            ->add('description', 'textarea', array('label' => 'Description'))
            ->add('main', 'choice', array('label' => 'Statut', 'choices' => array('1' => 'Principal', '0' => 'Secondaire')))
            ->add('images', 'sonata_type_collection',
                array(
                    'required' => false,
                    'label' => 'Images',
                    'help' => '<div style="color:red;"><b>Attention :</b> Ajouter une nouvelle
                    image supprime les fichiers choisis précédemment!
                    <br/>Il est préférable de cliquer sur le bouton Ajouter autant de fois que nécessaire puis de choisir les images voulu(s).</div>'

                )
                , array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'targetEntity' => 'Apa\StoryBundle\Entity\Image'
                )
            )
        ;

        /*foreach($galerie as $img ) {
            echo $img;
        }*/
    }

    // Fields to be shown on filter forms (filtre pour rechercher rapidemment un objet)
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('firstname', null, array('label' => 'Prénom'))
            ->add('name', null, array('label' => 'Nom'))
        ;
    }

    // Fields to be shown on lists (champs dans la liste d'objets)
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('firstname', 'text', array('label' => 'Prénom'))
            ->add('name', 'text', array('label' => 'Nom'))
        ;
    }

    // fonctions pour gérer les personnages avant enregistrement
    public function prePersist($character){
        //si l'utilsateur n'a pas mis d'avatar on en met un par défaut
        if($character->getFile() == null){
            $character->setAvatar('avatarByDefault.png');
        }

        // Gestion des images
        $this->manageFileUpload($character);
    }

    public function preUpdate($character){
        //récupère le nom et le prénom du personnage en base de données
        $entity = new \Apa\StoryBundle\Entity\CharacterStory();
        $entityManager = $this->modelManager->getEntityManager($entity);
        $resultSQL_characterInDatabase = $entityManager->createQuery('SELECT c.name, c.firstname FROM Apa\StoryBundle\Entity\CharacterStory c WHERE c.id = '.$character->getId())->execute();
        $nameInDatabase = $resultSQL_characterInDatabase[0]['name'];
        $firstnameInDatabase = $resultSQL_characterInDatabase[0]['firstname'];

        $newFullName = $character->getFirstname().'-'.$character->getName();
        $oldFullName = $firstnameInDatabase.'-'.$nameInDatabase;

        //si l'utilisateur a changé le nom ou prénom du personnage
        if($character->getFirstname() != $firstnameInDatabase || $character->getName() != $nameInDatabase){
            //on renomme le dossier ou sont stockées ses images
            rename ("uploads/apastory/images/$oldFullName", "uploads/apastory/images/$newFullName");
        }

        $this->manageFileUpload($character);
    }

    private function manageFileUpload($character) {
        $images = $character->getImages();

        foreach($images as $image ) {
            if ($image->getFile()) {
                $image->refreshUpdated();
                $image->setCharacterStory($character);
            }
        }
    }
}