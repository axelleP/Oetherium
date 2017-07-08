<?php

/* TwigBundle:Exception:error404.html.twig */
class __TwigTemplate_0aab68f0251b7ffd0790a77e68e2f2f5030ee63aa537bd1956f8bcf54f305139 extends Twig_Template
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
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>L'Oetherium ne trouve pas cette page (";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : null), "html", null, true);
        echo ")</title>
    <meta name=\"description\" content=\"Vous êtes vraiment intéressé par une page d'erreur? x)\">
</head>
<body>
    <h1>Oh! Vous ne devriez pas être ici! (erreur ";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : null), "html", null, true);
        echo ")</h1>
    <p>
        Retournez vite sur le site petit chenapan :<br>
        <li><a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_homepage");
        echo "\" title=\"L'Oetherium\">Oetherium</a></li>
    </p>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error404.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 12,  32 => 9,  25 => 5,  19 => 1,);
    }
}
