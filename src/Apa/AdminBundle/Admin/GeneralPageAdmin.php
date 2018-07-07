<?php
// src/Apa/AdminBundle/Admin/GeneralPageAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;

class GeneralPageAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('title', 'text', array('label' => 'Titre', 'disabled'  => true))
            ->add('contents', 'ckeditor', array(
                    'label' => 'Contenu',
                    'config' => array(
                        'toolbar' => array(
                            array(
                                'name'  => 'text',
                                'items' => array('Bold', 'Italic', 'Underline','Superscript','HorizontalRule', 'Format', 'Font', 'FontSize','TextColor','CreateDiv',
                                ),
                            ),
                            '/',
                            array(
                                'name'  => 'basicstyles1',
                                'items' => array('JustifyLeft', 'JustifyCenter', 'JustifyRight', 'JustifyBlock', '-', 'BidiLtr', 'BidiRtl',
                                '-', 'Cut', 'Copy', 'Paste', 'PasteText', 'PasteFromWord',
                                '-', 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent',
                                '-', 'Blockquote',
                                '-', 'Image', 'Link', 'Unlink', 'Table'),
                            ),
                            '/',
                            array(
                                'name'  => 'basicstyles2',
                                'items' => array('Maximize', 'Source','-', 'Undo', 'Redo',),
                            ),

                        ),
                        'uiColor' => '#ffffff',
                    ),
            ));
    }

    // Fields to be shown on filter forms (filtre pour rechercher rapidemment un objet)
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('title', null, array('label' => 'Titre'))
        ;
    }

    // Fields to be shown on lists (champs dans la liste d'objets)
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('title', 'text', array('label' => 'Titre'))
        ;
    }

    // ne pas oublier de rajouter le use Sonata\AdminBundle\Route\RouteCollection;
    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->remove('create');
        $collection->remove('delete');
    }
}