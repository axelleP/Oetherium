<?php

/* ApaStoryBundle:Character:seeCharacters.html.twig */
class __TwigTemplate_2c39831a29cd292575a3c1feadc83529fc3e4664d10e3d987944a32cedd3b3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Character:seeCharacters.html.twig", 1);
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
        echo "Les personnages de l'Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Retrouvez tout vos personnages préférés de l'Oetherium.\">
";
    }

    // line 8
    public function block_descriptionMenu($context, array $blocks = array())
    {
        echo "Les personnages";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div itemscope itemtype=\"http://schema.org/CreativeWork\">
        <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">Personnages</h1>
        
        <div id=\"contentMiddleFrame\" itemprop=\"text\"> 
            <h2 class=\"subtitle\" itemprop=\"alternativeHeadline\">Principaux</h2>
    
            <div class=\"centerText\">
                ";
        // line 18
        if ((isset($context["mainCharacters"]) ? $context["mainCharacters"] : $this->getContext($context, "mainCharacters"))) {
            // line 19
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mainCharacters"]) ? $context["mainCharacters"] : $this->getContext($context, "mainCharacters")));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 20
                echo "                        <div oncontextmenu=\"return false;\" class=\"vignetteCharacter\" itemscope itemtype=\"http://schema.org/Person\">
                            <ul class=\"zoom\">
                                <li>
                                    ";
                // line 23
                $context["name"] = "inconnu";
                // line 24
                echo "                                    ";
                if ( !twig_test_empty($this->getAttribute($context["character"], "name", array()))) {
                    // line 25
                    echo "                                        ";
                    $context["name"] = $this->getAttribute($context["character"], "name", array());
                    // line 26
                    echo "                                    ";
                }
                echo "   
                                    <a class=\"link\" itemprop=\"url\" href=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_characterProfile", array("firstname" => $this->getAttribute($context["character"], "firstname", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                echo "\">
                                        <div class=\"centerPage vignetteAvatar\">
                                            ";
                // line 29
                if (($this->getAttribute($context["character"], "avatar", array()) == "avatarByDefault.png")) {
                    // line 30
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(("uploads/apastory/images/" . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 32
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(((((("uploads/apastory/images/" . $this->getAttribute($context["character"], "firstname", array())) . "-") . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) . "/") . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 34
                echo "                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"vignetteName capital\"><span itemprop=\"givenName\">";
                // line 38
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                echo "</span><br><span itemprop=\"familyName\">";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</span></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                ";
        } else {
            // line 42
            echo "                    Il n'existe pas encore de personnages principaux.
                ";
        }
        // line 44
        echo "            </div>
            <div class=\"clear\"></div> 
    
            <h2 class=\"subtitle\" itemprop=\"alternativeHeadline\">Secondaires</h2>
            
            <div class=\"centerText\">
                ";
        // line 50
        if ((isset($context["minorCharacters"]) ? $context["minorCharacters"] : $this->getContext($context, "minorCharacters"))) {
            // line 51
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minorCharacters"]) ? $context["minorCharacters"] : $this->getContext($context, "minorCharacters")));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 52
                echo "                        <div oncontextmenu=\"return false;\" class=\"vignetteCharacter\" itemscope itemtype=\"http://schema.org/Person\">
                            <ul class=\"zoom\">
                                <li>
                                    ";
                // line 55
                $context["name"] = "inconnu";
                // line 56
                echo "                                    ";
                if ( !twig_test_empty($this->getAttribute($context["character"], "name", array()))) {
                    // line 57
                    echo "                                        ";
                    $context["name"] = $this->getAttribute($context["character"], "name", array());
                    // line 58
                    echo "                                    ";
                }
                echo " 
                                    <a class=\"link\" itemprop=\"url\" href=\"";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_characterProfile", array("firstname" => $this->getAttribute($context["character"], "firstname", array()), "name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
                echo "\">
                                        <div class=\"centerPage vignetteAvatar\">
                                            ";
                // line 61
                if (($this->getAttribute($context["character"], "avatar", array()) == "avatarByDefault.png")) {
                    // line 62
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(("uploads/apastory/images/" . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 64
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(((((("uploads/apastory/images/" . $this->getAttribute($context["character"], "firstname", array())) . "-") . (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name"))) . "/") . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 66
                echo "                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"vignetteName capital\"><span itemprop=\"givenName\">";
                // line 70
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                echo "</span><br><span itemprop=\"familyName\">";
                echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
                echo "</span></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 73
            echo "                ";
        } else {
            // line 74
            echo "                    Il n'existe pas encore de personnages secondaires.
                ";
        }
        // line 76
        echo "            </div>
        </div>
    </div>
";
    }

    // line 81
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 82
        echo "    <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Les%20personnages%20de%20l'Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 86
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Les%20personnages%20de%20l'Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 90
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Character:seeCharacters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 90,  242 => 86,  234 => 82,  231 => 81,  224 => 76,  220 => 74,  217 => 73,  206 => 70,  200 => 66,  190 => 64,  180 => 62,  178 => 61,  173 => 59,  168 => 58,  165 => 57,  162 => 56,  160 => 55,  155 => 52,  150 => 51,  148 => 50,  140 => 44,  136 => 42,  133 => 41,  122 => 38,  116 => 34,  106 => 32,  96 => 30,  94 => 29,  89 => 27,  84 => 26,  81 => 25,  78 => 24,  76 => 23,  71 => 20,  66 => 19,  64 => 18,  55 => 11,  52 => 10,  46 => 8,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }
}
