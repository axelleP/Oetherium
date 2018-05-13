<?php

/* ApaGeneralPageBundle:GeneralPage:seePage.html.twig */
class __TwigTemplate_d5ccee1427d8b18caf817c555946e392f368a592f4cc78ff6873173f0f11136f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaGeneralPageBundle:GeneralPage:seePage.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'metaDescriptionPage' => array($this, 'block_metaDescriptionPage'),
            'descriptionMenu' => array($this, 'block_descriptionMenu'),
            'body' => array($this, 'block_body'),
            'socialNetwork' => array($this, 'block_socialNetwork'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_titlePage($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Œtherium")) {
            // line 5
            echo "        L'histoire de l'Oetherium
    ";
        } elseif (($this->getAttribute(        // line 6
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Auteurs")) {
            // line 7
            echo "        Les auteurs de l'Oetherium
    ";
        } elseif (($this->getAttribute(        // line 8
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Faq")) {
            // line 9
            echo "        L'Oetherium répond à vos questions
    ";
        } elseif (($this->getAttribute(        // line 10
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Liens")) {
            // line 11
            echo "        Les contacts de l'Oetherium
    ";
        } else {
            // line 13
            echo "        Les mentions légales du site Oetherium
    ";
        }
    }

    // line 17
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Œtherium")) {
            // line 19
            echo "        <meta name=\"description\" content=\"Venez découvrir <strong>l'univers de l'Otherium</strong> et de ses nombreux personnages!\">
    ";
        } elseif (($this->getAttribute(        // line 20
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Auteurs")) {
            // line 21
            echo "        <meta name=\"description\" content=\"Bianca et kikile sont les auteurs de l'Oetherium.\">
    ";
        } elseif (($this->getAttribute(        // line 22
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Faq")) {
            // line 23
            echo "        <meta name=\"description\" content=\"Voici la foire aux quenelles. Heu questions* pardon! En plus j'aime pas ça les quenelles...\">
    ";
        } elseif (($this->getAttribute(        // line 24
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Liens")) {
            // line 25
            echo "        <meta name=\"description\" content=\"Retrouvez les <strike>esclaves</strike> amis de nos auteurs.\">
    ";
        } else {
            // line 27
            echo "        <meta name=\"description\" content=\"Cette page vous permet de consulter les mentions légales de l'Oetherium.\">
    ";
        }
    }

    // line 31
    public function block_descriptionMenu($context, array $blocks = array())
    {
        // line 32
        echo "    ";
        if (($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Œtherium")) {
            // line 33
            echo "        Accueil
    ";
        } elseif (($this->getAttribute(        // line 34
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Auteurs")) {
            // line 35
            echo "        Inventeurs de l'Oetherium
    ";
        } elseif (($this->getAttribute(        // line 36
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Faq")) {
            // line 37
            echo "        Trouvez la réponse à votre problème
    ";
        } elseif (($this->getAttribute(        // line 38
(isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()) == "Liens")) {
            // line 39
            echo "        Contacts de l'Oetherium
    ";
        } else {
            // line 41
            echo "        Mentions légales
    ";
        }
    }

    // line 45
    public function block_body($context, array $blocks = array())
    {
        // line 46
        echo "    ";
        if (((isset($context["hasErrorConnexion"]) ? $context["hasErrorConnexion"] : $this->getContext($context, "hasErrorConnexion")) == "true")) {
            // line 47
            echo "        <div id=\"failedConnection\">
            <input type=\"button\" class=\"closeForm\" value=\"X\">
            <div class=\"clear\"></div>
            <table class=\"centerPage\">
                <tr>
                    <td>Login et/ou mot de passe incorrect</td>
                </tr>
            </table>
        </div>
    ";
        }
        // line 57
        echo "    
    <div itemscope itemtype=\"http://schema.org/CreativeWork\">
        <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">";
        // line 59
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), "html", null, true);
        echo "</h1>
        <div id=\"contentMiddleFrame\" itemprop=\"text\">";
        // line 60
        echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "contents", array());
        echo "</div>
    </div>
";
    }

    // line 64
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 65
        echo "    <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), array(" " => "%20")), "html", null, true);
        echo "\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>

    <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 69
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "title", array()), array(" " => "%20")), "html", null, true);
        echo "\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>

    <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 73
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaGeneralPageBundle:GeneralPage:seePage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 73,  171 => 69,  161 => 65,  158 => 64,  151 => 60,  147 => 59,  143 => 57,  131 => 47,  128 => 46,  125 => 45,  119 => 41,  115 => 39,  113 => 38,  110 => 37,  108 => 36,  105 => 35,  103 => 34,  100 => 33,  97 => 32,  94 => 31,  88 => 27,  84 => 25,  82 => 24,  79 => 23,  77 => 22,  74 => 21,  72 => 20,  69 => 19,  66 => 18,  63 => 17,  57 => 13,  53 => 11,  51 => 10,  48 => 9,  46 => 8,  43 => 7,  41 => 6,  38 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
