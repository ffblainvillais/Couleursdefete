<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_fe09b903ae008101fd5bc44c03a789616f2149e24111f7ef7cf982afc23df2e8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        $this->parent = $this->loadTemplate("base.html.twig", "FOSUserBundle::layout.html.twig", 2);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5824957b05da1a4d5b8d97ae709cf7e406f6c409ed1f4be5871d7c5aa662d80e = $this->env->getExtension("native_profiler");
        $__internal_5824957b05da1a4d5b8d97ae709cf7e406f6c409ed1f4be5871d7c5aa662d80e->enter($__internal_5824957b05da1a4d5b8d97ae709cf7e406f6c409ed1f4be5871d7c5aa662d80e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5824957b05da1a4d5b8d97ae709cf7e406f6c409ed1f4be5871d7c5aa662d80e->leave($__internal_5824957b05da1a4d5b8d97ae709cf7e406f6c409ed1f4be5871d7c5aa662d80e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_84cf2a94c13772025b218cc41f0da562d0d8a37c3b25b0bcb9abbac09ae69237 = $this->env->getExtension("native_profiler");
        $__internal_84cf2a94c13772025b218cc41f0da562d0d8a37c3b25b0bcb9abbac09ae69237->enter($__internal_84cf2a94c13772025b218cc41f0da562d0d8a37c3b25b0bcb9abbac09ae69237_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    <div class=\"corp-connexion\">
        ";
        // line 9
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["message"]) {
            // line 10
            echo "          <div class=\"alert alert-danger\">
            ";
            // line 11
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
            echo "
          </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "
        ";
        // line 16
        echo "        ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 18
        echo "    </div>

";
        
        $__internal_84cf2a94c13772025b218cc41f0da562d0d8a37c3b25b0bcb9abbac09ae69237->leave($__internal_84cf2a94c13772025b218cc41f0da562d0d8a37c3b25b0bcb9abbac09ae69237_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3ccedf21a4a2cd6d4b54b9c8daa23cc3148691715de911e7a7da3f9583fefbb8 = $this->env->getExtension("native_profiler");
        $__internal_3ccedf21a4a2cd6d4b54b9c8daa23cc3148691715de911e7a7da3f9583fefbb8->enter($__internal_3ccedf21a4a2cd6d4b54b9c8daa23cc3148691715de911e7a7da3f9583fefbb8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "        ";
        
        $__internal_3ccedf21a4a2cd6d4b54b9c8daa23cc3148691715de911e7a7da3f9583fefbb8->leave($__internal_3ccedf21a4a2cd6d4b54b9c8daa23cc3148691715de911e7a7da3f9583fefbb8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 17,  76 => 16,  67 => 18,  64 => 16,  61 => 14,  52 => 11,  49 => 10,  44 => 9,  41 => 7,  35 => 6,  11 => 2,);
    }
}
/* {# src/OC/UserBundle/Resources/views/layout.html.twig #}*/
/* {% extends 'base.html.twig' %}*/
/* */
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/*     <div class="corp-connexion">*/
/*         {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*         {% for key, message in app.session.flashbag.all() %}*/
/*           <div class="alert alert-danger">*/
/*             {{ message|trans({}, 'FOSUserBundle') }}*/
/*           </div>*/
/*         {% endfor %}*/
/* */
/*         {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*         {% block fos_user_content %}*/
/*         {% endblock fos_user_content %}*/
/*     </div>*/
/* */
/* {% endblock %}*/
