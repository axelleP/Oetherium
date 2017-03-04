<?php
// src/Apa/AdminBundle/Admin/ChapterAdmin.php

namespace Apa\AdminBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Form\FormMapper;

class ChapterAdmin extends Admin
{
    // Fields to be shown on create/edit forms (ajout et modification d'objet)
    protected function configureFormFields(FormMapper $formMapper)
    {

        $formMapper
        ->add('number','number',
            array(
                  'label' => 'Numéro',
                  'read_only' => true,
            )

        )                             
        ->add('title', 'text', array('label' => 'Titre'))
        ->add('pagesBook', 'sonata_type_collection',
            array('required' => false,
                'label' => 'Pages du chapitre',
                'help' => '<div style="color:red;"><b>Attention :</b> Ajouter une nouvelle page supprime le texte des pages inséré précédemment!
                <br/>Il est préférable de cliquer sur le bouton Ajouter autant de fois que nécessaire puis d\'insérer le(s) texte(s) voulu(s).</div>'
            )
            
            , array(
            'edit' => 'inline',
            'inline' => 'table',
            'targetEntity' => 'Apa\StoryBundle\Entity\PageBook' 
        ));
        
        //var_dump($formMapper);exit;
    }

    // Fields to be shown on filter forms (filtre pour rechercher rapidemment un objet)
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('number', null, array('label' => 'Numéro'))
            ->add('title', null, array('label' => 'Titre'))
        ;
    }

    // Fields to be shown on lists (champs dans la liste d'objets)
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('number', 'number', array('label' => 'Numéro', 'class' => 'test'))
            ->addIdentifier('title', 'text', array('label' => 'Titre'))  
        ;
    }
    
    // fonctions pour gérer les chapitres avant enregistrement
    public function prePersist($chapter){
        $this->manageChapter($chapter);
    }

    public function preUpdate($chapter){
        $this->manageChapter($chapter);
    }
    
    private function manageChapter($chapter) {
        $pages = $chapter->getPagesBook();
       
        foreach($pages as $page ) {
            $page->setChapter($chapter);  
        }
    }
}