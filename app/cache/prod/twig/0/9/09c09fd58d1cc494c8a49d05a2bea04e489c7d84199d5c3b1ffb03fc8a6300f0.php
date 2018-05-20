<?php

/* ApaStoryBundle:Story:readChapter.html.twig */
class __TwigTemplate_09c09fd58d1cc494c8a49d05a2bea04e489c7d84199d5c3b1ffb03fc8a6300f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Story:readChapter.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'metaDescriptionPage' => array($this, 'block_metaDescriptionPage'),
            'descriptionMenu' => array($this, 'block_descriptionMenu'),
            'body' => array($this, 'block_body'),
            'buttonTextDisplay' => array($this, 'block_buttonTextDisplay'),
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
        echo "Chapitre \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
        echo "\" - Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Qu'allez vous découvrir dans ce nouveau chapitre...\">
";
    }

    // line 8
    public function block_descriptionMenu($context, array $blocks = array())
    {
        echo "Bonne lecture";
    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        // line 11
        echo "    <div itemscope itemtype=\"http://schema.org/CreativeWork\">
        <h1 id=\"title\" class=\"uppercase\" itemprop=\"headline\">";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), "html", null, true);
        echo " - Chapitre ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()), "html", null, true);
        echo "</h1>

        <div id=\"contentMiddleFrame\" itemprop=\"text\">
            <div class=\"contentChapter\">
                ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["page"]) {
            // line 17
            echo "                    ";
            echo $this->getAttribute($context["page"], "contents", array());
            echo "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "            </div>
        </div>

        <div id=\"pagination\">";
        // line 22
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : null));
        echo "</div>
        <br>
        ";
        // line 24
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) != (isset($context["idFirstChapter"]) ? $context["idFirstChapter"] : null))) {
            // line 25
            echo "            <a class=\"boxLink\" itemprop=\"url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_chapter", array("numero" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()) - 1))), "html", null, true);
            echo "\">Chapitre précédent</a>&nbsp;-
        ";
        }
        // line 27
        echo "
        ";
        // line 28
        if (($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "id", array()) != (isset($context["idlLastChapter"]) ? $context["idlLastChapter"] : null))) {
            // line 29
            echo "            <a class=\"boxLink\" itemprop=\"url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_chapter", array("numero" => ($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "number", array()) + 1))), "html", null, true);
            echo "\">Chapitre suivant</a>&nbsp;-
        ";
        }
        // line 31
        echo "
        <a class=\"boxLink\" itemprop=\"url\" href=\"";
        // line 32
        echo $this->env->getExtension('routing')->getPath("apa_story_chapters");
        echo "\">Retour aux chapitres</a><br><br>
    </div>
";
    }

    // line 36
    public function block_buttonTextDisplay($context, array $blocks = array())
    {
        // line 37
        echo "    <a class=\"link\" href=\"#\" title=\"Afficher les textes cachés de l'histoire\"><p class=\"button buttonTextDisplay centerPage\">a</p></a>
";
    }

    // line 40
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 41
        echo "    <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Chapitre%20«";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), array(" " => "%20")), "html", null, true);
        echo "»%20-%20Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>

    <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 45
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Chapitre%20«";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["chapter"]) ? $context["chapter"] : null), "title", array()), array(" " => "%20")), "html", null, true);
        echo "»%20-%20Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>

    <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Story:readChapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 49,  143 => 45,  133 => 41,  130 => 40,  125 => 37,  122 => 36,  115 => 32,  112 => 31,  106 => 29,  104 => 28,  101 => 27,  95 => 25,  93 => 24,  88 => 22,  83 => 19,  74 => 17,  70 => 16,  61 => 12,  58 => 11,  55 => 10,  49 => 8,  44 => 5,  41 => 4,  33 => 2,  11 => 1,);
    }
}
