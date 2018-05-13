<?php

namespace Apa\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;

class AdminController extends Controller
{
    public function getLastChapterNumberAction()
    {
        $repository = $this->getDoctrine()->getManager()->getRepository('ApaStoryBundle:Chapter');

        //Récupère le dernier numéro de chapitre
        $lastChapterNumber = $repository->getLastNumber();

        return new JsonResponse($lastChapterNumber['lastNumber']);
    }
}
