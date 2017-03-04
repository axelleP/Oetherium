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
                  'label' => 'Numéro (Attention : Si les numéros de chapitres ne se suivent pas (chap. 1,2,3), il y aura des erreurs de liens!)',
                  //'read_only' => true,
            )

        )                             
        ->add('title', 'text', array('label' => 'Titre'))
        ->add('pagesBook', 'sonata_type_collection', array('required' => false,'label' => 'Pages du chapitre (Attention : Ajouter une nouvelle
                                                    page supprime les nouveaux contenus précédent! Cliquez sur le bouton Ajouter * le nombre de pages à ajouter)')
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