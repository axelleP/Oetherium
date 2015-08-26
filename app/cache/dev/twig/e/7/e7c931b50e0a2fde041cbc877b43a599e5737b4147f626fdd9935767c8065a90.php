<?php

/* ApaStoryBundle:Character:seeCharacterProfile.html.twig */
class __TwigTemplate_e7c931b50e0a2fde041cbc877b43a599e5737b4147f626fdd9935767c8065a90 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::layout.html.twig", "ApaStoryBundle:Character:seeCharacterProfile.html.twig", 1);
        $this->blocks = array(
            'titlePage' => array($this, 'block_titlePage'),
            'metaDescriptionPage' => array($this, 'block_metaDescriptionPage'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'descriptionMenu' => array($this, 'block_descriptionMenu'),
            'body' => array($this, 'block_body'),
            'socialNetwork' => array($this, 'block_socialNetwork'),
            'javascripts' => array($this, 'block_javascripts'),
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
        echo "Profil de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
        echo " - Oetherium";
    }

    // line 4
    public function block_metaDescriptionPage($context, array $blocks = array())
    {
        // line 5
        echo "    <meta name=\"description\" content=\"Qui est ce personnage de l'Oetherium? Un bandit? un aristocrate? Venez tout de suite le découvrir!\">
";
    }

    // line 8
    public function block_stylesheets($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/apastory/css/lightbox.css"), "html", null, true);
        echo "\" type=\"text/css\" />
";
    }

    // line 12
    public function block_descriptionMenu($context, array $blocks = array())
    {
        echo "Fiche de ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
    }

    // line 14
    public function block_body($context, array $blocks = array())
    {
        // line 15
        echo "    <div id=\"contentMiddleFrameUntitled\" itemscope itemtype=\"http://schema.org/Person\">   
        <div id=\"characterAvatar\">
            ";
        // line 17
        if (($this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "avatar", array()) == "avatarByDefault.png")) {
            // line 18
            echo "                <img itemprop=\"image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(("uploads/apastory/images/" . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "avatar", array())), "normalAvatar")), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
            echo "\"/>
            ";
        } else {
            // line 20
            echo "                <img itemprop=\"image\" src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter(((((("uploads/apastory/images/" . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array())) . "-") . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array())) . "/") . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "avatar", array())), "normalAvatar")), "html", null, true);
            echo "\" alt=\"Avatar de ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
            echo "\"/>
            ";
        }
        // line 22
        echo "        </div>
        
        <div id=\"characterInformation\">
            <h1 class=\"bold uppercase h1Character\"><span itemprop=\"givenName\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "arrayFirstnames", array()), "html", null, true);
        echo " </span><span itemprop=\"familyName\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
        echo "</span></h1>
            <p class=\"capital\">Espèce : ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "species", array()), "html", null, true);
        echo "</p>
            <p class=\"capital\">Genre : <span itemprop=\"gender\">";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "gender", array()), "html", null, true);
        echo "</span></p>
            <p>Date et lieu de naissance : Le <span itemprop=\"birthDate\">";
        // line 28
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "dateBirth", array()), "d/m/Y"), "html", null, true);
        echo "</span> à <span class=\"capital\" itemprop=\"birthPlace\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "placeBirth", array()), "html", null, true);
        echo "</span> </p>
            <p class=\"capital\" itemscope itemtype=\"http://schema.org/CreativeWork\">Citation : <span class=\"italic\" itemprop=\"citation\">\"";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "citation", array()), "html", null, true);
        echo "\"</span></p>
        </div>
        
        <div class=\"clear\"></div>  

        <div id=\"characterDescription\">
            <p class=\"oneCapital\" itemprop=\"description\">";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "description", array()), "html", null, true);
        echo "</p>
        </div>
\t
        <!-- Gallery -->
            <div class=\"portfolio-area\">
                ";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : $this->getContext($context, "images")));
        foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
            // line 41
            echo "                    <span class=\"image-block\">
                        <a class=\"image-zoom\" data-lightbox=\"image\" itemprop=\"url\" href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((("uploads/apastory/images/" . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array())) . "-") . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array())) . "/") . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
            echo "\" >
                            <img itemprop=\"image\" height=\"130\" src=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(((((("uploads/apastory/images/" . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array())) . "-") . $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array())) . "/") . $this->getAttribute($context["image"], "path", array()))), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["image"], "description", array()), "html", null, true);
            echo "\"/>                    
                        </a>
                    </span>                        \t
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "            </div>
    </div>
";
    }

    // line 51
    public function block_socialNetwork($context, array $blocks = array())
    {
        // line 52
        echo "    <a class=\"buttonSocialNetworkFirst centerPage\" target=\"_blank\" title=\"Twitter\" href=\"http://twitter.com/share?url=";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;text=Profil%20de%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
        echo "%20-%20Oetherium\">
        <i class=\"fa fa-twitter fa-lg tw\">t</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Facebook\" href=\"http://www.facebook.com/sharer.php?u=";
        // line 56
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "uri", array()), "html", null, true);
        echo "&amp;t=Profil%20de%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
        echo "%20-%20Oetherium\">
        <i class=\"fa fa-facebook fa-lg fb\">f</i>
    </a>
    
    <a class=\"buttonSocialNetwork centerPage\" target=\"_blank\" title=\"Google Plus\" href=\"https://plusone.google.com/_/+1/confirm?hl=en&amp;url=Profil%20de%20";
        // line 60
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "firstname", array()), "html", null, true);
        echo "%20";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["characterProfile"]) ? $context["characterProfile"] : $this->getContext($context, "characterProfile")), "name", array()), "html", null, true);
        echo "%20-%20Oetherium\">
        <i class=\"fa fa-google-plus fa-lg google\">g</i>
    </a>
";
    }

    // line 65
    public function block_javascripts($context, array $blocks = array())
    {
        echo " ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/apastory/js/lightbox.min.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ApaStoryBundle:Character:seeCharacterProfile.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  217 => 66,  210 => 65,  200 => 60,  189 => 56,  177 => 52,  174 => 51,  168 => 47,  156 => 43,  152 => 42,  149 => 41,  145 => 40,  137 => 35,  128 => 29,  122 => 28,  118 => 27,  114 => 26,  108 => 25,  103 => 22,  93 => 20,  83 => 18,  81 => 17,  77 => 15,  74 => 14,  65 => 12,  59 => 9,  52 => 8,  47 => 5,  44 => 4,  34 => 2,  11 => 1,);
    }
}
