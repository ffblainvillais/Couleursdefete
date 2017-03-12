<?php

/* vitrine/index.html.twig */
class __TwigTemplate_18f5a54253055f8a7b0c90ef5b48ac420995961fa6d9862c68840d14c40b1af3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "baseVitrine.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a2b86548e1113c9cb3678177f4ac09583bc73d0adb0305e288eadb3666483865 = $this->env->getExtension("native_profiler");
        $__internal_a2b86548e1113c9cb3678177f4ac09583bc73d0adb0305e288eadb3666483865->enter($__internal_a2b86548e1113c9cb3678177f4ac09583bc73d0adb0305e288eadb3666483865_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2b86548e1113c9cb3678177f4ac09583bc73d0adb0305e288eadb3666483865->leave($__internal_a2b86548e1113c9cb3678177f4ac09583bc73d0adb0305e288eadb3666483865_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_367e6c2a17facdf47c77961c353d187ce8c8320f94e111bdab04128f6c619c4e = $this->env->getExtension("native_profiler");
        $__internal_367e6c2a17facdf47c77961c353d187ce8c8320f94e111bdab04128f6c619c4e->enter($__internal_367e6c2a17facdf47c77961c353d187ce8c8320f94e111bdab04128f6c619c4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_367e6c2a17facdf47c77961c353d187ce8c8320f94e111bdab04128f6c619c4e->leave($__internal_367e6c2a17facdf47c77961c353d187ce8c8320f94e111bdab04128f6c619c4e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b838ed7c4f395e75e07a1926b66277f9d52bfc082436bc877760a754bf87c01c = $this->env->getExtension("native_profiler");
        $__internal_b838ed7c4f395e75e07a1926b66277f9d52bfc082436bc877760a754bf87c01c->enter($__internal_b838ed7c4f395e75e07a1926b66277f9d52bfc082436bc877760a754bf87c01c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <div class='center'>
                <h3>Couleurs de fête</h3>
                <h3>Décoratrice dans l'événementiel, pour une salle de cérémonie ou un évènement...</h3>
                <h3>Mon métier c'est d'aider à créer les conditions du bonheur, en créant un espace de vie qui soit en phase avec les Rêves de mes clients.</h3>
            </div>

            <div class =\"center jumbotron\">

                <h3>Couleurs de fête médaillé d'argent par <strong>Mariage.net</strong></h3><br/>

                <a href=\"https://www.mariages.net/\"><img src=\"images/badge.jpg\"/></a>

            </div>

            <div class='images'>
                <div class='image'>
                    <img src='";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Accueil.jpg"), "html", null, true);
        echo "' class='img-index'/>
                </div>
            </div>
        
";
        
        $__internal_b838ed7c4f395e75e07a1926b66277f9d52bfc082436bc877760a754bf87c01c->leave($__internal_b838ed7c4f395e75e07a1926b66277f9d52bfc082436bc877760a754bf87c01c_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 23,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/*             <div class='center'>*/
/*                 <h3>Couleurs de fête</h3>*/
/*                 <h3>Décoratrice dans l'événementiel, pour une salle de cérémonie ou un évènement...</h3>*/
/*                 <h3>Mon métier c'est d'aider à créer les conditions du bonheur, en créant un espace de vie qui soit en phase avec les Rêves de mes clients.</h3>*/
/*             </div>*/
/* */
/*             <div class ="center jumbotron">*/
/* */
/*                 <h3>Couleurs de fête médaillé d'argent par <strong>Mariage.net</strong></h3><br/>*/
/* */
/*                 <a href="https://www.mariages.net/"><img src="images/badge.jpg"/></a>*/
/* */
/*             </div>*/
/* */
/*             <div class='images'>*/
/*                 <div class='image'>*/
/*                     <img src='{{asset('images/Accueil.jpg')}}' class='img-index'/>*/
/*                 </div>*/
/*             </div>*/
/*         */
/* {% endblock %}*/
/* */
