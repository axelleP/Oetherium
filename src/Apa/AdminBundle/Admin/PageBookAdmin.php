<?php
// src/Apa/AdminBundle/Admin/PageBookAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class PageBookAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('number', 'number', array('label' => 'Numéro de page'))
            ->add('contents', 'ckeditor', array('label' => 'Contenu',
                    'config' => array(
                        'toolbar' => array(
                            array(
                                'name'  => 'text',
                                'items' => array('Bold', 'Italic', 'Underline','Strike', 'Superscript','HorizontalRule', 'Format', 'Font', 'FontSize','TextColor','CreateDiv',
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
            ))
            /*->add('chapter', 'sonata_type_model_list', array('label' => 'Chapitre'), array(
                    'btn_add'       => 'Ajouter un chapitre',      //Specify a custom label
                    'btn_list'      => 'Sélectionner un chapitre',     //which will be translated
                    'btn_delete'    => false,             //or hide the button.
                    'btn_catalogue' => 'SonataNewsBundle' //Custom translation domain for buttons
                ), array(
                    'placeholder' => 'Chapitre non sélectionné'
                ))*/
        ;
    }

    // Fields to be shown on filter forms (filtre pour rechercher rapidemment un objet)
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('number', null, array('label' => 'Numéro de page'))
            ->add('chapter.title', null, array('label' => 'Chapitre'))
        ;
    }

    // Fields to be shown on lists (champs dans la liste d'objets)
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('number', 'number', array('label' => 'Numéro de page'))
            ->add('chapter.title', 'text', array('label' => 'Chapitre'))
        ;
    }
    
    // Récupère l'objet du formulaire
    // il manque la relation avec le chapitre correspondant
    public function getNewInstance()
    {
        //l'objet qu'on crée
        $instance = parent::getNewInstance();

        //requete pour récupérer la derniere page
        $entity = new \Apa\StoryBundle\Entity\PageBook();
        $query = $this->modelManager->getEntityManager($entity)->createQuery('SELECT MAX(p.number) FROM Apa\StoryBundle\Entity\PageBook p')->execute();
        
        //met une valeur au champ number
        //$instance->setNumber('1');
        //var_dump($this );exit;
    
        return $instance;
    }
}