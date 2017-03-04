<?php

namespace Apa\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    public function checkChapterNumber()
    {
        var_dump('ok');exit;
        return new JsonResponse(array('data' => json_encode("ok")));
    }
}
