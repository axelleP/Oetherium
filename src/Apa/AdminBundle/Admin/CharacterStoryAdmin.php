<?php
// src/Apa/AdminBundle/Admin/CharacterStoryAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class CharacterStoryAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {
        /* Prévisualisation de l'avatar */
        $avatar = $this->getSubject()->getAvatar();
        $fileFieldOptions = array('required' => false);

        if ($avatar && $avatar == 'avatarByDefault.png') {
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.'uploads/apastory/images/'.'/'.$avatar;
            $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
        } elseif ($avatar && ($webPath = $this->getSubject()->getUploadDir())) {
            $container = $this->getConfigurationPool()->getContainer();
            $fullPath = $container->get('request')->getBasePath().'/'.$webPath.'/'.$avatar;
            $fileFieldOptions['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
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
            ->add('gender', 'choice', array('label' => 'Sexe', 'choices' => array('mâle' => 'Mâle', 'femelle' => 'Femelle')))
            ->add('dateBirth', 'sonata_type_date_picker', array('sonata_field_description' => true, 'label' => 'Date de naissance','dp_language'=>'fr','format' => 'yyyy-MM-dd', 'attr' => array(
                'data-date-format' => 'DD/MM/YYYY')))
            ->add('placeBirth', 'text', array('label' => 'Lieu de naissance'))
            ->add('citation', 'text', array('label' => 'Citation'))
            ->add('description', 'textarea', array('label' => 'Description'))
            ->add('main', 'choice', array('label' => 'Statut', 'choices' => array('1' => 'Principal', '0' => 'Secondaire')))
            ->add('images', 'sonata_type_collection',
                array(
                    'required' => false,
                    'label' => 'Images',
                    'help' => '<div style="color:red;"><b>Attention :</b>
                    <br/>- Ajouter une nouvelle image supprime les fichiers choisis précédemment!
                    <br/>Il est préférable de cliquer sur le bouton Ajouter autant de fois que nécessaire puis de choisir le(s) image(s) voulue(s).
                    <br/>- Cliquer sur Ajouter sans mettre d\'image provoque une erreur.
                    </div>'
                )
                , array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'targetEntity' => 'Apa\StoryBundle\Entity\Image'
                )
            )
        ;
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
        $resultSQL_characterInDatabase = $entityManager->createQuery('SELECT c.name, c.firstname FROM Apa\StoryBundle\Entity\CharacterStory c WHERE c.id = '.$character->getId())->getOneOrNullResult();
        $nameInDatabase = $resultSQL_characterInDatabase['name'];
        $firstnameInDatabase = $resultSQL_characterInDatabase['firstname'];

        $newFullName = utf8_decode($character->getFirstname().'-'.$character->getName());
        $oldFullName = utf8_decode($firstnameInDatabase.'-'.$nameInDatabase);
        $path = 'uploads/apastory/images/';

        //si l'utilisateur a changé le nom ou prénom du personnage
        if($newFullName != $oldFullName){
            //on renomme le dossier ou sont stockées ses images
            if (file_exists($path.$oldFullName)) {
                rename($path.$oldFullName, $path.$newFullName);
            }

            $path2 = 'media/cache/normalAvatar/uploads/apastory/images/';
            if (file_exists($path2.$oldFullName)) {
                rename($path2.$oldFullName, $path2.$newFullName);
            }

            $path3 = 'media/cache/miniatureAvatar2/uploads/apastory/images/';
            if (file_exists($path3.$oldFullName)) {
                rename($path3.$oldFullName, $path3.$newFullName);
            }
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

    //après avoir supprimé un personnage
    public function preRemove($character){
        //on supprime ses images
        $fileName = utf8_decode($character->getFirstname().'-'.$character->getName());

        $path = 'uploads/apastory/images/';
        if (file_exists($path.$fileName)) {
            $this->rmAllDir($path.$fileName.'/');
        }

        $path2 = 'media/cache/normalAvatar/uploads/apastory/images/';
        if (file_exists($path2.$fileName)) {
            $this->rmAllDir($path2.$fileName);
        }

        $path3 = 'media/cache/miniatureAvatar2/uploads/apastory/images/';
        if (file_exists($path3.$fileName)) {
            $this->rmAllDir($path3.$fileName);
        }
    }
    public function rmAllDir($strDirectory){
        $handle = opendir($strDirectory);
        while(false !== ($entry = readdir($handle))){
            if($entry != '.' && $entry != '..'){
                if(is_dir($strDirectory.'/'.$entry)){
                    $this->rmAllDir($strDirectory.'/'.$entry);
                }elseif(is_file($strDirectory.'/'.$entry)){
                    unlink($strDirectory.'/'.$entry);
                }
            }
        }
        rmdir($strDirectory.'/'.$entry);
        closedir($handle);
    }
}