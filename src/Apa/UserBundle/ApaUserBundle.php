<?php

namespace Apa\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class ApaUserBundle extends Bundle
{
    //On hérite la classe ApaUserBundle de FOSUserBundle
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
