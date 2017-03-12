<?php

/* vitrine/partenaire.html.twig */
class __TwigTemplate_ee87fcf93c7b7a1ed6b25fc15c94416fb9d2bcaf19515453bd0e8f04ee84dff4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/partenaire.html.twig", 1);
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
        $__internal_fa28ec90bb3a0b253b6ebaea2592074141e542e150a5ae310e3dbc5eacf07805 = $this->env->getExtension("native_profiler");
        $__internal_fa28ec90bb3a0b253b6ebaea2592074141e542e150a5ae310e3dbc5eacf07805->enter($__internal_fa28ec90bb3a0b253b6ebaea2592074141e542e150a5ae310e3dbc5eacf07805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/partenaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fa28ec90bb3a0b253b6ebaea2592074141e542e150a5ae310e3dbc5eacf07805->leave($__internal_fa28ec90bb3a0b253b6ebaea2592074141e542e150a5ae310e3dbc5eacf07805_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_361dd24d21280628b172c0d31b50b9fbe1efbe563483de6924775d2e50675305 = $this->env->getExtension("native_profiler");
        $__internal_361dd24d21280628b172c0d31b50b9fbe1efbe563483de6924775d2e50675305->enter($__internal_361dd24d21280628b172c0d31b50b9fbe1efbe563483de6924775d2e50675305_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_361dd24d21280628b172c0d31b50b9fbe1efbe563483de6924775d2e50675305->leave($__internal_361dd24d21280628b172c0d31b50b9fbe1efbe563483de6924775d2e50675305_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1ee75fb49e922e95852f6b5de67af840784aa6fe98e0025b0f9f17c0416333a = $this->env->getExtension("native_profiler");
        $__internal_b1ee75fb49e922e95852f6b5de67af840784aa6fe98e0025b0f9f17c0416333a->enter($__internal_b1ee75fb49e922e95852f6b5de67af840784aa6fe98e0025b0f9f17c0416333a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <h1>Partenaires</h1>
            
            ";
        // line 9
        if (((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")) == null)) {
            // line 10
            echo "                <p>Il n'y à pas encore de partenaire</p>
            ";
        } else {
            // line 12
            echo "
                <ul>    
                ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partenaires"]) ? $context["partenaires"] : $this->getContext($context, "partenaires")));
            foreach ($context['_seq'] as $context["_key"] => $context["partenaire"]) {
                // line 15
                echo "                    ";
                $context["estMail"] = 0;
                // line 16
                echo "
                    ";
                // line 17
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_split_filter($this->env, $this->getAttribute($context["partenaire"], "getSite", array(), "method"), ""));
                foreach ($context['_seq'] as $context["_key"] => $context["caractere"]) {
                    // line 18
                    echo "                        ";
                    if (($context["caractere"] == "@")) {
                        // line 19
                        echo "                            ";
                        $context["estMail"] = 1;
                        // line 20
                        echo "                        ";
                    }
                    // line 21
                    echo "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caractere'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "                    
                    <li> ";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getNom", array(), "method"), "html", null, true);
                echo " 
                        <ul>
                            <li>";
                // line 25
                echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getAdresse", array(), "method"), "html", null, true);
                echo "</li>
                            ";
                // line 26
                if ((($this->getAttribute($context["partenaire"], "getLogo", array(), "method") == "") && ($this->getAttribute($context["partenaire"], "getSite", array(), "method") != null))) {
                    // line 27
                    echo "                                ";
                    if (((isset($context["estMail"]) ? $context["estMail"] : $this->getContext($context, "estMail")) == 1)) {
                        // line 28
                        echo "                                    <li>Mail du partenaire : ";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getSite", array(), "method"), "html", null, true);
                        echo "</li>
                                ";
                    } else {
                        // line 30
                        echo "                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getSite", array(), "method"), "html", null, true);
                        echo "\">Site internet ICI</a></li>
                                ";
                    }
                    // line 32
                    echo "                            
                            ";
                } elseif (($this->getAttribute(                // line 33
$context["partenaire"], "getSite", array(), "method") == null)) {
                    // line 34
                    echo "                                <li>Pas de site disponible</li>
                                
                            ";
                } else {
                    // line 37
                    echo "                                ";
                    if (((isset($context["estMail"]) ? $context["estMail"] : $this->getContext($context, "estMail")) == 1)) {
                        // line 38
                        echo "                                    mail
                                    <li><a href=\"mailto:";
                        // line 39
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getSite", array(), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/logos/" . $this->getAttribute($context["partenaire"], "getLogo", array(), "method"))), "html", null, true);
                        echo "\" style=\"width:15%;\"/></a></li>
                                ";
                    } else {
                        // line 41
                        echo "                                    <li><a href=\"http://";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["partenaire"], "getSite", array(), "method"), "html", null, true);
                        echo "\"><img src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("uploads/logos/" . $this->getAttribute($context["partenaire"], "getLogo", array(), "method"))), "html", null, true);
                        echo "\" style=\"width:15%;\"/></a></li>
                                ";
                    }
                    // line 43
                    echo "                                
                                
                            ";
                }
                // line 46
                echo "                        </ul>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partenaire'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 49
            echo "                </ul>

            ";
        }
        // line 52
        echo "            
