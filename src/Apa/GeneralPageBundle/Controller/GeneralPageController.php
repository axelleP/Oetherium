<?php

namespace Apa\GeneralPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
//use Symfony\Component\HttpFoundation\Request;// à mettre pour récupèrer les paramètres de la page : exemple la route
//use Symfony\Component\HttpFoundation\Response; // à mettre quand on utilise response au lieu de render

class GeneralPageController extends Controller
{
    public function seePageAction($pageTitle, $hasErrorConnexion)
    {
        //Appel les services dont on a besoin pour récupérer le repository page
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaGeneralPageBundle:Page');
        //Récupère la page concernée
        $page = $repository->findOneBy(array('title' => $pageTitle));

        return $this->render('ApaGeneralPageBundle:GeneralPage:seePage.html.twig',
            array('page' => $page, 'hasErrorConnexion' => $hasErrorConnexion)
        );
    }
}
