<?php
// src/Apa/AdminBundle/Admin/ImageAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

class ImageAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {
        /* Prévisualisation de l'image */
            $fileFieldOptions3 = array('required' => false);
            $object = $this->getSubject();
            
            if ($object && ($webPath = $object->getUploadDir())) {
                $path = $object->getPath();
                $container = $this->getConfigurationPool()->getContainer();
                $fullPath = $container->get('request')->getBasePath().'/'.$webPath.'/'.$path;
                $fileFieldOptions3['help'] = '<img src="'.$fullPath.'" class="admin-preview" />';
            }

        $formMapper
            ->add('path', 'text', array('label' => 'Nom', 'disabled'  => true, 'attr' => array('class' => 'pathImage')))
            ->add('file', 'file', array('label' => 'Image', 'required' => false, 'attr' => array('class' => 'fileImage')), $fileFieldOptions3)
            ->add('description', 'text', array('label' => 'Description (Ex: Feliko qui mange une fleur)'))
        ;
    }

    // Fields to be shown on filter forms (filtre pour rechercher rapidemment un objet)
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('path', null, array('label' => 'Nom de l\'image'))
            ->add('characterStory.name', null, array('label' => 'Nom du personnage'))
        ;
    }

    // Fields to be shown on lists (champs dans la liste d'objets)
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('path', 'text', array('label' => 'Nom'))
        ;
    }
    
    // fonctions pour gérer les images avant enregistrement
    public function prePersist($image) {
        $this->manageFileUpload($image);
    }

    public function preUpdate($image) {
        $this->manageFileUpload($image);
    }

    private function manageFileUpload($image) {
        if ($image->getFile()) {
            $image->refreshUpdated();
        }
    }
}