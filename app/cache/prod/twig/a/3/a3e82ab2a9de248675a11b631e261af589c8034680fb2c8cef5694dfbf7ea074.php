<?php

/* ApaStoryBundle:Story:seeAnnexTexts.html.twig */
class __TwigTemplate_a3e82ab2a9de248675a11b631e261af589c8034680fb2c8cef5694dfbf7ea074 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Story:seeAnnexTexts.html.twig", 1);
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
        echo "Les textes annexes de l'Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Vous voulez en savoir plus sur l'univers de l'Oetherium? Venez alors découvrir ses textes annexes.\">
";
    }

    // line 8
    public function block_descriptionMenu($context, array $blocks = array())
    {
        echo "Les textes annexes";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div itemscope itemtype=\"http://schema.org/CreativeWork\">
        <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">Textes annexes</h1>
        
        <div id=\"contentMiddleFrame\" itemprop=\"text\"> 
            ";
        // line 15
        if ( !twig_test_empty((isset($context["pagination"]) ? $context["pagination"] : null))) {
            // line 16
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["annexText"]) {
                // line 17
                echo "                    <div itemscope itemtype=\"http://schema.org/Thing\">
                        <p class=\"capital underline subtitle bold\" itemprop=\"name\">";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($context["annexText"], "title", array()), "html", null, true);
                echo "</p>
                        <p itemprop=\"description\">";
                // line 19
                echo twig_truncate_filter($this->env, strip_tags($this->getAttribute($context["annexText"], "contents", array())), 370, true);
                echo "</p>
                        <a class=\"colorUnderlineLink\" itemprop=\"url\" href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_annexText", array("numero" => $this->getAttribute($context["annexText"], "id", array()))), "html", null, true);
                echo "\">Lire la suite</a>
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['annexText'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 23
            echo "            ";
        } else {
            // line 24
            echo "                Il n'existe pas encore de textes annexes.
            ";
        }
        // line 26
        echo "        </div>
        <div id=\"pagination\" itemprop=\"pagination\">";
        // line 27
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "</div>
    </div>
";
    }

    // line 31
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 32
        echo "    <a class=\"buttonSocialNetworkFirst centerPage\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Les%20textes%20annexes%20de%20l'Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 36
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Les%20textes%20annexes%20de%20l'Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 40
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Story:seeAnnexTexts.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 40,  116 => 36,  108 => 32,  105 => 31,  98 => 27,  95 => 26,  91 => 24,  88 => 23,  79 => 20,  75 => 19,  71 => 18,  68 => 17,  63 => 16,  61 => 15,  55 => 11,  52 => 10,  46 => 8,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }
}
