<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_7aa531d70aeb64983011466bbbba251b066eae9c0a59570beec4befa6bd5d23b extends Twig_Template
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
        $__internal_2c7f8b2506ba87f30e4d1b4f414e4561a2b538879f2b58bd0ffd745986714a19 = $this->env->getExtension("native_profiler");
        $__internal_2c7f8b2506ba87f30e4d1b4f414e4561a2b538879f2b58bd0ffd745986714a19->enter($__internal_2c7f8b2506ba87f30e4d1b4f414e4561a2b538879f2b58bd0ffd745986714a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c7f8b2506ba87f30e4d1b4f414e4561a2b538879f2b58bd0ffd745986714a19->leave($__internal_2c7f8b2506ba87f30e4d1b4f414e4561a2b538879f2b58bd0ffd745986714a19_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0a7c66b1319b027c1c5a3e3d9259a92d9599e1f58d746ef66720e13e71ea510 = $this->env->getExtension("native_profiler");
        $__internal_b0a7c66b1319b027c1c5a3e3d9259a92d9599e1f58d746ef66720e13e71ea510->enter($__internal_b0a7c66b1319b027c1c5a3e3d9259a92d9599e1f58d746ef66720e13e71ea510_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b0a7c66b1319b027c1c5a3e3d9259a92d9599e1f58d746ef66720e13e71ea510->leave($__internal_b0a7c66b1319b027c1c5a3e3d9259a92d9599e1f58d746ef66720e13e71ea510_prof);

    }

    // line 16
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_223f2945e70265cb20f971d53222aaa1879d63ad53312201e600038f90a373a2 = $this->env->getExtension("native_profiler");
        $__internal_223f2945e70265cb20f971d53222aaa1879d63ad53312201e600038f90a373a2->enter($__internal_223f2945e70265cb20f971d53222aaa1879d63ad53312201e600038f90a373a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 17
        echo "        ";
        
        $__internal_223f2945e70265cb20f971d53222aaa1879d63ad53312201e600038f90a373a2->leave($__internal_223f2945e70265cb20f971d53222aaa1879d63ad53312201e600038f90a373a2_prof);

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
