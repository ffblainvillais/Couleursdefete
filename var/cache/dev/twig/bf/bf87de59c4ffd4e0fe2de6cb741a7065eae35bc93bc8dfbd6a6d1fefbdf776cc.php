<?php

/* index/index.html.twig */
class __TwigTemplate_1fe2e250ca9d261368fbdd4b442bf9a1cd597330613468ab7ce53211b226562a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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
        $__internal_2b54f25ccdb8039deb6a884e94c899d9254eea18cc12d15099a3393850078c4a = $this->env->getExtension("native_profiler");
        $__internal_2b54f25ccdb8039deb6a884e94c899d9254eea18cc12d15099a3393850078c4a->enter($__internal_2b54f25ccdb8039deb6a884e94c899d9254eea18cc12d15099a3393850078c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b54f25ccdb8039deb6a884e94c899d9254eea18cc12d15099a3393850078c4a->leave($__internal_2b54f25ccdb8039deb6a884e94c899d9254eea18cc12d15099a3393850078c4a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f23313eea362506b7eb1c9492719a7619c21365f4af752a6f3ab752b92d75247 = $this->env->getExtension("native_profiler");
        $__internal_f23313eea362506b7eb1c9492719a7619c21365f4af752a6f3ab752b92d75247->enter($__internal_f23313eea362506b7eb1c9492719a7619c21365f4af752a6f3ab752b92d75247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h1> Bonjour le peuple ! </h1>
        <p>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["message"]) ? $context["message"] : $this->getContext($context, "message")), "html", null, true);
        echo "</p>
        
        Gestion des <strong>Collections</strong> : <a href=\"";
        // line 8
        echo $this->env->getExtension('routing')->getPath("genus", array("genusName" => "moi"));
        echo "\"> <button class=\"btn btn-primary\"> Click ! </button></a>

        
";
        
        $__internal_f23313eea362506b7eb1c9492719a7619c21365f4af752a6f3ab752b92d75247->leave($__internal_f23313eea362506b7eb1c9492719a7619c21365f4af752a6f3ab752b92d75247_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 8,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h1> Bonjour le peuple ! </h1>*/
/*         <p>{{ message }}</p>*/
/*         */
/*         Gestion des <strong>Collections</strong> : <a href="{{ path('genus', {'genusName' : 'moi'})}}"> <button class="btn btn-primary"> Click ! </button></a>*/
/* */
/*         */
/* {% endblock %}*/
/* */