";
        
        $__internal_b1ee75fb49e922e95852f6b5de67af840784aa6fe98e0025b0f9f17c0416333a->leave($__internal_b1ee75fb49e922e95852f6b5de67af840784aa6fe98e0025b0f9f17c0416333a_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/partenaire.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 52,  170 => 49,  162 => 46,  157 => 43,  149 => 41,  142 => 39,  139 => 38,  136 => 37,  131 => 34,  129 => 33,  126 => 32,  120 => 30,  114 => 28,  111 => 27,  109 => 26,  105 => 25,  100 => 23,  97 => 22,  91 => 21,  88 => 20,  85 => 19,  82 => 18,  78 => 17,  75 => 16,  72 => 15,  68 => 14,  64 => 12,  60 => 10,  58 => 9,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/*             <h1>Partenaires</h1>*/
/*             */
/*             {% if partenaires == null %}*/
/*                 <p>Il n'y à pas encore de partenaire</p>*/
/*             {% else %}*/
/* */
/*                 <ul>    */
/*                 {% for partenaire in partenaires %}*/
/*                     {% set estMail = 0%}*/
/* */
/*                     {% for caractere in partenaire.getSite()|split('') %}*/
/*                         {% if caractere == "@" %}*/
/*                             {% set estMail = 1%}*/
/*                         {% endif%}*/
/*                     {% endfor %}*/
/*                     */
/*                     <li> {{partenaire.getNom()}} */
/*                         <ul>*/
/*                             <li>{{partenaire.getAdresse()}}</li>*/
/*                             {% if partenaire.getLogo() == '' and partenaire.getSite() != null%}*/
/*                                 {% if estMail == 1%}*/
/*                                     <li>Mail du partenaire : {{partenaire.getSite()}}</li>*/
/*                                 {% else %}*/
/*                                     <li><a href="{{partenaire.getSite()}}">Site internet ICI</a></li>*/
/*                                 {% endif %}*/
/*                             */
/*                             {% elseif partenaire.getSite() == null %}*/
/*                                 <li>Pas de site disponible</li>*/
/*                                 */
/*                             {% else %}*/
/*                                 {% if estMail == 1 %}*/
/*                                     mail*/
/*                                     <li><a href="mailto:{{partenaire.getSite()}}"><img src="{{asset('uploads/logos/' ~ partenaire.getLogo())}}" style="width:15%;"/></a></li>*/
/*                                 {% else %}*/
/*                                     <li><a href="http://{{partenaire.getSite()}}"><img src="{{asset('uploads/logos/' ~ partenaire.getLogo())}}" style="width:15%;"/></a></li>*/
/*                                 {% endif %}*/
/*                                 */
/*                                 */
/*                             {% endif %}*/
/*                         </ul>*/
/*                     </li>*/
/*                 {% endfor %}*/
/*                 </ul>*/
/* */
/*             {% endif %}*/
/*             */
/* {% endblock %}*/
/* */
