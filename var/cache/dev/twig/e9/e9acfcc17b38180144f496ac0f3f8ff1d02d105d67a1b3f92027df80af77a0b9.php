<?php

/* client/client.html.twig */
class __TwigTemplate_5611cf5fa368ff1f40ca4df2dac10323f795636d66c768e7f4252344aaf041b8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "client/client.html.twig", 1);
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
        $__internal_532305ee82d11a2902b95ea346a0a94f5ca67464226ea4412e304f7b02d534b1 = $this->env->getExtension("native_profiler");
        $__internal_532305ee82d11a2902b95ea346a0a94f5ca67464226ea4412e304f7b02d534b1->enter($__internal_532305ee82d11a2902b95ea346a0a94f5ca67464226ea4412e304f7b02d534b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "client/client.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_532305ee82d11a2902b95ea346a0a94f5ca67464226ea4412e304f7b02d534b1->leave($__internal_532305ee82d11a2902b95ea346a0a94f5ca67464226ea4412e304f7b02d534b1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7c5b5b552256bf4bb1e544b887bdf9c49a05bd0dac415d38779425e9fcd558a7 = $this->env->getExtension("native_profiler");
        $__internal_7c5b5b552256bf4bb1e544b887bdf9c49a05bd0dac415d38779425e9fcd558a7->enter($__internal_7c5b5b552256bf4bb1e544b887bdf9c49a05bd0dac415d38779425e9fcd558a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h2> Clients</h2>
    
    <!-- AJOUT ARTICLE -->
    <div>
        <p class=\"row\"> 
            <span class=\"col-sm-3\"> Ajouter un Client : </span>
            <button type=\"button\" class=\"btn btn-primary col-sm-3\" data-toggle=\"modal\" data-target=\"#modalAjout\">
                <span class=\"glyphicon glyphicon-plus\"></span> ajouter Client
            </button>
        </p>
        <p class=\"row\">
            <span class=\"col-sm-3\">Créer une Newsletter : </span>
            <button type=\"button\" class=\"btn btn-success col-sm-3\" data-toggle=\"modal\" data-target=\"#modalContact\">
                <span class=\"glyphicon glyphicon-plus\"></span> nouvelle Newsletter
            </button>
        </p>
    </div>
    
    <!-- FLASH MESSAGE -->
    ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedback"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 27
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 33
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "    
    
    ";
        // line 38
        if (((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")) == null)) {
            // line 39
            echo "        <p>Il n'y à pas encore de client</p>
    ";
        } else {
            // line 41
            echo "        <!-- TABLE ARTICLE -->
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    ";
            // line 45
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 46
                echo "                        <th> Utilisateur </th>
                    ";
            }
            // line 48
            echo "                    <th> Nom </th>
                    <th> Prenom </th>
                    <th> Adresse </th>
                    <th> Mail </th>
                    <th> Commandes </th>
                    <th> Actions </th>
                </tr>
            </thead> 
            <tbody>
            ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["clients"]) ? $context["clients"] : $this->getContext($context, "clients")));
            foreach ($context['_seq'] as $context["_key"] => $context["client"]) {
                // line 58
                echo "                <tr>
                    ";
                // line 59
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 60
                    echo "                        <td> <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["client"], "getUtilisateur", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo "</strong> </td>
                    ";
                }
                // line 62
                echo "                    <td> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getNom", array(), "method"), "html", null, true);
                echo " </td>
                    <td> ";
                // line 63
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getPrenom", array(), "method"), "html", null, true);
                echo "</td>
                    <td> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getAdresse", array(), "method"), "html", null, true);
                echo "</td>
                    <td> ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getMail", array(), "method"), "html", null, true);
                echo "</td>
                    <td> 
                        <ul>
                        ";
                // line 68
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
                foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                    // line 69
                    echo "                            ";
                    if (($this->getAttribute($context["commande"], "getClient", array(), "method") == $context["client"])) {
                        // line 70
                        echo "                                <li>
                                    <strong>";
                        // line 71
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getLibelle", array(), "method"), "html", null, true);
                        echo "</strong> 
                                    le ";
                        // line 72
                        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "getDate", array(), "method"), "d/m/Y"), "html", null, true);
                        echo "
                                    
                                    <br/>
                                    
                                    ";
                        // line 76
                        if (($this->getAttribute($context["commande"], "getPaye", array(), "method") == false)) {
                            // line 77
                            echo "                                        <span class=\"label label-danger\">
                                            <span class=\"glyphicon glyphicon-exclamation-sign\"></span>
                                            Commande <strong>non-payée</strong>
                                        </span><br/>
                                        <a href=\"";
                            // line 81
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("relance-client", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"), "idClient" => $this->getAttribute($context["client"], "getId", array(), "method"))), "html", null, true);
                            echo "\"><span class=\"glyphicon glyphicon-shopping-cart\"></span> Relance paiement</a>
                                        
                                    ";
                        }
                        // line 84
                        echo "                                
                                </li>
                            ";
                    }
                    // line 87
                    echo "                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 88
                echo "                        </ul>
                    </td>
                    <td class=\"row MODAL\"> 
                        <a href=\"#\" 
                           class=\"col-sm-12\"
                           id=\"modifModal\"
                           data-toggle=\"modal\" 
                           data-target=\"#modalTest\" 
                           data-url=\"";
                // line 96
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("modification-pop-client", array("idClient" => $this->getAttribute($context["client"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                        >
                            <span class=\"glyphicon glyphicon-pencil\"></span> Modifier
                        </a>

                        <a class=\" col-sm-12 popconfirm\" 
                               href=\"";
                // line 102
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-client", array("idClient" => $this->getAttribute($context["client"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                               data-confirm-title=\"Attention\" 
                               data-confirm-content=\"Etes vous sur de vouloir supprimer le client '";
                // line 104
                echo twig_escape_filter($this->env, $this->getAttribute($context["client"], "getNom", array(), "method"), "html", null, true);
                echo "'\"
                               data-confirm-placement=\"bottom\"
                               data-confirm-yesBtn=\"<span class='glyphicon glyphicon-ok'></span> Oui\"
                               data-confirm-noBtn=\"<span class='glyphicon glyphicon-remove'></span> Non\"
                        >
                            <span class=\" glyphicon glyphicon-trash\"></span> Supprimer 
                        </a>
                        <a 
                           class=\" col-sm-12\" 
                           id=\"contactModal\"
                           data-toggle=\"modal\" 
                           data-target=\"#modalTest\"
                           data-url=\"";
                // line 116
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mail-client-pop", array("idClient" => $this->getAttribute($context["client"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                        >
                            <span class=\" glyphicon glyphicon-envelope\"></span> Contacter 
                        </a>
                    </td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['client'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 123
            echo "            </tbody>
        </table>


        <!-- FENETRE MODAL MODIFICATION -->
        <div class=\"modal fade\" id=\"modalTest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Modification des informations d'un client</h3>
                    </div>
                    <div class=\"modal-body\" id=\"cible\">
                    </div>
                </div>
            </div>
        </div>
    ";
        }
        // line 141
        echo "     
                
    <!-- FENETRE MODAL AJOUT CLIENT-->
        <div class=\"modal fade\" id=\"modalAjout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Ajout d'un client</h3>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 152
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 153
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        ";
        // line 154
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div>
                    
    <!-- FENETRE MODAL CONTACT CLIENT-->
        <div class=\"modal fade\" id=\"modalContact\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Contact d'un client</h3>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 169
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_start');
        echo "
                        ";
        // line 170
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'widget');
        echo "
                        ";
        // line 171
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["formContact"]) ? $context["formContact"] : $this->getContext($context, "formContact")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div> 
               


        
";
        
        $__internal_7c5b5b552256bf4bb1e544b887bdf9c49a05bd0dac415d38779425e9fcd558a7->leave($__internal_7c5b5b552256bf4bb1e544b887bdf9c49a05bd0dac415d38779425e9fcd558a7_prof);

    }

    public function getTemplateName()
    {
        return "client/client.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  329 => 171,  325 => 170,  321 => 169,  303 => 154,  299 => 153,  295 => 152,  282 => 141,  262 => 123,  249 => 116,  234 => 104,  229 => 102,  220 => 96,  210 => 88,  204 => 87,  199 => 84,  193 => 81,  187 => 77,  185 => 76,  178 => 72,  174 => 71,  171 => 70,  168 => 69,  164 => 68,  158 => 65,  154 => 64,  150 => 63,  145 => 62,  139 => 60,  137 => 59,  134 => 58,  130 => 57,  119 => 48,  115 => 46,  113 => 45,  107 => 41,  103 => 39,  101 => 38,  97 => 36,  88 => 33,  79 => 30,  70 => 27,  62 => 24,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h2> Clients</h2>*/
/*     */
/*     <!-- AJOUT ARTICLE -->*/
/*     <div>*/
/*         <p class="row"> */
/*             <span class="col-sm-3"> Ajouter un Client : </span>*/
/*             <button type="button" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#modalAjout">*/
/*                 <span class="glyphicon glyphicon-plus"></span> ajouter Client*/
/*             </button>*/
/*         </p>*/
/*         <p class="row">*/
/*             <span class="col-sm-3">Créer une Newsletter : </span>*/
/*             <button type="button" class="btn btn-success col-sm-3" data-toggle="modal" data-target="#modalContact">*/
/*                 <span class="glyphicon glyphicon-plus"></span> nouvelle Newsletter*/
/*             </button>*/
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
/*     {% if clients == null %}*/
/*         <p>Il n'y à pas encore de client</p>*/
/*     {% else %}*/
/*         <!-- TABLE ARTICLE -->*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <th> Utilisateur </th>*/
/*                     {% endif %}*/
/*                     <th> Nom </th>*/
/*                     <th> Prenom </th>*/
/*                     <th> Adresse </th>*/
/*                     <th> Mail </th>*/
/*                     <th> Commandes </th>*/
/*                     <th> Actions </th>*/
/*                 </tr>*/
/*             </thead> */
/*             <tbody>*/
/*             {% for client in clients %}*/
/*                 <tr>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <td> <strong>{{ client.getUtilisateur().getUsername() }}</strong> </td>*/
/*                     {% endif %}*/
/*                     <td> {{client.getNom()}} </td>*/
/*                     <td> {{client.getPrenom()}}</td>*/
/*                     <td> {{client.getAdresse()}}</td>*/
/*                     <td> {{client.getMail()}}</td>*/
/*                     <td> */
/*                         <ul>*/
/*                         {% for commande in commandes %}*/
/*                             {%if(commande.getClient() == client)%}*/
/*                                 <li>*/
/*                                     <strong>{{commande.getLibelle()}}</strong> */
/*                                     le {{commande.getDate()|date('d/m/Y')}}*/
/*                                     */
/*                                     <br/>*/
/*                                     */
/*                                     {% if(commande.getPaye() == false) %}*/
/*                                         <span class="label label-danger">*/
/*                                             <span class="glyphicon glyphicon-exclamation-sign"></span>*/
/*                                             Commande <strong>non-payée</strong>*/
/*                                         </span><br/>*/
/*                                         <a href="{{path('relance-client', {'idCommande': commande.getId(), 'idClient' : client.getId()})}}"><span class="glyphicon glyphicon-shopping-cart"></span> Relance paiement</a>*/
/*                                         */
/*                                     {%endif%}*/
/*                                 */
/*                                 </li>*/
/*                             {%endif%}*/
/*                         {% endfor%}*/
/*                         </ul>*/
/*                     </td>*/
/*                     <td class="row MODAL"> */
/*                         <a href="#" */
/*                            class="col-sm-12"*/
/*                            id="modifModal"*/
/*                            data-toggle="modal" */
/*                            data-target="#modalTest" */
/*                            data-url="{{path('modification-pop-client', {'idClient': client.getId()})}}"*/
/*                         >*/
/*                             <span class="glyphicon glyphicon-pencil"></span> Modifier*/
/*                         </a>*/
/* */
/*                         <a class=" col-sm-12 popconfirm" */
/*                                href="{{path('suppression-client', {'idClient': client.getId()})}}"*/
/*                                data-confirm-title="Attention" */
/*                                data-confirm-content="Etes vous sur de vouloir supprimer le client '{{client.getNom()}}'"*/
/*                                data-confirm-placement="bottom"*/
/*                                data-confirm-yesBtn="<span class='glyphicon glyphicon-ok'></span> Oui"*/
/*                                data-confirm-noBtn="<span class='glyphicon glyphicon-remove'></span> Non"*/
/*                         >*/
/*                             <span class=" glyphicon glyphicon-trash"></span> Supprimer */
/*                         </a>*/
/*                         <a */
/*                            class=" col-sm-12" */
/*                            id="contactModal"*/
/*                            data-toggle="modal" */
/*                            data-target="#modalTest"*/
/*                            data-url="{{path('mail-client-pop', {'idClient': client.getId()})}}"*/
/*                         >*/
/*                             <span class=" glyphicon glyphicon-envelope"></span> Contacter */
/*                         </a>*/
/*                     </td>*/
/*                 </tr>*/
/*             {% endfor %}*/
/*             </tbody>*/
/*         </table>*/
/* */
/* */
/*         <!-- FENETRE MODAL MODIFICATION -->*/
/*         <div class="modal fade" id="modalTest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Modification des informations d'un client</h3>*/
/*                     </div>*/
/*                     <div class="modal-body" id="cible">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     {% endif %}*/
/*      */
/*                 */
/*     <!-- FENETRE MODAL AJOUT CLIENT-->*/
/*         <div class="modal fade" id="modalAjout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Ajout d'un client</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ form_start(form) }}*/
/*                         {{ form_widget(form) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*                     */
/*     <!-- FENETRE MODAL CONTACT CLIENT-->*/
/*         <div class="modal fade" id="modalContact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Contact d'un client</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ form_start(formContact) }}*/
/*                         {{ form_widget(formContact) }}*/
/*                         {{ form_end(formContact) }}*/
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
