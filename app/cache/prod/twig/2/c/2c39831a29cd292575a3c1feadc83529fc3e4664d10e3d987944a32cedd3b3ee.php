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
        if ((isset($context["mainCharacters"]) ? $context["mainCharacters"] : null)) {
            // line 19
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["mainCharacters"]) ? $context["mainCharacters"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 20
                echo "                        <div class=\"vignetteCharacter\" itemscope itemtype=\"http://schema.org/Person\">
                            <ul class=\"zoom\">
                                <li>
                                    <a class=\"link\" itemprop=\"url\" href=\"";
                // line 23
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_characterProfile", array("firstname" => $this->getAttribute($context["character"], "firstname", array()), "name" => $this->getAttribute($context["character"], "name", array()))), "html", null, true);
                echo "\">
                                        <div class=\"centerPage vignetteAvatar\">
                                            ";
                // line 25
                if (($this->getAttribute($context["character"], "avatar", array()) == "avatarByDefault.png")) {
                    // line 26
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(("uploads/apastory/images/" . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 28
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(((((("uploads/apastory/images/" . $this->getAttribute($context["character"], "firstname", array())) . "-") . $this->getAttribute($context["character"], "name", array())) . "/") . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 30
                echo "                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"vignetteName capital\"><span itemprop=\"givenName\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                echo "</span><br><span itemprop=\"familyName\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                echo "</span></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "                ";
        } else {
            // line 38
            echo "                    Il n'existe pas encore de personnages principaux.
                ";
        }
        // line 40
        echo "            </div>
            <div class=\"clear\"></div> 
    
            <h2 class=\"subtitle\" itemprop=\"alternativeHeadline\">Secondaires</h2>
            
            <div class=\"centerText\">
                ";
        // line 46
        if ((isset($context["minorCharacters"]) ? $context["minorCharacters"] : null)) {
            // line 47
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["minorCharacters"]) ? $context["minorCharacters"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["character"]) {
                // line 48
                echo "                        <div class=\"vignetteCharacter\" itemscope itemtype=\"http://schema.org/Person\">
                            <ul class=\"zoom\">
                                <li>
                                    <a class=\"link\" itemprop=\"url\" href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_characterProfile", array("firstname" => $this->getAttribute($context["character"], "firstname", array()), "name" => $this->getAttribute($context["character"], "name", array()))), "html", null, true);
                echo "\">
                                        <div class=\"centerPage vignetteAvatar\">
                                            ";
                // line 53
                if (($this->getAttribute($context["character"], "avatar", array()) == "avatarByDefault.png")) {
                    // line 54
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(("uploads/apastory/images/" . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                    echo "\"/>
                                            ";
                } else {
                    // line 56
                    echo "                                                <img itemprop=\"image\" src=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(((((("uploads/apastory/images/" . $this->getAttribute($context["character"], "firstname", array())) . "-") . $this->getAttribute($context["character"], "name", array())) . "/") . $this->getAttribute($context["character"], "avatar", array())), "miniatureAvatar2")), "html", null, true);
                    echo "\" alt=\"Avatar miniature de ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                    echo "\"/>
                                            ";
                }
                // line 58
                echo "                                        </div>
                                    </a>
                                </li>
                            </ul>
                            <div class=\"vignetteName capital\"><span itemprop=\"givenName\">";
                // line 62
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "firstname", array()), "html", null, true);
                echo "</span><br><span itemprop=\"familyName\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["character"], "name", array()), "html", null, true);
                echo "</span></div>
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['character'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "                ";
        } else {
            // line 66
            echo "                    Il n'existe pas encore de personnages secondaires.
                ";
        }
        // line 68
        echo "            </div>
        </div>
    </div>
";
    }

    // line 73
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 74
        echo "    <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Les%20personnages%20de%20l'Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 78
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Les%20personnages%20de%20l'Oetherium\">
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
        return array (  223 => 82,  216 => 78,  208 => 74,  205 => 73,  198 => 68,  194 => 66,  191 => 65,  180 => 62,  174 => 58,  164 => 56,  154 => 54,  152 => 53,  147 => 51,  142 => 48,  137 => 47,  135 => 46,  127 => 40,  123 => 38,  120 => 37,  109 => 34,  103 => 30,  93 => 28,  83 => 26,  81 => 25,  76 => 23,  71 => 20,  66 => 19,  64 => 18,  55 => 11,  52 => 10,  46 => 8,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }
}
