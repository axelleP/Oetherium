<?php

/* ::layout.html.twig */
class __TwigTemplate_6027eec8daeb2dd35674bdd250bb0e8ba1b70f67ae62f906880b629f5a08bb19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'metaDescriptionPage' => array($this, 'block_metaDescriptionPage'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'descriptionMenu' => array($this, 'block_descriptionMenu'),
            'body' => array($this, 'block_body'),
            'buttonTextDisplay' => array($this, 'block_buttonTextDisplay'),
            'socialNetwork' => array($this, 'block_socialNetwork'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"fr\">
    <head>
        <title>";
        // line 4
        $this->displayBlock('titlePage', $context, $blocks);
        echo "</title>
        <meta charset=\"UTF-8\">
        ";
        // line 6
        $this->displayBlock('metaDescriptionPage', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/favicon.png"), "html", null, true);
        echo "\">
\t";
        // line 8
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "            
\t";
        // line 15
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </head>
    
    <body>
        <div id=\"grayBackground\"></div>
        
        <div id=\"leftFrame\">
            <a oncontextmenu=\"return false;\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_homepage");
        echo "\" title=\"Accueil de l'Oetherium\">
                <img id=\"logo\" class=\"centerPage\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/logo-oetherium.png"), "html", null, true);
        echo "\" alt=\"logo de l'Oetherium\">
            </a>
            
            <div id=\"descriptionMenu\">
                ";
        // line 29
        $this->displayBlock('descriptionMenu', $context, $blocks);
        // line 30
        echo "\t    </div>
            
\t    <nav oncontextmenu=\"return false;\" id=\"navigation\"> 
\t\t<ul class=\"firstUl\">
\t\t   <li><a class=\"imgMenu\"  href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_homepage");
        echo "\" title=\"L'Oetherium\">Œtherium</a></li>
                   <li><a class=\"imgMenu\" href=\"";
        // line 35
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_author");
        echo "\" title=\"Les auteurs de l'Oetherium\">Auteurs</a></li>
\t\t   <li>
                        <a class=\"imgMenu imgMenu2 \" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("apa_story_chapter", array("numero" => "1"));
        echo "\" title=\"L'histoire de l'Oetherium\">Histoire</a>
                        <ul>
                            <li>
                                <a class=\"imgSubMenu\" href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("apa_story_chapters");
        echo "\" title=\"Les chapitres de l'Oetherium\">Chapitres</a>
                            </li>
                            <li>
                                <a class=\"imgSubMenu\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("apa_story_annexTexts", array("page" => 1));
        echo "\" title=\"Les textes annexes de l'Oetherium\">Textes annexes</a>
                            </li>
                        </ul>
                        <!-- exemple sans les { ! sinon ça exécute : render(controller('ApaStoryBundle:Story:listChapter')) -->
                   </li>
\t\t   <li><a class=\"imgMenu imgMenu3\" href=\"";
        // line 48
        echo $this->env->getExtension('routing')->getPath("apa_story_characters");
        echo "\" title=\"Les personnages de l'Oetherium\">Personnages</a></li>
\t\t   <li><a class=\"imgMenu\" href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_faq");
        echo "\" title=\"L'Oetherium répond à vos questions\">F.A.Q</a></li>
\t\t   <li><a class=\"imgMenu\" href=\"";
        // line 50
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_link");
        echo "\" title=\"Les sites affiliés à l'Oetherium\">Liens</a></li>
\t\t</ul>
            </nav>
\t</div>
\t
        <div id=\"book\">
            <!-- 09/07/2017
            <div id=\"borderLeftBook\"></div>
            -->
            <div id=\"middleFrame\">
                <div id=\"formLogin\">
                    <input type=\"button\" class=\"closeForm\" value=\"X\">
                    <div class=\"clear\"></div>
                    ";
        // line 63
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("FOSUserBundle:Security:login"));
        echo "
                </div>
                ";
        // line 65
        $this->displayBlock('body', $context, $blocks);
        echo "  
            </div>
            <!-- 09/07/2017
            <div id=\"borderRightBook\"></div>
            -->
        </div>
