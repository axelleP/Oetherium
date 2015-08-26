<?php

/* ApaUserBundle:Security:login.html.twig */
class __TwigTemplate_8f2d29990e7b5bbe7ffb2b5af278a0081a85c76079b0f927b7d0aab984a06070 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
";
        // line 3
        $this->displayBlock('fos_user_content', $context, $blocks);
    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 4
        echo "<form action=\"";
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <table class=\"centerPage\">
        <tr>
            <td><label for=\"username\">Login</label></td>
            <td><input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" required=\"required\"></td>
        </tr>
        
        <tr>
            <td><label for=\"password\">Mot de passe</label></td>
            <td><input type=\"password\" id=\"password\" name=\"_password\" required=\"required\"></td>
        </tr>
        
        <tr>
            <td style=\"margin: 0;padding: 0;\"><label></label></td>
            <td style=\"margin: 0;padding: 0;\"><input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 18
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : null), "html", null, true);
        echo "\"></td>
        </tr>
        
        <tr>
            <td style=\"text-align:right;\"><input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" /></td>
            <td><label for=\"remember_me\">Se souvenir de moi</label></td>
        </tr>
        
        <tr style=\"text-align:center;\">
            <td colspan=2 class=\"noBorder\"><input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Envoyer\" /></td>
        </tr>
    </table>
</form>
";
    }

    public function getTemplateName()
    {
        return "ApaUserBundle:Security:login.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  50 => 18,  37 => 8,  29 => 4,  23 => 3,  20 => 2,);
    }
}
