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

    // line 2
    public function block_titlePage($context, array $blocks = array())
    {
        // line 3
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : $this->getContext($context, "selectedPage")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 4
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Oetherium")) {
                // line 5
                echo "            L'histoire de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 6
$context["page"], "title", array()) == "Auteurs")) {
                // line 7
                echo "            Les auteurs de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 8
$context["page"], "title", array()) == "Faq")) {
                // line 9
                echo "            L'Oetherium répond à vos questions
        ";
            } elseif (($this->getAttribute(            // line 10
$context["page"], "title", array()) == "Liens")) {
                // line 11
                echo "            Les contacts de l'Oetherium
        ";
            } else {
                // line 13
                echo "            Les mentions légales du site Oetherium
        ";
            }
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 18
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 19
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : $this->getContext($context, "selectedPage")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 20
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Oetherium")) {
                // line 21
                echo "            <meta name=\"description\" content=\"Venez découvrir <strong>l'univers de l'Otherium</strong> et de ses nombreux personnages!\">
        ";
            } elseif (($this->getAttribute(            // line 22
$context["page"], "title", array()) == "Auteurs")) {
                // line 23
                echo "            <meta name=\"description\" content=\"Bianca et kikile sont les auteurs de l'Oetherium.\">
        ";
            } elseif (($this->getAttribute(            // line 24
$context["page"], "title", array()) == "Faq")) {
                // line 25
                echo "            <meta name=\"description\" content=\"Voici la foire aux quenelles. Heu questions* pardon! En plus j'aime pas ça les quenelles...\">
        ";
            } elseif (($this->getAttribute(            // line 26
$context["page"], "title", array()) == "Liens")) {
                // line 27
                echo "            <meta name=\"description\" content=\"Retrouvez les <strike>esclaves</strike> amis de nos auteurs.\">
        ";
            } else {
                // line 29
                echo "            <meta name=\"description\" content=\"Cette page vous permet de consulter les mentions légales de l'Oetherium.\">
        ";
            }
            // line 31
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 34
    public function block_descriptionMenu($context, array $blocks = array())
    {
        // line 35
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : $this->getContext($context, "selectedPage")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 36
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Oetherium")) {
                // line 37
                echo "            Accueil
        ";
            } elseif (($this->getAttribute(            // line 38
$context["page"], "title", array()) == "Auteurs")) {
                // line 39
                echo "            Inventeurs de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 40
$context["page"], "title", array()) == "Faq")) {
                // line 41
                echo "            Trouvez la réponse à votre problème
        ";
            } elseif (($this->getAttribute(            // line 42
$context["page"], "title", array()) == "Liens")) {
                // line 43
                echo "            Contacts de l'Oetherium
        ";
            } else {
                // line 45
                echo "            Mentions légales
        ";
            }
            // line 47
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 50
    public function block_body($context, array $blocks = array())
    {
        // line 51
        echo "    ";
        if (((isset($context["errorC"]) ? $context["errorC"] : $this->getContext($context, "errorC")) == "true")) {
            // line 52
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
        // line 62
        echo "    
    ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : $this->getContext($context, "selectedPage")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 64
            echo "        <div itemscope itemtype=\"http://schema.org/CreativeWork\">
            <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</h1>
            <div id=\"contentMiddleFrame\" itemprop=\"text\">";
            // line 66
            echo $this->getAttribute($context["page"], "contents", array());
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 71
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 72
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : $this->getContext($context, "selectedPage")));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 73
            echo "        <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
            echo "&amp;text=";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["page"], "title", array()), array(" " => "%20")), "html", null, true);
            echo "\">
            <i class=\"fa fa-twitter fa-lg tw\">t</i>
        </a>
        
        <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
            echo "&amp;t=";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["page"], "title", array()), array(" " => "%20")), "html", null, true);
            echo "\">
            <i class=\"fa fa-facebook fa-lg fb\">f</i>
        </a>
        
        <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
            echo "\">
            <i class=\"fa fa-google-plus fa-lg google\">g</i>
        </a>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
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
        return array (  228 => 81,  219 => 77,  209 => 73,  204 => 72,  201 => 71,  190 => 66,  186 => 65,  183 => 64,  179 => 63,  176 => 62,  164 => 52,  161 => 51,  158 => 50,  150 => 47,  146 => 45,  142 => 43,  140 => 42,  137 => 41,  135 => 40,  132 => 39,  130 => 38,  127 => 37,  124 => 36,  119 => 35,  116 => 34,  108 => 31,  104 => 29,  100 => 27,  98 => 26,  95 => 25,  93 => 24,  90 => 23,  88 => 22,  85 => 21,  82 => 20,  77 => 19,  74 => 18,  66 => 15,  62 => 13,  58 => 11,  56 => 10,  53 => 9,  51 => 8,  48 => 7,  46 => 6,  43 => 5,  40 => 4,  35 => 3,  32 => 2,  11 => 1,);
    }
}
