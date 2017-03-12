<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_8ee1433cb42815fa6947b4a2247e899f2af4d4389e2b44eb310f4f9e336581fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0450273594ca45528738d6e42755e977a3eaaed3bbcba0f14d0a515115252478 = $this->env->getExtension("native_profiler");
        $__internal_0450273594ca45528738d6e42755e977a3eaaed3bbcba0f14d0a515115252478->enter($__internal_0450273594ca45528738d6e42755e977a3eaaed3bbcba0f14d0a515115252478_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0450273594ca45528738d6e42755e977a3eaaed3bbcba0f14d0a515115252478->leave($__internal_0450273594ca45528738d6e42755e977a3eaaed3bbcba0f14d0a515115252478_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aee42e33109332feb46cb1cf9a98b1f1bd0d7eb3aacae488475249d1e773370a = $this->env->getExtension("native_profiler");
        $__internal_aee42e33109332feb46cb1cf9a98b1f1bd0d7eb3aacae488475249d1e773370a->enter($__internal_aee42e33109332feb46cb1cf9a98b1f1bd0d7eb3aacae488475249d1e773370a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "    <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 9
        echo "
<form action=\"";
        // line 10
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />

    <label for=\"username\">Utilisateur<!--";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "--></label>
    <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 14
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" required=\"required\" />

    <label for=\"password\">Mot de passe<!--";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "--></label>
    <input type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />

    <br/>
    <br/>
    <input type=\"submit\" id=\"_submit\" name=\"_submit\" class=\"btn btn-primary\" value=\"Se connecter\" />
    <!--";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "-->
</form>
";
        
        $__internal_aee42e33109332feb46cb1cf9a98b1f1bd0d7eb3aacae488475249d1e773370a->leave($__internal_aee42e33109332feb46cb1cf9a98b1f1bd0d7eb3aacae488475249d1e773370a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 22,  69 => 16,  64 => 14,  60 => 13,  55 => 11,  51 => 10,  48 => 9,  42 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* {% if error %}*/
/*     <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/* */
/*     <label for="username">Utilisateur<!--{{ 'security.login.username'|trans }}--></label>*/
/*     <input type="text" id="username" name="_username" value="{{ last_username }}" required="required" />*/
/* */
/*     <label for="password">Mot de passe<!--{{ 'security.login.password'|trans }}--></label>*/
/*     <input type="password" id="password" name="_password" required="required" />*/
/* */
/*     <br/>*/
/*     <br/>*/
/*     <input type="submit" id="_submit" name="_submit" class="btn btn-primary" value="Se connecter" />*/
/*     <!--{{ 'security.login.submit'|trans }}-->*/
/* </form>*/
/* {% endblock fos_user_content %}*/
/* */
