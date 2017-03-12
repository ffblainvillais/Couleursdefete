<?php

/* article/article.html.twig */
class __TwigTemplate_fc02d21de36dcdac566de767c6c2f1e0a1a0b93dbda86d6777339b13c3477ca7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "article/article.html.twig", 1);
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
        $__internal_8f2c237d299976759affad56039e471e792ed1eb4dc7c279a52352b17176d70f = $this->env->getExtension("native_profiler");
        $__internal_8f2c237d299976759affad56039e471e792ed1eb4dc7c279a52352b17176d70f->enter($__internal_8f2c237d299976759affad56039e471e792ed1eb4dc7c279a52352b17176d70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "article/article.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f2c237d299976759affad56039e471e792ed1eb4dc7c279a52352b17176d70f->leave($__internal_8f2c237d299976759affad56039e471e792ed1eb4dc7c279a52352b17176d70f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0217d44f4d3768c8f386ce94bc1048863fc0c3a082c11a55204c6df6459d6776 = $this->env->getExtension("native_profiler");
        $__internal_0217d44f4d3768c8f386ce94bc1048863fc0c3a082c11a55204c6df6459d6776->enter($__internal_0217d44f4d3768c8f386ce94bc1048863fc0c3a082c11a55204c6df6459d6776_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h2> Articles </h2>
    
    <!-- AJOUT ARTICLE -->
    <div>
        <p class=\"row\"> 
            <span class=\"col-sm-3\">Ajouter un Article : </span>
             <!--path('ajout-article-pop') <a href=\"\" class=\"btn btn-primary ajax-modal\" data-submit-reload='true' > <span class=\"glyficon glyficon-plus\"></span> Ajouter un Article ! </a>-->
            <button type=\"button\" class=\"btn btn-primary col-sm-3\" data-toggle=\"modal\" data-target=\"#modalAjout\">
                <span class=\"glyphicon glyphicon-plus\"></span> ajouter Article
            </button>

        </p>
    </div>
    
    <!-- FLASH MESSAGE -->
    ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedback"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 23
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 29
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "    
    
    ";
        // line 34
        if (((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")) == null)) {
            // line 35
            echo "        <p>Il n'y à pas encore d'article</p>
    ";
        } else {
            // line 37
            echo "        <!-- TABLE ARTICLE -->
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    ";
            // line 41
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 42
                echo "                        <th> Utilisateur </th>
                    ";
            }
            // line 44
            echo "                    <th> Article </th>
                    <th> Description </th>
                    <th> Quantite </th>
                    <th> Prix / unité </th>
                    <th> Actions </th>
                </tr>
            </thead> 
            <tbody>
            ";
            // line 52
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
            foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
                // line 53
                echo "                <tr class=\"rows\">
                    ";
                // line 54
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 55
                    echo "                        <th> ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["article"], "getUtilisateur", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo " </th>
                    ";
                }
                // line 57
                echo "                    <td>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getLibelle", array(), "method"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getDescription", array(), "method"), "html", null, true);
                echo "</td>
                    <td> ";
                // line 59
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getQuantite", array(), "method"), "html", null, true);
                echo "</td>
                    <td> ";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getPrix", array(), "method"), "html", null, true);
                echo "<span class='glyphicon glyphicon-euro'></span></td>
                    <td class=\"row MODAL col-sm-4\"> 

                        <a href=\"#\" 
                           class=\"col-sm-6\"
                           id=\"modifModal\"
                           data-toggle=\"modal\" 
                           data-target=\"#modalTest\" 
                           data-url=\"";
                // line 68
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification-pop-article", array("idArticle" => $this->getAttribute($context["article"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                        >
                            <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                        </a>

                        <a class=\" col-sm-6 popconfirm\" 
                               href=\"";
                // line 74
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-article", array("idArticle" => $this->getAttribute($context["article"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                               data-confirm-title=\"Attention\" 
                               data-confirm-content=\"Etes vous sur de vouloir supprimer l'article '";
                // line 76
                echo twig_escape_filter($this->env, $this->getAttribute($context["article"], "getLibelle", array(), "method"), "html", null, true);
                echo "'\"
                               data-confirm-placement=\"bottom\"
                               data-confirm-yesBtn=\"<span class='glyphicon glyphicon-ok'></span> Oui\"
                               data-confirm-noBtn=\"<span class='glyphicon glyphicon-remove'></span> Non\"
                        >
                            <span class=\" glyphicon glyphicon-trash\"></span> Supprimer 
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 86
            echo "            </tbody>
        </table>
            ";
        }
        // line 89
        echo "            
            <div class=\"navigation\">
                ";
        // line 91
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["articles"]) ? $context["articles"] : $this->getContext($context, "articles")));
        echo "
            </div>
            
            
        <!-- AJOUT LOT ARTICLE -->
        <div>
            <p class=\"row\"> 
                <span class=\"col-sm-3\">Créer un Lot : </span>
                 <!--path('ajout-article-pop') <a href=\"\" class=\"btn btn-primary ajax-modal\" data-submit-reload='true' > <span class=\"glyficon glyficon-plus\"></span> Ajouter un Article ! </a>-->
                <button type=\"button\" class=\"btn btn-warning col-sm-3\" data-toggle=\"modal\" data-target=\"#modalAjoutLot\">
                    <span class=\"glyphicon glyphicon-plus\"></span> créer Lot
                </button>

            </p>
        </div>
        
        <!-- FLASH MESSAGE -->
        ";
        // line 108
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedbackLot"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
            <div class=\"alert alert-success alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 111
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 114
        echo "        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alertLot"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
            <div class=\"alert alert-danger alert-dismissible\">
                <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                ";
            // line 117
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 120
        echo "        
        ";
        // line 121
        if (((isset($context["lots"]) ? $context["lots"] : $this->getContext($context, "lots")) == null)) {
            // line 122
            echo "            <p>Il n'y à pas encore de lots d'articles</p>
        ";
        } else {
            // line 124
            echo "        <!-- TABLE ARTICLE -->
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    <th> Lot </th>
                    <th> Articles </th>
                    <th> Prix </th>
                    <th> Actions </th>
                </tr>
            </thead> 
            <tbody>
            ";
            // line 135
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["lots"]) ? $context["lots"] : $this->getContext($context, "lots")));
            foreach ($context['_seq'] as $context["_key"] => $context["lot"]) {
                // line 136
                echo "                <tr>
                    <td>";
                // line 137
                echo twig_escape_filter($this->env, $this->getAttribute($context["lot"], "getLibelle", array(), "method"), "html", null, true);
                echo " </td>
                    <td> 
                        <ul>
                            
                            ";
                // line 141
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["articlesLots"]) ? $context["articlesLots"] : $this->getContext($context, "articlesLots")));
                foreach ($context['_seq'] as $context["_key"] => $context["articleLot"]) {
                    // line 142
                    echo "                                ";
                    if (($this->getAttribute($context["articleLot"], "getLot", array(), "method") == $context["lot"])) {
                        // line 143
                        echo "                                    <li>
                                        <!-- Libelle article -->
                                        ";
                        // line 145
                        echo twig_escape_filter($this->env, $this->getAttribute($context["articleLot"], "getArticle", array()), "html", null, true);
                        echo " (";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["articleLot"], "getQuantite", array(), "method"), "html", null, true);
                        echo ")
       
                                        <a href=\"";
                        // line 147
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-article-lot", array("idArticle" => $this->getAttribute($this->getAttribute($context["articleLot"], "getArticle", array()), "getId", array(), "method"), "idLot" => $this->getAttribute($context["lot"], "getId", array(), "method"))), "html", null, true);
                        echo "\">
                                            <span class=\"glyphicon glyphicon-remove\"></span>
                                        </a>
                                    </li>
                                    
                                ";
                    }
                    // line 153
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['articleLot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 154
                echo "                            
                            <li class=\"POPOVER\">
                                <a 
                                    href=\"";
                // line 157
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout-article-lot-pop", array("idLot" => $this->getAttribute($context["lot"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                                    class=\"pop-ajax\"
                                    data-submit-close='true'
                                    data-submit-reload='true'
                                >
                                    <span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article 
                                </a>
                            </li>
                            
                        </ul>
                    </td>
                    <td> ";
                // line 168
                echo twig_escape_filter($this->env, $this->getAttribute($context["lot"], "getPrix", array(), "method"), "html", null, true);
                echo "<span class='glyphicon glyphicon-euro'></span></td>
                    <td class=\"row MODAL\"> 

                        <a href=\"#\" 
                           class=\"col-sm-6\"
                           id=\"modifModal\"
                           data-toggle=\"modal\" 
                           data-target=\"#modalTest\" 
                           data-url=\"";
                // line 176
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification-pop-lot", array("idLot" => $this->getAttribute($context["lot"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                        >
                            <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                        </a>

                        <a class=\" col-sm-6 popconfirm\" 
                               href=\"";
                // line 182
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-lot", array("idLot" => $this->getAttribute($context["lot"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                               data-confirm-title=\"Attention\" 
                               data-confirm-content=\"Etes vous sur de vouloir supprimer le lot '";
                // line 184
                echo twig_escape_filter($this->env, $this->getAttribute($context["lot"], "getLibelle", array(), "method"), "html", null, true);
                echo "'\"
                               data-confirm-placement=\"bottom\"
                               data-confirm-yesBtn=\"<span class='glyphicon glyphicon-ok'></span> Oui\"
                               data-confirm-noBtn=\"<span class='glyphicon glyphicon-remove'></span> Non\"
                        >
                            <span class=\" glyphicon glyphicon-trash\"></span> Supprimer 
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lot'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 194
            echo "            </tbody>
        </table>
        ";
        }
        // line 197
        echo "
        <!-- FENETRE MODAL MODIFICATION ARTICLE-->
        <div class=\"modal fade\" id=\"modalTest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Modification d'article</h3>
                    </div>
                    <div class=\"modal-body\" id=\"cible\">
                    </div>
                </div>
            </div>
        </div>
    
     
                
    <!-- FENETRE MODAL AJOUT ARTICLE -->
        <div class=\"modal fade\" id=\"modalAjout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Creation d'article</h3>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 223
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 224
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        ";
        // line 225
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <!-- FENETRE MODAL AJOUT ARTICLE LOT-->
        <div class=\"modal fade\" id=\"modalAjoutLot\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Creation de Lots</h3>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 240
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLot"]) ? $context["formLot"] : $this->getContext($context, "formLot")), 'form_start');
        echo "
                        ";
        // line 241
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formLot"]) ? $context["formLot"] : $this->getContext($context, "formLot")), 'widget');
        echo "
                        ";
        // line 242
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formLot"]) ? $context["formLot"] : $this->getContext($context, "formLot")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div> 
               


        
";
        
        $__internal_0217d44f4d3768c8f386ce94bc1048863fc0c3a082c11a55204c6df6459d6776->leave($__internal_0217d44f4d3768c8f386ce94bc1048863fc0c3a082c11a55204c6df6459d6776_prof);

    }

    public function getTemplateName()
    {
        return "article/article.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  454 => 242,  450 => 241,  446 => 240,  428 => 225,  424 => 224,  420 => 223,  392 => 197,  387 => 194,  371 => 184,  366 => 182,  357 => 176,  346 => 168,  332 => 157,  327 => 154,  321 => 153,  312 => 147,  305 => 145,  301 => 143,  298 => 142,  294 => 141,  287 => 137,  284 => 136,  280 => 135,  267 => 124,  263 => 122,  261 => 121,  258 => 120,  249 => 117,  240 => 114,  231 => 111,  223 => 108,  203 => 91,  199 => 89,  194 => 86,  178 => 76,  173 => 74,  164 => 68,  153 => 60,  149 => 59,  145 => 58,  140 => 57,  134 => 55,  132 => 54,  129 => 53,  125 => 52,  115 => 44,  111 => 42,  109 => 41,  103 => 37,  99 => 35,  97 => 34,  93 => 32,  84 => 29,  75 => 26,  66 => 23,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h2> Articles </h2>*/
/*     */
/*     <!-- AJOUT ARTICLE -->*/
/*     <div>*/
/*         <p class="row"> */
/*             <span class="col-sm-3">Ajouter un Article : </span>*/
/*              <!--path('ajout-article-pop') <a href="" class="btn btn-primary ajax-modal" data-submit-reload='true' > <span class="glyficon glyficon-plus"></span> Ajouter un Article ! </a>-->*/
/*             <button type="button" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#modalAjout">*/
/*                 <span class="glyphicon glyphicon-plus"></span> ajouter Article*/
/*             </button>*/
/* */
/*         </p>*/
/*     </div>*/
/*     */
/*     <!-- FLASH MESSAGE -->*/
/*     {% for flash_message in app.session.flashBag.get('feedback') %} */
/*         <div class="alert alert-success alert-dismissible">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     {% for flash_message in app.session.flashBag.get('alert') %} */
/*         <div class="alert alert-danger alert-dismissible">*/
/*             <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*             {{ flash_message }}*/
/*         </div>*/
/*     {% endfor %}*/
/*     */
/*     */
/*     {% if articles == null %}*/
/*         <p>Il n'y à pas encore d'article</p>*/
/*     {% else %}*/
/*         <!-- TABLE ARTICLE -->*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <th> Utilisateur </th>*/
/*                     {%endif%}*/
/*                     <th> Article </th>*/
/*                     <th> Description </th>*/
/*                     <th> Quantite </th>*/
/*                     <th> Prix / unité </th>*/
/*                     <th> Actions </th>*/
/*                 </tr>*/
/*             </thead> */
/*             <tbody>*/
/*             {% for article in articles %}*/
/*                 <tr class="rows">*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <th> {{article.getUtilisateur().getUsername()}} </th>*/
/*                     {%endif%}*/
/*                     <td>{{article.getLibelle()}} </td>*/
/*                     <td> {{article.getDescription()}}</td>*/
/*                     <td> {{article.getQuantite()}}</td>*/
/*                     <td> {{article.getPrix()}}<span class='glyphicon glyphicon-euro'></span></td>*/
/*                     <td class="row MODAL col-sm-4"> */
/* */
/*                         <a href="#" */
/*                            class="col-sm-6"*/
/*                            id="modifModal"*/
/*                            data-toggle="modal" */
/*                            data-target="#modalTest" */
/*                            data-url="{{path('modification-pop-article', {'idArticle': article.getId()})}}"*/
/*                         >*/
/*                             <span class="glyphicon glyphicon-pencil"></span> Modifier*/
/*                         </a>*/
/* */
/*                         <a class=" col-sm-6 popconfirm" */
/*                                href="{{path('suppression-article', {'idArticle': article.getId()})}}"*/
/*                                data-confirm-title="Attention" */
/*                                data-confirm-content="Etes vous sur de vouloir supprimer l'article '{{article.getLibelle()}}'"*/
/*                                data-confirm-placement="bottom"*/
/*                                data-confirm-yesBtn="<span class='glyphicon glyphicon-ok'></span> Oui"*/
/*                                data-confirm-noBtn="<span class='glyphicon glyphicon-remove'></span> Non"*/
/*                         >*/
/*                             <span class=" glyphicon glyphicon-trash"></span> Supprimer */
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*             {% endif %}*/
/*             */
/*             <div class="navigation">*/
/*                 {{ knp_pagination_render(articles) }}*/
/*             </div>*/
/*             */
/*             */
/*         <!-- AJOUT LOT ARTICLE -->*/
/*         <div>*/
/*             <p class="row"> */
/*                 <span class="col-sm-3">Créer un Lot : </span>*/
/*                  <!--path('ajout-article-pop') <a href="" class="btn btn-primary ajax-modal" data-submit-reload='true' > <span class="glyficon glyficon-plus"></span> Ajouter un Article ! </a>-->*/
/*                 <button type="button" class="btn btn-warning col-sm-3" data-toggle="modal" data-target="#modalAjoutLot">*/
/*                     <span class="glyphicon glyphicon-plus"></span> créer Lot*/
/*                 </button>*/
/* */
/*             </p>*/
/*         </div>*/
/*         */
/*         <!-- FLASH MESSAGE -->*/
/*         {% for flash_message in app.session.flashBag.get('feedbackLot') %} */
/*             <div class="alert alert-success alert-dismissible">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         {% for flash_message in app.session.flashBag.get('alertLot') %} */
/*             <div class="alert alert-danger alert-dismissible">*/
/*                 <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                 {{ flash_message }}*/
/*             </div>*/
/*         {% endfor %}*/
/*         */
/*         {% if lots == null %}*/
/*             <p>Il n'y à pas encore de lots d'articles</p>*/
/*         {% else %}*/
/*         <!-- TABLE ARTICLE -->*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     <th> Lot </th>*/
/*                     <th> Articles </th>*/
/*                     <th> Prix </th>*/
/*                     <th> Actions </th>*/
/*                 </tr>*/
/*             </thead> */
/*             <tbody>*/
/*             {% for lot in lots %}*/
/*                 <tr>*/
/*                     <td>{{lot.getLibelle()}} </td>*/
/*                     <td> */
/*                         <ul>*/
/*                             */
/*                             {% for articleLot in articlesLots %}*/
/*                                 {% if(articleLot.getLot() == lot) %}*/
/*                                     <li>*/
/*                                         <!-- Libelle article -->*/
/*                                         {{articleLot.getArticle}} ({{articleLot.getQuantite()}})*/
/*        */
/*                                         <a href="{{path('suppression-article-lot',{'idArticle': articleLot.getArticle.getId(),'idLot': lot.getId()})}}">*/
/*                                             <span class="glyphicon glyphicon-remove"></span>*/
/*                                         </a>*/
/*                                     </li>*/
/*                                     */
/*                                 {%endif%}*/
/*                             {% endfor %}*/
/*                             */
/*                             <li class="POPOVER">*/
/*                                 <a */
/*                                     href="{{ path('ajout-article-lot-pop', {'idLot': lot.getId()})}}"*/
/*                                     class="pop-ajax"*/
/*                                     data-submit-close='true'*/
/*                                     data-submit-reload='true'*/
/*                                 >*/
/*                                     <span class="glyphicon glyphicon-plus"></span> Ajouter un article */
/*                                 </a>*/
/*                             </li>*/
/*                             */
/*                         </ul>*/
/*                     </td>*/
/*                     <td> {{lot.getPrix()}}<span class='glyphicon glyphicon-euro'></span></td>*/
/*                     <td class="row MODAL"> */
/* */
/*                         <a href="#" */
/*                            class="col-sm-6"*/
/*                            id="modifModal"*/
/*                            data-toggle="modal" */
/*                            data-target="#modalTest" */
/*                            data-url="{{path('modification-pop-lot', {'idLot': lot.getId()})}}"*/
/*                         >*/
/*                             <span class="glyphicon glyphicon-pencil"></span> Modifier*/
/*                         </a>*/
/* */
/*                         <a class=" col-sm-6 popconfirm" */
/*                                href="{{path('suppression-lot', {'idLot': lot.getId()})}}"*/
/*                                data-confirm-title="Attention" */
/*                                data-confirm-content="Etes vous sur de vouloir supprimer le lot '{{lot.getLibelle()}}'"*/
/*                                data-confirm-placement="bottom"*/
/*                                data-confirm-yesBtn="<span class='glyphicon glyphicon-ok'></span> Oui"*/
/*                                data-confirm-noBtn="<span class='glyphicon glyphicon-remove'></span> Non"*/
/*                         >*/
/*                             <span class=" glyphicon glyphicon-trash"></span> Supprimer */
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/*         {% endif %}*/
/* */
/*         <!-- FENETRE MODAL MODIFICATION ARTICLE-->*/
/*         <div class="modal fade" id="modalTest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Modification d'article</h3>*/
/*                     </div>*/
/*                     <div class="modal-body" id="cible">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/*      */
/*                 */
/*     <!-- FENETRE MODAL AJOUT ARTICLE -->*/
/*         <div class="modal fade" id="modalAjout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Creation d'article</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ form_start(form) }}*/
/*                         {{ form_widget(form) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <!-- FENETRE MODAL AJOUT ARTICLE LOT-->*/
/*         <div class="modal fade" id="modalAjoutLot" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Creation de Lots</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ form_start(formLot) }}*/
/*                         {{ form_widget(formLot) }}*/
/*                         {{ form_end(formLot) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div> */
/*                */
/* */
/* */
/*         */
/* {% endblock %}*/
/* */
