<?php

namespace Apa\GeneralPageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralPageController extends Controller
{
    public function seePageAction($page, $errorConnexion)
    {
        //On appel les services dont on a besoin pour récupérer le repository page
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaGeneralPageBundle:Page');

        //On récupère la page par la méthode getPage($name) du repository
        $selectedPage = $repository->getPage($page);
        
        return $this->render('ApaGeneralPageBundle:GeneralPage:seePage.html.twig',
                            array('selectedPage' => $selectedPage, 'errorC' => $errorConnexion));
    }
}
