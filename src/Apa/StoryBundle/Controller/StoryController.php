<?php

namespace Apa\StoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;// à mettre pour recuperer les parametres de la page : exemple la route
//use Symfony\Component\HttpFoundation\Response; // à mettre quand on utilise response au lieu de render

class StoryController extends Controller
{
    public function seeCharactersAction()
    {
        //On appel les services dont on a besoin pour récupérer le repository CharacterStory
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:CharacterStory');

        //On récupère les personnages
        $mainCharacters = $repository->getMainCharacters(); //1ere méthode
        $minorCharacters = $repository->findByMain('0'); //2eme méthode (main étant un attribut)
        
        return $this->render('ApaStoryBundle:Character:seeCharacters.html.twig',
                            array('mainCharacters' => $mainCharacters, 'minorCharacters' => $minorCharacters));
    }
    
    public function seeCharacterProfileAction($firstname,$name)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:CharacterStory');

        //On récupère les informations du personnage
        $characterProfile = $repository->findOneBy(array('firstname' => $firstname, 'name' => $name));
        $images = $characterProfile->getImages();
        
        return $this->render('ApaStoryBundle:Character:seeCharacterProfile.html.twig',
                             array('characterProfile' => $characterProfile, 'images' => $images));
    }
    
    //Sert d'exemple pour un menu dynamique
    public function listChapterAction()
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:Chapter');

        //On récupère les chapitres
        $chapters = $repository->findAll();
        
        return $this->render('ApaStoryBundle:Story:menuChapter.html.twig', array('listChapters' => $chapters));
    }
    
    public function seeChaptersAction($page)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:Chapter');

        //On récupère les chapitres
        $chapters = $repository->findAll();
        
        //Pagination
        $paginator  = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
                      $chapters,
                      $this->get('request')->query->get('page', $page),/*page active*/
                      10/*limite par page*/
                      );
        
        return $this->render('ApaStoryBundle:Story:seeChapters.html.twig', array('pagination' => $pagination));
    }
    
    public function readChapterAction($numero, $page)
    {
        $rep_chapter = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:Chapter');
                   
        $rep_pagesBook = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:PageBook');

        //On récupère les informations du chapitre et de ses pages
        $chapter = $rep_chapter->findOneBy(array('id' => $numero));
        $pages = $rep_pagesBook->findBy(array('chapter' => $chapter), array('number' => 'asc'));
        
        //1er et dernier id en base
        $firstId = $rep_chapter->getIdByOrder('asc');
        $lastId = $rep_chapter->getIdByOrder('desc');
        
        //Pagination
        $paginator  = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
                      $pages,
                      $this->get('request')->query->get('page', $page),/*page active*/
                      1/*limite par page*/
                      );
        
        return $this->render('ApaStoryBundle:Story:readChapter.html.twig',
                             array('chapter' => $chapter, 'pagination' => $pagination, 'firstId' => $firstId[0]['id'], 'lastId' => $lastId[0]['id']));
    }
    
    public function seeAnnexTextsAction($page)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:AnnexText');

        //On récupère les textes annexes
        $annexTexts = $repository->findBy(array(), array('id' => 'desc'));
        
        //Pagination
        $paginator  = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
                      $annexTexts,
                      $this->get('request')->query->get('page', $page),/*page active*/
                      5/*limite par page*/
                      );
        
        return $this->render('ApaStoryBundle:Story:seeAnnexTexts.html.twig', array('pagination' => $pagination));
    }
    
    public function readAnnexTextAction($numero)
    {
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:AnnexText');

        //On récupère les informations du texte annexe
        $annexText = $repository->findOneBy(array('id' => $numero));
        
        //1er et dernier id en base
        $firstId = $repository->getIdByOrder('asc');
        $lastId = $repository->getIdByOrder('desc');
        
        return $this->render('ApaStoryBundle:Story:readAnnexText.html.twig',
                             array('annexText' => $annexText, 'firstId' => $firstId[0]['id'], 'lastId' => $lastId[0]['id']));
    }
    
}
