<?php

/* ApaStoryBundle:Story:readAnnexText.html.twig */
class __TwigTemplate_4913ea8685bc1dd69d28fb3ff7e4ba8f404c1f37a848a06886be44ee5c5b4494 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Story:readAnnexText.html.twig", 1);
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
        echo "Texte annexe \"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "title", array()), "html", null, true);
        echo "\" - Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Compléter votre connaissance du monde de l'Oetherium avec ce texte annexe!\">
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
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "title", array()), "html", null, true);
        echo "</h1>
        
        <div id=\"contentMiddleFrame\" itemprop=\"text\">
            ";
        // line 15
        echo $this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "contents", array());
        echo "
        </div>
        
        <!-- Rappel : les textes sont affichés du plus récent au plus ancien -->
        <!-- si l'id n'est pas le premier de la liste alors on peut faire précédent-->
        ";
        // line 20
        if (($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "id", array()) != (isset($context["lastId"]) ? $context["lastId"] : $this->getContext($context, "lastId")))) {
            // line 21
            echo "            <a class=\"boxLink\" itemprop=\"url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_annexText", array("numero" => ($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "id", array()) + 1))), "html", null, true);
            echo "\">Texte précédent</a>
        ";
        }
        // line 23
        echo "        
        <!-- si l'id n'est pas le dernier de la liste alors on peut faire suivant-->
        ";
        // line 25
        if (($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "id", array()) != (isset($context["firstId"]) ? $context["firstId"] : $this->getContext($context, "firstId")))) {
            // line 26
            echo "            <a class=\"boxLink\" itemprop=\"url\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_annexText", array("numero" => ($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "id", array()) - 1))), "html", null, true);
            echo "\">Texte suivant</a>
        ";
        }
        // line 28
        echo "    
        - <a class=\"boxLink\" itemprop=\"url\" href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("apa_story_annexTexts");
        echo "\">Retour aux textes</a>
    </div>
    <br><br>
";
    }

    // line 34
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 35
        echo "    <a class=\"buttonSocialNetworkFirst centerPage twitterButton\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Texte%20annexe%20«";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "title", array()), array(" " => "%20")), "html", null, true);
        echo "»%20-%20Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage facebookButton\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 39
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Texte%20annexe%20«";
        echo twig_escape_filter($this->env, strtr($this->getAttribute((isset($context["annexText"]) ? $context["annexText"] : $this->getContext($context, "annexText")), "title", array()), array(" " => "%20")), "html", null, true);
        echo "»%20-%20Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage googleButton\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Story:readAnnexText.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 43,  118 => 39,  108 => 35,  105 => 34,  97 => 29,  94 => 28,  88 => 26,  86 => 25,  82 => 23,  76 => 21,  74 => 20,  66 => 15,  60 => 12,  57 => 11,  54 => 10,  48 => 8,  43 => 5,  40 => 4,  32 => 2,  11 => 1,);
    }
}
