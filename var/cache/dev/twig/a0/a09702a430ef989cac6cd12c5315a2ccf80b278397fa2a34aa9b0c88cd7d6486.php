<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_edd059a5aa3480520a9b53a348339fd7696291eb8b118c60605a9b3fbd737490 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_561736d5c3524f4e42e75c80ee6ed9247a5e0a930fb1e31bc9a269b55dded489 = $this->env->getExtension("native_profiler");
        $__internal_561736d5c3524f4e42e75c80ee6ed9247a5e0a930fb1e31bc9a269b55dded489->enter($__internal_561736d5c3524f4e42e75c80ee6ed9247a5e0a930fb1e31bc9a269b55dded489_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_561736d5c3524f4e42e75c80ee6ed9247a5e0a930fb1e31bc9a269b55dded489->leave($__internal_561736d5c3524f4e42e75c80ee6ed9247a5e0a930fb1e31bc9a269b55dded489_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_afbec1c8b1273cdc1223091ea008262562e295c59591c13b1b841a9f0638e0d1 = $this->env->getExtension("native_profiler");
        $__internal_afbec1c8b1273cdc1223091ea008262562e295c59591c13b1b841a9f0638e0d1->enter($__internal_afbec1c8b1273cdc1223091ea008262562e295c59591c13b1b841a9f0638e0d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_afbec1c8b1273cdc1223091ea008262562e295c59591c13b1b841a9f0638e0d1->leave($__internal_afbec1c8b1273cdc1223091ea008262562e295c59591c13b1b841a9f0638e0d1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_01254d565e20899ffda0d2981e384cbf25566f64782173fe13faf48835ae664b = $this->env->getExtension("native_profiler");
        $__internal_01254d565e20899ffda0d2981e384cbf25566f64782173fe13faf48835ae664b->enter($__internal_01254d565e20899ffda0d2981e384cbf25566f64782173fe13faf48835ae664b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_01254d565e20899ffda0d2981e384cbf25566f64782173fe13faf48835ae664b->leave($__internal_01254d565e20899ffda0d2981e384cbf25566f64782173fe13faf48835ae664b_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_5121d3ffe7d5765ac65254998dc75bc1799f8af1914dbea68c517cbf047a4bd3 = $this->env->getExtension("native_profiler");
        $__internal_5121d3ffe7d5765ac65254998dc75bc1799f8af1914dbea68c517cbf047a4bd3->enter($__internal_5121d3ffe7d5765ac65254998dc75bc1799f8af1914dbea68c517cbf047a4bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_5121d3ffe7d5765ac65254998dc75bc1799f8af1914dbea68c517cbf047a4bd3->leave($__internal_5121d3ffe7d5765ac65254998dc75bc1799f8af1914dbea68c517cbf047a4bd3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
