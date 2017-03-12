<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_05f7272f363d3012f1afd32746808b68eeaa912297e3f8bb7a0c2dc13bdca7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_fd53c043403d47682be5e076211c0cb50eb56a9c9bf0f3a2ba57da021ac54173 = $this->env->getExtension("native_profiler");
        $__internal_fd53c043403d47682be5e076211c0cb50eb56a9c9bf0f3a2ba57da021ac54173->enter($__internal_fd53c043403d47682be5e076211c0cb50eb56a9c9bf0f3a2ba57da021ac54173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fd53c043403d47682be5e076211c0cb50eb56a9c9bf0f3a2ba57da021ac54173->leave($__internal_fd53c043403d47682be5e076211c0cb50eb56a9c9bf0f3a2ba57da021ac54173_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_cc7b54aa49dc89c81f1a8871a209c6eb57eb088d93787f5bfa6e02c1b3203ac0 = $this->env->getExtension("native_profiler");
        $__internal_cc7b54aa49dc89c81f1a8871a209c6eb57eb088d93787f5bfa6e02c1b3203ac0->enter($__internal_cc7b54aa49dc89c81f1a8871a209c6eb57eb088d93787f5bfa6e02c1b3203ac0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_cc7b54aa49dc89c81f1a8871a209c6eb57eb088d93787f5bfa6e02c1b3203ac0->leave($__internal_cc7b54aa49dc89c81f1a8871a209c6eb57eb088d93787f5bfa6e02c1b3203ac0_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2eedcee9e91f05f978058b25d0695cac1cb881177eaf693c74021d620ea0c3b7 = $this->env->getExtension("native_profiler");
        $__internal_2eedcee9e91f05f978058b25d0695cac1cb881177eaf693c74021d620ea0c3b7->enter($__internal_2eedcee9e91f05f978058b25d0695cac1cb881177eaf693c74021d620ea0c3b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2eedcee9e91f05f978058b25d0695cac1cb881177eaf693c74021d620ea0c3b7->leave($__internal_2eedcee9e91f05f978058b25d0695cac1cb881177eaf693c74021d620ea0c3b7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_19e767d7bf1fa0fc0f27f2ea3e14dfd85a0b907037f10763b00c0a56bf798040 = $this->env->getExtension("native_profiler");
        $__internal_19e767d7bf1fa0fc0f27f2ea3e14dfd85a0b907037f10763b00c0a56bf798040->enter($__internal_19e767d7bf1fa0fc0f27f2ea3e14dfd85a0b907037f10763b00c0a56bf798040_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_19e767d7bf1fa0fc0f27f2ea3e14dfd85a0b907037f10763b00c0a56bf798040->leave($__internal_19e767d7bf1fa0fc0f27f2ea3e14dfd85a0b907037f10763b00c0a56bf798040_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
