<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_960e4479900076089042579ea1784f2786512d3bdafea8374f0143578dd3c07e extends Twig_Template
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
        $__internal_3b040a4bf09f6a51a4dee74c2b09d7cfdaea5515d15ae72c7e2d643557c9d80c = $this->env->getExtension("native_profiler");
        $__internal_3b040a4bf09f6a51a4dee74c2b09d7cfdaea5515d15ae72c7e2d643557c9d80c->enter($__internal_3b040a4bf09f6a51a4dee74c2b09d7cfdaea5515d15ae72c7e2d643557c9d80c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b040a4bf09f6a51a4dee74c2b09d7cfdaea5515d15ae72c7e2d643557c9d80c->leave($__internal_3b040a4bf09f6a51a4dee74c2b09d7cfdaea5515d15ae72c7e2d643557c9d80c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a2e9e4fa3f18b66ef92b2cac7bf1c0413be1f7ab62eae7b8fe4307288f22f353 = $this->env->getExtension("native_profiler");
        $__internal_a2e9e4fa3f18b66ef92b2cac7bf1c0413be1f7ab62eae7b8fe4307288f22f353->enter($__internal_a2e9e4fa3f18b66ef92b2cac7bf1c0413be1f7ab62eae7b8fe4307288f22f353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_a2e9e4fa3f18b66ef92b2cac7bf1c0413be1f7ab62eae7b8fe4307288f22f353->leave($__internal_a2e9e4fa3f18b66ef92b2cac7bf1c0413be1f7ab62eae7b8fe4307288f22f353_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_4d9fcb240d68477fa64da8e1ae6944eb925f9ada303e17a45952eb1ad2d32845 = $this->env->getExtension("native_profiler");
        $__internal_4d9fcb240d68477fa64da8e1ae6944eb925f9ada303e17a45952eb1ad2d32845->enter($__internal_4d9fcb240d68477fa64da8e1ae6944eb925f9ada303e17a45952eb1ad2d32845_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_4d9fcb240d68477fa64da8e1ae6944eb925f9ada303e17a45952eb1ad2d32845->leave($__internal_4d9fcb240d68477fa64da8e1ae6944eb925f9ada303e17a45952eb1ad2d32845_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_cb86132d4f8699211341cd4ba2583fef6ccbd3b9ac4543f0407c373cbe064ca7 = $this->env->getExtension("native_profiler");
        $__internal_cb86132d4f8699211341cd4ba2583fef6ccbd3b9ac4543f0407c373cbe064ca7->enter($__internal_cb86132d4f8699211341cd4ba2583fef6ccbd3b9ac4543f0407c373cbe064ca7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_cb86132d4f8699211341cd4ba2583fef6ccbd3b9ac4543f0407c373cbe064ca7->leave($__internal_cb86132d4f8699211341cd4ba2583fef6ccbd3b9ac4543f0407c373cbe064ca7_prof);

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
