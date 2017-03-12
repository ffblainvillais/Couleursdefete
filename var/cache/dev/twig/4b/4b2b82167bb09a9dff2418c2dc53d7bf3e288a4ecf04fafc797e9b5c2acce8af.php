<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_149aa52ca0cd649aa3425e0193bdf83ae0784188ffe0413a055eb8778aee6f5b extends Twig_Template
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
        $__internal_17a88303d1051114c0809df199ec239c29aea07967883f10269bd29bb634709f = $this->env->getExtension("native_profiler");
        $__internal_17a88303d1051114c0809df199ec239c29aea07967883f10269bd29bb634709f->enter($__internal_17a88303d1051114c0809df199ec239c29aea07967883f10269bd29bb634709f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_17a88303d1051114c0809df199ec239c29aea07967883f10269bd29bb634709f->leave($__internal_17a88303d1051114c0809df199ec239c29aea07967883f10269bd29bb634709f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d41639097c733920a0b1969aa097f8e248a157ac1ba5e64b134d3f7ce2561bfa = $this->env->getExtension("native_profiler");
        $__internal_d41639097c733920a0b1969aa097f8e248a157ac1ba5e64b134d3f7ce2561bfa->enter($__internal_d41639097c733920a0b1969aa097f8e248a157ac1ba5e64b134d3f7ce2561bfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_d41639097c733920a0b1969aa097f8e248a157ac1ba5e64b134d3f7ce2561bfa->leave($__internal_d41639097c733920a0b1969aa097f8e248a157ac1ba5e64b134d3f7ce2561bfa_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_d9cd3c2bc64c4b3da2f11ee80836734579c454ec90d16d2b6904ffc1d1c52db7 = $this->env->getExtension("native_profiler");
        $__internal_d9cd3c2bc64c4b3da2f11ee80836734579c454ec90d16d2b6904ffc1d1c52db7->enter($__internal_d9cd3c2bc64c4b3da2f11ee80836734579c454ec90d16d2b6904ffc1d1c52db7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_d9cd3c2bc64c4b3da2f11ee80836734579c454ec90d16d2b6904ffc1d1c52db7->leave($__internal_d9cd3c2bc64c4b3da2f11ee80836734579c454ec90d16d2b6904ffc1d1c52db7_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_7b7f2fc925cfa8a6ba457cbb79d83ff12b224a557d6da520970a3ea84bde063c = $this->env->getExtension("native_profiler");
        $__internal_7b7f2fc925cfa8a6ba457cbb79d83ff12b224a557d6da520970a3ea84bde063c->enter($__internal_7b7f2fc925cfa8a6ba457cbb79d83ff12b224a557d6da520970a3ea84bde063c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_7b7f2fc925cfa8a6ba457cbb79d83ff12b224a557d6da520970a3ea84bde063c->leave($__internal_7b7f2fc925cfa8a6ba457cbb79d83ff12b224a557d6da520970a3ea84bde063c_prof);

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