\t
\t<div oncontextmenu=\"return false;\" id=\"rightFrame\">
            <a class=\"link\" href=\"#\" title=\"Grossir la police\"><p class=\"firstButton buttonFontSize centerPage\">p</p></a>
            <a class=\"link\" href=\"#\" title=\"Changer l'apparence du texte\"> <p class=\"button buttonTextColor centerPage\">c</p></a>
            
            ";
        // line 76
        $this->displayBlock('buttonTextDisplay', $context, $blocks);
        // line 77
        echo "            ";
        $this->displayBlock('socialNetwork', $context, $blocks);
        // line 78
        echo "        </div>
            
        <!-- A mettre aprés l'utilisation de div(s) avec float-->
        <div class=\"clear\"></div>
        
        <footer>
            <div id=\"leftCorner\">
                <ul>
                    <li>Contact : hellypse@gmail.com</li>
                    <li>Réalisation : Axelle Palermo, Hellypse, K.Zlovetch</li>
                        <!-- Si on est connecté-->
                        ";
        // line 89
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 90
            echo "                            <!-- Si on est un admin-->
                            ";
            // line 91
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 92
                echo "                                <li><a class=\"link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
                echo "\">Panneau d'administration</a><a class=\"link\" href=\"";
                echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
                echo "\"> - Déconnexion</a></li>
                            ";
            }
            // line 94
            echo "                        <!-- Sinon-->
                        ";
        } else {
            // line 96
            echo "                        <li id=\"administration\">Administration</li>
                        ";
        }
        // line 98
        echo "                </ul>
            </div>
            
            <div id=\"rightCorner\">
                <ul>
                    <li><a class=\"underline\" href=\"";
        // line 103
        echo $this->env->getExtension('routing')->getPath("apa_generalPage_legalMention");
        echo "\" title=\"Mentions légales\">Mentions légales</a></li>
                    <li id=\"copyright\">© 2015, Héloïse Palermo – <span class=\"bold\">Tous droits réservés</span></li>                   
               </ul>
            </div>
            <div class=\"clear\"></div>
        </footer>
        <!--on met le javascript à la fin si possible (performance)-->
        <!-- pour que ça marche en mode prod : php app/console cache:clear --env=prod ET php app/console assetic:dump --env=prod -->
        ";
        // line 111
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "7a81978_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7a81978_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7a81978_init_1.js");
            // line 112
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
            // asset "7a81978_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7a81978_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7a81978_functions_2.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        } else {
            // asset "7a81978"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_7a81978") : $this->env->getExtension('assets')->getAssetUrl("_controller/js/7a81978.js");
            echo "            <script type=\"text/javascript\" src=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\"></script>
        ";
        }
        unset($context["asset_url"]);
        // line 114
        echo "    </body>
</html>
";
    }

    // line 4
    public function block_titlePage($context, array $blocks = array())
    {
    }

    // line 6
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 9
        echo "            <!-- pour que ça marche en mode prod : php app/console cache:clear --env=prod ET php app/console assetic:dump --env=prod -->
            ";
        // line 10
        if (isset($context['assetic']['debug']) && $context['assetic']['debug']) {
            // asset "78f0a92_0"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78f0a92_0") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/78f0a92_site_1.css");
            // line 11
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
            // asset "78f0a92_1"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78f0a92_1") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/78f0a92_menu_2.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        } else {
            // asset "78f0a92"
            $context["asset_url"] = isset($context['assetic']['use_controller']) && $context['assetic']['use_controller'] ? $this->env->getExtension('routing')->getPath("_assetic_78f0a92") : $this->env->getExtension('assets')->getAssetUrl("_controller/css/78f0a92.css");
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, (isset($context["asset_url"]) ? $context["asset_url"] : $this->getContext($context, "asset_url")), "html", null, true);
            echo "\" type=\"text/css\" />
            ";
        }
        unset($context["asset_url"]);
        // line 13
        echo "\t";
    }

    // line 15
    public function block_javascripts($context, array $blocks = array())
    {
        // line 16
        echo "\t    <script type=\"text/javascript\" src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js\"></script>
\t";
    }

    // line 29
    public function block_descriptionMenu($context, array $blocks = array())
    {
    }

    // line 65
    public function block_body($context, array $blocks = array())
    {
    }

    // line 76
    public function block_buttonTextDisplay($context, array $blocks = array())
    {
    }

    // line 77
    public function block_socialNetwork($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 77,  301 => 76,  296 => 65,  291 => 29,  286 => 16,  283 => 15,  279 => 13,  259 => 11,  255 => 10,  252 => 9,  249 => 8,  244 => 6,  239 => 4,  233 => 114,  213 => 112,  209 => 111,  198 => 103,  191 => 98,  187 => 96,  183 => 94,  175 => 92,  173 => 91,  170 => 90,  168 => 89,  155 => 78,  152 => 77,  150 => 76,  136 => 65,  131 => 63,  115 => 50,  111 => 49,  107 => 48,  99 => 43,  93 => 40,  87 => 37,  82 => 35,  78 => 34,  72 => 30,  70 => 29,  63 => 25,  59 => 24,  51 => 18,  49 => 15,  46 => 14,  44 => 8,  39 => 7,  37 => 6,  32 => 4,  27 => 1,);
    }
}
