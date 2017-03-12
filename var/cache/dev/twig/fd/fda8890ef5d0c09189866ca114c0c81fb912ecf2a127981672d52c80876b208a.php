<?php

/* temoignages/temoignage.html.twig */
class __TwigTemplate_c1d10bbd20bc9eac1ebf8500d6ea95afcde6c8d7988ddb1865a2760cd10989cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "temoignages/temoignage.html.twig", 1);
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
        $__internal_e624fd73dbcc88cc3525a34498306d6dc0831c1b6762d06945ce049aca0efa76 = $this->env->getExtension("native_profiler");
        $__internal_e624fd73dbcc88cc3525a34498306d6dc0831c1b6762d06945ce049aca0efa76->enter($__internal_e624fd73dbcc88cc3525a34498306d6dc0831c1b6762d06945ce049aca0efa76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "temoignages/temoignage.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e624fd73dbcc88cc3525a34498306d6dc0831c1b6762d06945ce049aca0efa76->leave($__internal_e624fd73dbcc88cc3525a34498306d6dc0831c1b6762d06945ce049aca0efa76_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_65db8d9cfbb1b57fccb9247b5c942ae3dda9a2da48b02cc89a611c1a95906b2e = $this->env->getExtension("native_profiler");
        $__internal_65db8d9cfbb1b57fccb9247b5c942ae3dda9a2da48b02cc89a611c1a95906b2e->enter($__internal_65db8d9cfbb1b57fccb9247b5c942ae3dda9a2da48b02cc89a611c1a95906b2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
    <h2> Temoignages </h2>

    <!-- FLASH MESSAGE -->
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedback"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 9
            echo "        <div class=\"alert alert-success alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 11
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 14
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            // line 15
            echo "        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 17
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "

    ";
        // line 22
        if (((isset($context["temoignages"]) ? $context["temoignages"] : $this->getContext($context, "temoignages")) == null)) {
            // line 23
            echo "        <p>Il n'y à pas encore de temoignages</p>
    ";
        } else {
            // line 25
            echo "        <!-- TABLE ARTICLE -->
        <table class=\"table table-bordered\">
            <thead>
            <tr>
                <th> Temoignage </th>
                <th> Nom </th>
                <th> Description </th>
                <th> public </th>
                <th> Actions </th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 37
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["temoignages"]) ? $context["temoignages"] : $this->getContext($context, "temoignages")));
            foreach ($context['_seq'] as $context["_key"] => $context["temoignage"]) {
                // line 38
                echo "                <tr class=\"rows\">
                    <td>";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getId", array(), "method"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 40
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getNom", array(), "method"), "html", null, true);
                echo "</td>
                    <td> ";
                // line 41
                echo twig_escape_filter($this->env, $this->getAttribute($context["temoignage"], "getDescription", array(), "method"), "html", null, true);
                echo "</td>
                    <td>
                        ";
                // line 43
                if (($this->getAttribute($context["temoignage"], "getAllow", array(), "method") == 1)) {
                    // line 44
                    echo "                            Publié
                        ";
                } else {
                    // line 46
                    echo "                            Caché
                        ";
                }
                // line 48
                echo "                    </td>
                    <td class=\"row MODAL col-sm-4\">

                        <a href=\"";
                // line 51
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("publier-temoignage", array("idTemoignage" => $this->getAttribute($context["temoignage"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"col-sm-12\">
                            <span class=\"glyphicon glyphicon-ok\"></span> Publier
                        </a>
                        <a href=\"";
                // line 54
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("supprimer-temoignage", array("idTemoignage" => $this->getAttribute($context["temoignage"], "getId", array(), "method"))), "html", null, true);
                echo "\" class=\"col-sm-12\">
                            <span class=\"glyphicon glyphicon-remove\"></span> Supprimer
                        </a>

                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['temoignage'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 61
            echo "            </tbody>
        </table>
    ";
        }
        // line 64
        echo "

";
        
        $__internal_65db8d9cfbb1b57fccb9247b5c942ae3dda9a2da48b02cc89a611c1a95906b2e->leave($__internal_65db8d9cfbb1b57fccb9247b5c942ae3dda9a2da48b02cc89a611c1a95906b2e_prof);

    }

    public function getTemplateName()
    {
        return "temoignages/temoignage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 64,  159 => 61,  146 => 54,  140 => 51,  135 => 48,  131 => 46,  127 => 44,  125 => 43,  120 => 41,  116 => 40,  112 => 39,  109 => 38,  105 => 37,  91 => 25,  87 => 23,  85 => 22,  81 => 20,  72 => 17,  68 => 15,  63 => 14,  54 => 11,  50 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/* */
/*     <h2> Temoignages </h2>*/
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
/* */
/*     {% if temoignages == null %}*/
/*         <p>Il n'y à pas encore de temoignages</p>*/
/*     {% else %}*/
/*         <!-- TABLE ARTICLE -->*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*             <tr>*/
/*                 <th> Temoignage </th>*/
/*                 <th> Nom </th>*/
/*                 <th> Description </th>*/
/*                 <th> public </th>*/
/*                 <th> Actions </th>*/
/*             </tr>*/
/*             </thead>*/
/*             <tbody>*/
/*             {% for temoignage in temoignages %}*/
/*                 <tr class="rows">*/
/*                     <td>{{temoignage.getId()}} </td>*/
/*                     <td> {{temoignage.getNom()}}</td>*/
/*                     <td> {{temoignage.getDescription()}}</td>*/
/*                     <td>*/
/*                         {% if (temoignage.getAllow() == 1) %}*/
/*                             Publié*/
/*                         {% else %}*/
/*                             Caché*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     <td class="row MODAL col-sm-4">*/
/* */
/*                         <a href="{{path('publier-temoignage', {'idTemoignage': temoignage.getId()})}}" class="col-sm-12">*/
/*                             <span class="glyphicon glyphicon-ok"></span> Publier*/
/*                         </a>*/
/*                         <a href="{{path('supprimer-temoignage', {'idTemoignage': temoignage.getId()})}}" class="col-sm-12">*/
/*                             <span class="glyphicon glyphicon-remove"></span> Supprimer*/
/*                         </a>*/
/* */
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*     {% endif %}*/
/* */
/* */
/* {% endblock %}*/
/* */
