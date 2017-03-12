<?php

/* vitrine/index.html.twig */
class __TwigTemplate_b726f185baa16636b2d6365a6c6d493a65a459a5d4232d23bde0b3dbadb2f660 extends Twig_Template
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
        $__internal_0571e52c31dfa118ae68ab5bcee6e183f0dcc36da9fbc04050e549ea47b33867 = $this->env->getExtension("native_profiler");
        $__internal_0571e52c31dfa118ae68ab5bcee6e183f0dcc36da9fbc04050e549ea47b33867->enter($__internal_0571e52c31dfa118ae68ab5bcee6e183f0dcc36da9fbc04050e549ea47b33867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0571e52c31dfa118ae68ab5bcee6e183f0dcc36da9fbc04050e549ea47b33867->leave($__internal_0571e52c31dfa118ae68ab5bcee6e183f0dcc36da9fbc04050e549ea47b33867_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ecb43aba2258e3966e94fac1385269abc6d9ef2505a9e966b2ad656785f594e = $this->env->getExtension("native_profiler");
        $__internal_7ecb43aba2258e3966e94fac1385269abc6d9ef2505a9e966b2ad656785f594e->enter($__internal_7ecb43aba2258e3966e94fac1385269abc6d9ef2505a9e966b2ad656785f594e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_7ecb43aba2258e3966e94fac1385269abc6d9ef2505a9e966b2ad656785f594e->leave($__internal_7ecb43aba2258e3966e94fac1385269abc6d9ef2505a9e966b2ad656785f594e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b452232195305e259bf3a112fd8698a684c9ba0ae70f4e7278bd5010c9b52db = $this->env->getExtension("native_profiler");
        $__internal_4b452232195305e259bf3a112fd8698a684c9ba0ae70f4e7278bd5010c9b52db->enter($__internal_4b452232195305e259bf3a112fd8698a684c9ba0ae70f4e7278bd5010c9b52db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <div class='center'>
                <h3>Couleurs de fête</h3>
                <h3>Décoratrice dans l'événementiel, pour une salle de cérémonie ou un évènement...</h3>
                <h3>Mon métier c'est d'aider à créer les conditions du bonheur, en créant un espace de vie qui soit en phase avec les Rêves de mes clients.</h3>
            </div>
            <div class='images'>
                <div class='image'>
                    <img src='";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Accueil.jpg"), "html", null, true);
        echo "' class='img-index'/>
                </div>
            </div>
        
";
        
        $__internal_4b452232195305e259bf3a112fd8698a684c9ba0ae70f4e7278bd5010c9b52db->leave($__internal_4b452232195305e259bf3a112fd8698a684c9ba0ae70f4e7278bd5010c9b52db_prof);

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
        return array (  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
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
/*             <div class='images'>*/
/*                 <div class='image'>*/
/*                     <img src='{{asset('images/Accueil.jpg')}}' class='img-index'/>*/
/*                 </div>*/
/*             </div>*/
/*         */
/* {% endblock %}*/
/* */
