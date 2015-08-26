<?php

/* ApaStoryBundle:Story:seeChapters.html.twig */
class __TwigTemplate_e638b0edd966fc550ec4373ce82fe9ce82b31a52f13983fab0ed7ed261dc61f5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Story:seeChapters.html.twig", 1);
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
        echo "Les chapitres de l'Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Venez lire tout les chapitres de l'Oetherium.\">
";
    }

    // line 8
    public function block_descriptionMenu($context, array $blocks = array())
    {
        echo "Les chapitres";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div itemscope itemtype=\"http://schema.org/CreativeWork\">
        <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">Sommaire</h1>
        
        <div id=\"contentMiddleFrame\" itemprop=\"text\"> 
                ";
        // line 15
        if ((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination"))) {
            // line 16
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
            foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
                // line 17
                echo "                        <span itemscope itemtype=\"http://schema.org/Thing\">
                            <a class=\"link\" itemprop=\"url\" href=\"";
                // line 18
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_chapter", array("numero" => $this->getAttribute($context["chapter"], "id", array()))), "html", null, true);
                echo "\">
                                <span class=\"capital chapterTitle\" itemprop=\"name\">";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($context["chapter"], "number", array()), "html", null, true);
                echo ". ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["chapter"], "title", array()), "html", null, true);
                echo "</span>
                            </a>
                        </span><br><br>
                        <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 24
            echo "                ";
        } else {
            // line 25
            echo "                    Il n'existe pas encore de chapitres.
                ";
        }
        // line 27
        echo "        </div>
        <div id=\"pagination\" itemprop=\"pagination\">";
        // line 28
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "</div>
    </div>
";
    }

    // line 32
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 33
        echo "    <a class=\"buttonSocialNetworkFirst centerPage\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Les%20chapitres%20de%20l'Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 37
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Les%20chapitres%20de%20l'Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 41
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Story:seeChapters.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 41,  116 => 37,  108 => 33,  105 => 32,  98 => 28,  95 => 27,  91 => 25,  88 => 24,  75 => 19,  71 => 18,  68 => 17,  63 => 16,  61 => 15,  55 => 11,  52 => 10,  46 => 8,  41 => 5,  38 => 4,  32 => 2,  11 => 1,);
    }
}
