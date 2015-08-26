<?php

/* SonataIntlBundle:CRUD:history_revision_timestamp.html.twig */
class __TwigTemplate_8c63861ec2b2dda2381042ba7bc991c8ca606fafec058a532918b0220d926f6f extends Twig_Template
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
        // line 11
        echo "
";
        // line 12
        echo $this->env->getExtension('sonata_intl_datetime')->formatDatetime($this->getAttribute((isset($context["revision"]) ? $context["revision"] : null), "timestamp", array()));
        echo "
";
    }

    public function getTemplateName()
    {
        return "SonataIntlBundle:CRUD:history_revision_timestamp.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }
}
