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
        $__internal_644908cb35cb90c3361e5d8d9d8fd5d978d50f01f740b64cf8eb25709c893eb9 = $this->env->getExtension("native_profiler");
        $__internal_644908cb35cb90c3361e5d8d9d8fd5d978d50f01f740b64cf8eb25709c893eb9->enter($__internal_644908cb35cb90c3361e5d8d9d8fd5d978d50f01f740b64cf8eb25709c893eb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_644908cb35cb90c3361e5d8d9d8fd5d978d50f01f740b64cf8eb25709c893eb9->leave($__internal_644908cb35cb90c3361e5d8d9d8fd5d978d50f01f740b64cf8eb25709c893eb9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_51c5ef11b317711d7f2d77945848134847fd5570b7608593bde2255089433163 = $this->env->getExtension("native_profiler");
        $__internal_51c5ef11b317711d7f2d77945848134847fd5570b7608593bde2255089433163->enter($__internal_51c5ef11b317711d7f2d77945848134847fd5570b7608593bde2255089433163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_51c5ef11b317711d7f2d77945848134847fd5570b7608593bde2255089433163->leave($__internal_51c5ef11b317711d7f2d77945848134847fd5570b7608593bde2255089433163_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_26fe688b4914868c135e78be42f465cfa596aae98e414c270a263ec6b12982bc = $this->env->getExtension("native_profiler");
        $__internal_26fe688b4914868c135e78be42f465cfa596aae98e414c270a263ec6b12982bc->enter($__internal_26fe688b4914868c135e78be42f465cfa596aae98e414c270a263ec6b12982bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_26fe688b4914868c135e78be42f465cfa596aae98e414c270a263ec6b12982bc->leave($__internal_26fe688b4914868c135e78be42f465cfa596aae98e414c270a263ec6b12982bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_ade582f9720e1368c5782c8383247929266feb002f3d3cefbec1dca502d9e577 = $this->env->getExtension("native_profiler");
        $__internal_ade582f9720e1368c5782c8383247929266feb002f3d3cefbec1dca502d9e577->enter($__internal_ade582f9720e1368c5782c8383247929266feb002f3d3cefbec1dca502d9e577_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_ade582f9720e1368c5782c8383247929266feb002f3d3cefbec1dca502d9e577->leave($__internal_ade582f9720e1368c5782c8383247929266feb002f3d3cefbec1dca502d9e577_prof);

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
