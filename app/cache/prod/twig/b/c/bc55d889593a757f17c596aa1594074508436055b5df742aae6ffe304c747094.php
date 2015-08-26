<?php

/* ApaStoryBundle:Story:menuChapter.html.twig */
class __TwigTemplate_bc55d889593a757f17c596aa1594074508436055b5df742aae6ffe304c747094 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["listChapters"]) ? $context["listChapters"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["chapter"]) {
            // line 2
            echo "    <li>
        <a class=\"oneCapital\" href=\"";
            // line 3
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("apa_story_chapter", array("numero" => $this->getAttribute($context["chapter"], "id", array()))), "html", null, true);
            echo "\">
            ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute($context["chapter"], "title", array()), "html", null, true);
            echo "
        </a>
    </li>  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['chapter'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Story:menuChapter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  26 => 3,  23 => 2,  19 => 1,);
    }
}
