<?php

/* genus/show.html.twig */
class __TwigTemplate_89a01c828c5d5ca0b69be39b8310ea0f062262113e83f40bce3c5d47a5ffd9a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "genus/show.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4fc67f97f7671a64665feaf04b6c2eb7b7446dbde8d61b27ecb475c3d74e614a = $this->env->getExtension("native_profiler");
        $__internal_4fc67f97f7671a64665feaf04b6c2eb7b7446dbde8d61b27ecb475c3d74e614a->enter($__internal_4fc67f97f7671a64665feaf04b6c2eb7b7446dbde8d61b27ecb475c3d74e614a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "genus/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fc67f97f7671a64665feaf04b6c2eb7b7446dbde8d61b27ecb475c3d74e614a->leave($__internal_4fc67f97f7671a64665feaf04b6c2eb7b7446dbde8d61b27ecb475c3d74e614a_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_4143edc5e338476df1b5f23b3a83408f83f352b988126596c2fc28481424c091 = $this->env->getExtension("native_profiler");
        $__internal_4143edc5e338476df1b5f23b3a83408f83f352b988126596c2fc28481424c091->enter($__internal_4143edc5e338476df1b5f23b3a83408f83f352b988126596c2fc28481424c091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " Mon titre ! ";
        
        $__internal_4143edc5e338476df1b5f23b3a83408f83f352b988126596c2fc28481424c091->leave($__internal_4143edc5e338476df1b5f23b3a83408f83f352b988126596c2fc28481424c091_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_95b5e458ead670d9c429bc944da061cf1695e7b075337fe355bdd306651e484d = $this->env->getExtension("native_profiler");
        $__internal_95b5e458ead670d9c429bc944da061cf1695e7b075337fe355bdd306651e484d->enter($__internal_95b5e458ead670d9c429bc944da061cf1695e7b075337fe355bdd306651e484d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
    <h1>The genus : ";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "</h1>
    <ul>    
    ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tableau"]) ? $context["tableau"] : $this->getContext($context, "tableau")));
        foreach ($context['_seq'] as $context["_key"] => $context["ligne"]) {
            // line 10
            echo "        <li> ";
            echo twig_escape_filter($this->env, $context["ligne"], "html", null, true);
            echo " </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ligne'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 12
        echo "    </ul>
    <div class='alert alert-info alert-dismissible'>
        Salut c'est ma 1ère page avec symfony et mon layout Unicaen ! 
    </div>
    <span class=\"glyphicon glyphicon-trash\"> </span>
    <span class=\"glyphicon glyphicon-pencil\"> </span>

";
        
        $__internal_95b5e458ead670d9c429bc944da061cf1695e7b075337fe355bdd306651e484d->leave($__internal_95b5e458ead670d9c429bc944da061cf1695e7b075337fe355bdd306651e484d_prof);

    }

    public function getTemplateName()
    {
        return "genus/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  74 => 12,  65 => 10,  61 => 9,  56 => 7,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %} Mon titre ! {% endblock %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h1>The genus : {{ name }}</h1>*/
/*     <ul>    */
/*     {% for ligne in tableau %}*/
/*         <li> {{ ligne }} </li>*/
/*     {% endfor %}*/
/*     </ul>*/
/*     <div class='alert alert-info alert-dismissible'>*/
/*         Salut c'est ma 1ère page avec symfony et mon layout Unicaen ! */
/*     </div>*/
/*     <span class="glyphicon glyphicon-trash"> </span>*/
/*     <span class="glyphicon glyphicon-pencil"> </span>*/
/* */
/* {% endblock %}*/
/* */
