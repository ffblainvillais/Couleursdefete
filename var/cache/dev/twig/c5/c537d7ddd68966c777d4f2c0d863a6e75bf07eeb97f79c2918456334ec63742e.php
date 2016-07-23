<?php

/* security/login.html.twig */
class __TwigTemplate_194a5e44c09017b7bc0a931dfaf9156fd6dd09f969dfd5cb5cbb6b80f9920076 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "security/login.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fd95a3e9677a1e2e82c530f5a1fdd773e5e606ee5d8771c3abd0b43e02373ad = $this->env->getExtension("native_profiler");
        $__internal_4fd95a3e9677a1e2e82c530f5a1fdd773e5e606ee5d8771c3abd0b43e02373ad->enter($__internal_4fd95a3e9677a1e2e82c530f5a1fdd773e5e606ee5d8771c3abd0b43e02373ad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fd95a3e9677a1e2e82c530f5a1fdd773e5e606ee5d8771c3abd0b43e02373ad->leave($__internal_4fd95a3e9677a1e2e82c530f5a1fdd773e5e606ee5d8771c3abd0b43e02373ad_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b19b8898205cf2b393602593e9b9cf330b001dd0b8bf660dcf2c728547c5477f = $this->env->getExtension("native_profiler");
        $__internal_b19b8898205cf2b393602593e9b9cf330b001dd0b8bf660dcf2c728547c5477f->enter($__internal_b19b8898205cf2b393602593e9b9cf330b001dd0b8bf660dcf2c728547c5477f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"corp-connexion\">
        <h1> Connexion </h1>
        <hr/>
        ";
        // line 7
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 8
            echo "            <div class=\"alert alert-danger\">
                ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "
            </div>
        ";
        }
        // line 12
        echo "
        <form action=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\" class=\"connexion rows\">
                <label class=\"col-sm-12\" for=\"username\" >Login :</label>
                <input class=\"col-sm-12\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 15
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>

                <br/>

                <label class=\"col-sm-12\" for=\"password\">Mot de passe :</label>
                <input class=\"col-sm-12\" type=\"password\" id=\"password\" name=\"_password\" value=\"";
        // line 20
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\"/>

                <br/>
                <button class=\"btn btn-primary col-sm-12\"> Se connecter </button>

        </form>
    </div>

        
";
        
        $__internal_b19b8898205cf2b393602593e9b9cf330b001dd0b8bf660dcf2c728547c5477f->leave($__internal_b19b8898205cf2b393602593e9b9cf330b001dd0b8bf660dcf2c728547c5477f_prof);

    }

    public function getTemplateName()
    {
        return "security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 20,  64 => 15,  59 => 13,  56 => 12,  50 => 9,  47 => 8,  45 => 7,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="corp-connexion">*/
/*         <h1> Connexion </h1>*/
/*         <hr/>*/
/*         {% if error %}*/
/*             <div class="alert alert-danger">*/
/*                 {{error.message}}*/
/*             </div>*/
/*         {% endif %}*/
/* */
/*         <form action="{{ path('login_check') }}" method="post" class="connexion rows">*/
/*                 <label class="col-sm-12" for="username" >Login :</label>*/
/*                 <input class="col-sm-12" type="text" id="username" name="_username" value="{{ last_username }}"/>*/
/* */
/*                 <br/>*/
/* */
/*                 <label class="col-sm-12" for="password">Mot de passe :</label>*/
/*                 <input class="col-sm-12" type="password" id="password" name="_password" value="{{ last_username }}"/>*/
/* */
/*                 <br/>*/
/*                 <button class="btn btn-primary col-sm-12"> Se connecter </button>*/
/* */
/*         </form>*/
/*     </div>*/
/* */
/*         */
/* {% endblock %}*/
/* */
