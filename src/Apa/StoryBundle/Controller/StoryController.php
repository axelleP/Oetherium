<?php

namespace Apa\StoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class StoryController extends Controller {

    public function seeCharactersAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:CharacterStory');

        //Récupère les personnages
        $mainCharacters = $repository->findByMain('1'); //main est un attribut de la class CharacterStory
        $minorCharacters = $repository->findByMain('0');

        return $this->render('ApaStoryBundle:Character:seeCharacters.html.twig', array(
            'mainCharacters' => $mainCharacters, 'minorCharacters' => $minorCharacters
        ));
    }

    public function seeCharacterProfileAction($firstname, $name) {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:CharacterStory');

        //Récupère les informations du personnage
        $characterProfile = $repository->findOneBy(array('firstname' => $firstname, 'name' => $name));
        $images = $characterProfile->getImages();

        return $this->render('ApaStoryBundle:Character:seeCharacterProfile.html.twig', array(
            'characterProfile' => $characterProfile, 'images' => $images
        ));
    }

    //Sert d'exemple pour un menu dynamique
    public function listChapterAction() {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:Chapter');

        //Récupère les chapitres
        $chapters = $repository->findAll();

        return $this->render('ApaStoryBundle:Story:menuChapter.html.twig', array(
            'listChapters' => $chapters
        ));
    }

    public function seeChaptersAction($page) {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:Chapter');

        //Récupère les chapitres
        $chapters = $repository->findAll();

        //Pagination
        $paginator = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
            $chapters,
            $this->get('request')->query->get('page', $page), //page active
            10 //limite par page
        );

        return $this->render('ApaStoryBundle:Story:seeChapters.html.twig', array(
            'pagination' => $pagination
        ));
    }

    public function readChapterAction($numero, $page) {
        $manager = $this->getDoctrine()->getManager();
        $rep_chapter = $manager->getRepository('ApaStoryBundle:Chapter');
        $rep_pageBook = $manager->getRepository('ApaStoryBundle:PageBook');

        //Récupère les informations du chapitre et de ses pages
        $chapter = $rep_chapter->findOneBy(array('number' => $numero));
        $pages = $rep_pageBook->findBy(array('chapter' => $chapter), array('number' => 'asc'));

        //1er et dernier id en base
        $firstChapter = $rep_chapter->findOneBy(array(), array('id' => 'asc'), 1);
        $lastChapter = $rep_chapter->findOneBy(array(), array('id' => 'desc'), 1);
        $idFirstChapter = $firstChapter->getId();
        $idlLastChapter = $lastChapter->getId();

        //Pagination
        $paginator = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
            $pages,
            $this->get('request')->query->get('page', $page), //page active
            1 //limite par page
        );

        return $this->render('ApaStoryBundle:Story:readChapter.html.twig', array(
            'chapter' => $chapter
            , 'pagination' => $pagination
            , 'idFirstChapter' => $idFirstChapter
            , 'idlLastChapter' => $idlLastChapter
        ));
    }

    public function seeAnnexTextsAction($page) {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:AnnexText');

        //Récupère les textes annexes
        $annexTexts = $repository->findAll();

        //Pagination
        $paginator = $this->get('knp_paginator'); //on se sert du bundle KnpPaginatorBundle
        $pagination = $paginator->paginate(
            $annexTexts,
            $this->get('request')->query->get('page', $page), //page active
            5 //limite par page
        );

        return $this->render('ApaStoryBundle:Story:seeAnnexTexts.html.twig', array(
            'pagination' => $pagination
        ));
    }

    public function readAnnexTextAction($id) {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:AnnexText');

        //Récupère les informations du texte annexe
        $annexText = $repository->find($id);

        //id texte annexe suivant et précédent
        $nextAnnexText = $repository->getNextId($id);
        $previousAnnexText = $repository->getPreviousId($id);
        $idNextAnnexText = $nextAnnexText['id'];
        $idPreviousAnnexText = $previousAnnexText['id'];

        return $this->render('ApaStoryBundle:Story:readAnnexText.html.twig', array(
            'annexText' => $annexText
            , 'idPreviousAnnexText' => $idPreviousAnnexText
            , 'idNextAnnexText' => $idNextAnnexText
        ));
    }

}
