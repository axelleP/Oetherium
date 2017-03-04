<?php

namespace Apa\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    public function getLastChapterNumberAction()
    {
        //On appel les services dont on a besoin pour récupérer le repository Chapter
        $repository = $this->getDoctrine()
                   ->getManager()
                   ->getRepository('ApaStoryBundle:Chapter');

        //récupère le dernier numéro de chapitre
        $lastChapterNumber = $repository->getLastNumber();
        
        return new JsonResponse($lastChapterNumber['lastNumber']);
    }
}
