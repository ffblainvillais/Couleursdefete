<?php

/* vitrine/partenaire.html.twig */
class __TwigTemplate_397f47101c3550114a1069bc46c97f464c8f9d10997385c265f5843b177b1e1a extends Twig_Template
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
        $__internal_c8a8c335ba79b2b4fe9bb71de17927c2d48dbbc5f966a7598ccf44a4baec303b = $this->env->getExtension("native_profiler");
        $__internal_c8a8c335ba79b2b4fe9bb71de17927c2d48dbbc5f966a7598ccf44a4baec303b->enter($__internal_c8a8c335ba79b2b4fe9bb71de17927c2d48dbbc5f966a7598ccf44a4baec303b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/partenaire.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8a8c335ba79b2b4fe9bb71de17927c2d48dbbc5f966a7598ccf44a4baec303b->leave($__internal_c8a8c335ba79b2b4fe9bb71de17927c2d48dbbc5f966a7598ccf44a4baec303b_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6eea1a45be7f0e25f90d4685424b3b2a4b168d4238a2af9301dc253f5fe03a77 = $this->env->getExtension("native_profiler");
        $__internal_6eea1a45be7f0e25f90d4685424b3b2a4b168d4238a2af9301dc253f5fe03a77->enter($__internal_6eea1a45be7f0e25f90d4685424b3b2a4b168d4238a2af9301dc253f5fe03a77_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_6eea1a45be7f0e25f90d4685424b3b2a4b168d4238a2af9301dc253f5fe03a77->leave($__internal_6eea1a45be7f0e25f90d4685424b3b2a4b168d4238a2af9301dc253f5fe03a77_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b27cd55800fd5c91972c1db40bbd6709e4b1a3f38d31378213dc5c5b554e338 = $this->env->getExtension("native_profiler");
        $__internal_6b27cd55800fd5c91972c1db40bbd6709e4b1a3f38d31378213dc5c5b554e338->enter($__internal_6b27cd55800fd5c91972c1db40bbd6709e4b1a3f38d31378213dc5c5b554e338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6b27cd55800fd5c91972c1db40bbd6709e4b1a3f38d31378213dc5c5b554e338->leave($__internal_6b27cd55800fd5c91972c1db40bbd6709e4b1a3f38d31378213dc5c5b554e338_prof);

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
