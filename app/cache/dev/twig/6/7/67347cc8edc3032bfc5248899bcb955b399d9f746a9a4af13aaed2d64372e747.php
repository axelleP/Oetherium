<?php

/* SonataAdminBundle::layout.html.twig */
class __TwigTemplate_67347cc8edc3032bfc5248899bcb955b399d9f746a9a4af13aaed2d64372e747 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SonataAdminBundle::standard_layout.html.twig", "SonataAdminBundle::layout.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/admin.css"), "html", null, true);
        echo "\"/>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
";
    }

    // line 9
    public function block_javascripts($context, array $blocks = array())
    {
        // line 10
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/ivoryckeditor/ckeditor.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/init.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/admin/functions.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    <script src=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/fosjsrouting/js/router.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("fos_js_routing_js", array("callback" => "fos.Router.setData"));
        echo "\"></script>
";
    }

    // line 19
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 20
        echo "    <nav id=\"navigation\"> 
        <ul>
            <li class=\"menuLink\"><a href=\"";
        // line 22
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_homepage");
        echo "\" title=\"Oetherium\">Retour au site</a></li>
            <li><a href=\"/Oetherium/web/app_dev.php/admin/apa/story/chapter/list\" title=\"Liste des chapitres\">Chapitres</a></li>
            <li><a href=\"/Oetherium/web/app_dev.php/admin/apa/story/annextext/list\" title=\"Liste des textes annexes\">Textes annexes</a></li>
            <li><a href=\"/Oetherium/web/app_dev.php/admin/apa/story/characterstory/list\" title=\"Liste des personnages\">Personnages</a></li>
            <li><a href=\"/Oetherium/web/app_dev.php/admin/apa/generalpage/page/list\" title=\"Liste des pages du site\">Pages générales</a></li>
            <li class=\"menuLink\"><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Déconnexion</a></li>
        </ul>
    </nav>
";
    }

    // line 32
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 33
        echo "    ";
        $this->displayParentBlock("sonata_wrapper", $context, $blocks);
        echo "
    ";
        // line 35
        echo "    ";
        $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
        // line 49
        echo "    ";
        // line 50
        echo "    <script type=\"text/javascript\">
        var blockManagement = document.getElementsByClassName('box');
        
        if(blockManagement[1] !== undefined){
            blockManagement[1].style.display = \"none\";
        }
        /*for(var i = 0; i <= blockManagement.length; i++) {
            if(blockManagement[i].innerHTML == 'Gestion optionnel'){
                blockManagement[i].style.display = \"none\";
            }
        }*/
   </script>
";
    }

    // line 35
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 36
        echo "        <!--<div class=\"navbar-right\">
            <ul class=\"nav navbar-nav\">
                <li class=\"dropdown user-menu\">
                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                        <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                    </a>
                    <ul class=\"dropdown-menu dropdown-user\">
                        ";
        // line 43
        $this->loadTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"), "SonataAdminBundle::layout.html.twig", 43)->display($context);
        // line 44
        echo "                    </ul>
                </li>
            </ul>
        </div>-->
    ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  146 => 44,  144 => 43,  135 => 36,  132 => 35,  116 => 50,  114 => 49,  111 => 35,  106 => 33,  103 => 32,  95 => 27,  87 => 22,  83 => 20,  80 => 19,  74 => 15,  70 => 14,  66 => 13,  62 => 12,  58 => 11,  53 => 10,  50 => 9,  44 => 6,  40 => 5,  35 => 4,  32 => 3,  11 => 1,);
    }
}
