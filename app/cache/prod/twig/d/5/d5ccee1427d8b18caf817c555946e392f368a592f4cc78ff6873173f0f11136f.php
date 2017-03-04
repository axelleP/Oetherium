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
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 5
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Œtherium")) {
                // line 6
                echo "            L'histoire de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 7
$context["page"], "title", array()) == "Auteurs")) {
                // line 8
                echo "            Les auteurs de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 9
$context["page"], "title", array()) == "Faq")) {
                // line 10
                echo "            L'Oetherium répond à vos questions
        ";
            } elseif (($this->getAttribute(            // line 11
$context["page"], "title", array()) == "Liens")) {
                // line 12
                echo "            Les contacts de l'Oetherium
        ";
            } else {
                // line 14
                echo "            Les mentions légales du site Oetherium
        ";
            }
            // line 16
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 19
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 20
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 21
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Œtherium")) {
                // line 22
                echo "            <meta name=\"description\" content=\"Venez découvrir <strong>l'univers de l'Otherium</strong> et de ses nombreux personnages!\">
        ";
            } elseif (($this->getAttribute(            // line 23
$context["page"], "title", array()) == "Auteurs")) {
                // line 24
                echo "            <meta name=\"description\" content=\"Bianca et kikile sont les auteurs de l'Oetherium.\">
        ";
            } elseif (($this->getAttribute(            // line 25
$context["page"], "title", array()) == "Faq")) {
                // line 26
                echo "            <meta name=\"description\" content=\"Voici la foire aux quenelles. Heu questions* pardon! En plus j'aime pas ça les quenelles...\">
        ";
            } elseif (($this->getAttribute(            // line 27
$context["page"], "title", array()) == "Liens")) {
                // line 28
                echo "            <meta name=\"description\" content=\"Retrouvez les <strike>esclaves</strike> amis de nos auteurs.\">
        ";
            } else {
                // line 30
                echo "            <meta name=\"description\" content=\"Cette page vous permet de consulter les mentions légales de l'Oetherium.\">
        ";
            }
            // line 32
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 35
    public function block_descriptionMenu($context, array $blocks = array())
    {
        // line 36
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 37
            echo "        ";
            if (($this->getAttribute($context["page"], "title", array()) == "Œtherium")) {
                // line 38
                echo "            Accueil
        ";
            } elseif (($this->getAttribute(            // line 39
$context["page"], "title", array()) == "Auteurs")) {
                // line 40
                echo "            Inventeurs de l'Oetherium
        ";
            } elseif (($this->getAttribute(            // line 41
$context["page"], "title", array()) == "Faq")) {
                // line 42
                echo "            Trouvez la réponse à votre problème
        ";
            } elseif (($this->getAttribute(            // line 43
$context["page"], "title", array()) == "Liens")) {
                // line 44
                echo "            Contacts de l'Oetherium
        ";
            } else {
                // line 46
                echo "            Mentions légales
        ";
            }
            // line 48
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        // line 52
        echo "    ";
        if (((isset($context["errorC"]) ? $context["errorC"] : null) == "true")) {
            // line 53
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
        // line 63
        echo "    
    ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 65
            echo "        <div itemscope itemtype=\"http://schema.org/CreativeWork\">
            <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
            echo "</h1>
            <div id=\"contentMiddleFrame\" itemprop=\"text\">";
            // line 67
            echo $this->getAttribute($context["page"], "contents", array());
            echo "</div>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    // line 72
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 73
        echo "    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["selectedPage"]) ? $context["selectedPage"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 74
            echo "        <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
            echo "&amp;text=";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["page"], "title", array()), array(" " => "%20")), "html", null, true);
            echo "\">
            <i class=\"fa fa-twitter fa-lg tw\">t</i>
        </a>
        
        <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
            echo "&amp;t=";
            echo twig_escape_filter($this->env, strtr($this->getAttribute($context["page"], "title", array()), array(" " => "%20")), "html", null, true);
            echo "\">
            <i class=\"fa fa-facebook fa-lg fb\">f</i>
        </a>
        
        <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
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
        return array (  228 => 82,  219 => 78,  209 => 74,  204 => 73,  201 => 72,  190 => 67,  186 => 66,  183 => 65,  179 => 64,  176 => 63,  164 => 53,  161 => 52,  158 => 51,  150 => 48,  146 => 46,  142 => 44,  140 => 43,  137 => 42,  135 => 41,  132 => 40,  130 => 39,  127 => 38,  124 => 37,  119 => 36,  116 => 35,  108 => 32,  104 => 30,  100 => 28,  98 => 27,  95 => 26,  93 => 25,  90 => 24,  88 => 23,  85 => 22,  82 => 21,  77 => 20,  74 => 19,  66 => 16,  62 => 14,  58 => 12,  56 => 11,  53 => 10,  51 => 9,  48 => 8,  46 => 7,  43 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
