<?php

/* vitrine/temoignage.html.twig */
class __TwigTemplate_bcfc33419ddcae93febc5c3eb6c850c34cfc7906b3ca022817494df942ceca5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/temoignage.html.twig", 1);
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
        $__internal_bce6215cc81031bdbc0b9a59e1f19a4078a93ee0353b4f42a0a437930e69a0f2 = $this->env->getExtension("native_profiler");
        $__internal_bce6215cc81031bdbc0b9a59e1f19a4078a93ee0353b4f42a0a437930e69a0f2->enter($__internal_bce6215cc81031bdbc0b9a59e1f19a4078a93ee0353b4f42a0a437930e69a0f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/temoignage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bce6215cc81031bdbc0b9a59e1f19a4078a93ee0353b4f42a0a437930e69a0f2->leave($__internal_bce6215cc81031bdbc0b9a59e1f19a4078a93ee0353b4f42a0a437930e69a0f2_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_169acbd9c6f1a74218b8b6d6a15f0c0c91f745bc390fb9730d497fc2ec1d37b4 = $this->env->getExtension("native_profiler");
        $__internal_169acbd9c6f1a74218b8b6d6a15f0c0c91f745bc390fb9730d497fc2ec1d37b4->enter($__internal_169acbd9c6f1a74218b8b6d6a15f0c0c91f745bc390fb9730d497fc2ec1d37b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_169acbd9c6f1a74218b8b6d6a15f0c0c91f745bc390fb9730d497fc2ec1d37b4->leave($__internal_169acbd9c6f1a74218b8b6d6a15f0c0c91f745bc390fb9730d497fc2ec1d37b4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cfce32d61ee27811559e6c31c6bea599e40b94d162de32240f99778e646a2408 = $this->env->getExtension("native_profiler");
        $__internal_cfce32d61ee27811559e6c31c6bea599e40b94d162de32240f99778e646a2408->enter($__internal_cfce32d61ee27811559e6c31c6bea599e40b94d162de32240f99778e646a2408_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Temoignage</h1>

    <div class=\"form-center\" style=\"width:55%; margin:auto;\">

        <h3>Ajouter un témoignage</h3><br/>

        <div>
            <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("ajout-temoignage");
        echo "\" method=\"post\" class=\"rows\">
                <label class=\"col-sm-5\">Votre nom :</label>             <input class=\"col-sm-7\" type=\"text\" name=\"nom\"/><br/><br/>
                <!--<label class=\"col-sm-5\">Votre temoignage :</label>      <input style=\"height:100px;\"class=\"col-sm-7\" type=\"text\" size=\"10\" name=\"description\"/><br/><br/>-->
                <label class=\"col-sm-5\">Votre temoignage :</label>      <textarea class=\"col-sm-7\" name=\"description\" style=\"height:150px;\"></textarea>

                <input class=\"btn btn-primary\" type=\"submit\" value=\"Envoyer\" />

            </form>
        </div>


    </div>

    <!-- FLASH MESSAGE -->
    ";
        // line 28
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedback"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 29
            echo "        <div class=\"alert alert-success alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 31
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 35
            echo "        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 37
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
    ";
        // line 41
        if (((isset($context["temoignages"]) ? $context["temoignages"] : $this->getContext($context, "temoignages")) == null)) {
            // line 42
            echo "        <p>Il n'y à pas encore de temoignages</p>
    ";
        } else {
            // line 44
            echo "
        ";
            // line 45
            $context["countHr"] = 0;
            // line 46
            echo "
            ";
            // line 47
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["temoignages"]) ? $context["temoignages"] : $this->getContext($context, "temoignages")));
            foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
                // line 48
                echo "
                ";
                // line 49
                if (((isset($context["countHr"]) ? $context["countHr"] : $this->getContext($context, "countHr")) > 0)) {
                    // line 50
                    echo "                    <hr/>
                ";
                }
                // line 52
                echo "
                <div class=\"jumbotron\">

                    <h3>";
                // line 55
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getNom", array()), "html", null, true);
                echo " le ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getDate", array()), "html", null, true);
                echo "</h3>

                    <p>\"";
                // line 57
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getDescription", array()), "html", null, true);
                echo "\"</p>

                </div>




            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "
    ";
        }
        // line 67
        echo "
";
        
        $__internal_cfce32d61ee27811559e6c31c6bea599e40b94d162de32240f99778e646a2408->leave($__internal_cfce32d61ee27811559e6c31c6bea599e40b94d162de32240f99778e646a2408_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/temoignage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 67,  171 => 65,  157 => 57,  150 => 55,  145 => 52,  141 => 50,  139 => 49,  136 => 48,  132 => 47,  129 => 46,  127 => 45,  124 => 44,  120 => 42,  118 => 41,  115 => 40,  106 => 37,  102 => 35,  97 => 34,  88 => 31,  84 => 29,  80 => 28,  63 => 14,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/* */
/* {% block body %}*/
/* */
/*     <h1>Temoignage</h1>*/
/* */
/*     <div class="form-center" style="width:55%; margin:auto;">*/
/* */
/*         <h3>Ajouter un témoignage</h3><br/>*/
/* */
/*         <div>*/
/*             <form action="{{ path('ajout-temoignage') }}" method="post" class="rows">*/
/*                 <label class="col-sm-5">Votre nom :</label>             <input class="col-sm-7" type="text" name="nom"/><br/><br/>*/
/*                 <!--<label class="col-sm-5">Votre temoignage :</label>      <input style="height:100px;"class="col-sm-7" type="text" size="10" name="description"/><br/><br/>-->*/
/*                 <label class="col-sm-5">Votre temoignage :</label>      <textarea class="col-sm-7" name="description" style="height:150px;"></textarea>*/
/* */
/*                 <input class="btn btn-primary" type="submit" value="Envoyer" />*/
/* */
/*             </form>*/
/*         </div>*/
/* */
/* */
/*     </div>*/
/* */
/*     <!-- FLASH MESSAGE -->*/
/*     {% for flash_message in app.session.flashBag.get('feedback') %}*/
/*         <div class="alert alert-success alert-dismissible">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('alert') %}*/
/*         <div class="alert alert-danger alert-dismissible">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/* */
/*     {% if temoignages == null %}*/
/*         <p>Il n'y à pas encore de temoignages</p>*/
/*     {% else %}*/
/* */
/*         {% set countHr = 0 %}*/
/* */
/*             {% for temoignage in temoignages %}*/
/* */
/*                 {% if (countHr > 0) %}*/
/*                     <hr/>*/
/*                 {% endif %}*/
/* */
/*                 <div class="jumbotron">*/
/* */
/*                     <h3>{{ temoignage.getNom }} le {{ temoignage.getDate }}</h3>*/
/* */
/*                     <p>"{{ temoignage.getDescription }}"</p>*/
/* */
/*                 </div>*/
/* */
/* */
/* */
/* */
/*             {% endfor %}*/
/* */
/*     {% endif %}*/
/* */
/* {% endblock %}*/
/* */
