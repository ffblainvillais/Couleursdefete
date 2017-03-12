<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_467f00c3ae8bacf188da781808824ea8ac8352810499724ec6af1057336f4900 extends Twig_Template
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
        $__internal_1c3b26640958184ae4c626cd99928cb20d3fca52907778f7da64ddb4f43e1043 = $this->env->getExtension("native_profiler");
        $__internal_1c3b26640958184ae4c626cd99928cb20d3fca52907778f7da64ddb4f43e1043->enter($__internal_1c3b26640958184ae4c626cd99928cb20d3fca52907778f7da64ddb4f43e1043_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1c3b26640958184ae4c626cd99928cb20d3fca52907778f7da64ddb4f43e1043->leave($__internal_1c3b26640958184ae4c626cd99928cb20d3fca52907778f7da64ddb4f43e1043_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_d71617620fbb497c58760d004e5292095e68276d902f288ed8157b2aaac20645 = $this->env->getExtension("native_profiler");
        $__internal_d71617620fbb497c58760d004e5292095e68276d902f288ed8157b2aaac20645->enter($__internal_d71617620fbb497c58760d004e5292095e68276d902f288ed8157b2aaac20645_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_d71617620fbb497c58760d004e5292095e68276d902f288ed8157b2aaac20645->leave($__internal_d71617620fbb497c58760d004e5292095e68276d902f288ed8157b2aaac20645_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_2c62f8349f795acad1ba8eb1ebd073e4713250a1925ed3cc624ddc8a87f60930 = $this->env->getExtension("native_profiler");
        $__internal_2c62f8349f795acad1ba8eb1ebd073e4713250a1925ed3cc624ddc8a87f60930->enter($__internal_2c62f8349f795acad1ba8eb1ebd073e4713250a1925ed3cc624ddc8a87f60930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_2c62f8349f795acad1ba8eb1ebd073e4713250a1925ed3cc624ddc8a87f60930->leave($__internal_2c62f8349f795acad1ba8eb1ebd073e4713250a1925ed3cc624ddc8a87f60930_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2c2f9ce198cbdaff812eb68739884dc9ad02e402718dadd8e927ade7b3689ee9 = $this->env->getExtension("native_profiler");
        $__internal_2c2f9ce198cbdaff812eb68739884dc9ad02e402718dadd8e927ade7b3689ee9->enter($__internal_2c2f9ce198cbdaff812eb68739884dc9ad02e402718dadd8e927ade7b3689ee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2c2f9ce198cbdaff812eb68739884dc9ad02e402718dadd8e927ade7b3689ee9->leave($__internal_2c2f9ce198cbdaff812eb68739884dc9ad02e402718dadd8e927ade7b3689ee9_prof);

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
