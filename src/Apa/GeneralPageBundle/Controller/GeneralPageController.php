<?php

namespace Apa\GeneralPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralPageController extends Controller
{
    public function seePageAction($page, $errorConnexion)
    {
        //On appel les services dont on a besoin pour r�cup�rer le repository page
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaGeneralPageBundle:Page');

        //On r�cup�re la page par la m�thode getPage($name) du repository
        $selectedPage = $repository->getPage($page);
        
        $errorC = $errorConnexion;
        
        //var_dump($errorC);exit;
        
        return $this->render('ApaGeneralPageBundle:GeneralPage:seePage.html.twig',
                            array('selectedPage' => $selectedPage, 'errorC' => $errorC));
    }
}
