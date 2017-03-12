<?php

/* commande/commande.html.twig */
class __TwigTemplate_f8279f65508d0511b49f0d66753fc26464baa9413ef802a305e1564b13bbefd6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "commande/commande.html.twig", 1);
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
        $__internal_5e307ab7637781651d9da46b5a7f8afd057d8d185aadbaef11b5313289cb0457 = $this->env->getExtension("native_profiler");
        $__internal_5e307ab7637781651d9da46b5a7f8afd057d8d185aadbaef11b5313289cb0457->enter($__internal_5e307ab7637781651d9da46b5a7f8afd057d8d185aadbaef11b5313289cb0457_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commande/commande.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e307ab7637781651d9da46b5a7f8afd057d8d185aadbaef11b5313289cb0457->leave($__internal_5e307ab7637781651d9da46b5a7f8afd057d8d185aadbaef11b5313289cb0457_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_868c1eec6b4140823fdb438e569e6adb6355e72fca4ca5a959ca4fe20ec556bc = $this->env->getExtension("native_profiler");
        $__internal_868c1eec6b4140823fdb438e569e6adb6355e72fca4ca5a959ca4fe20ec556bc->enter($__internal_868c1eec6b4140823fdb438e569e6adb6355e72fca4ca5a959ca4fe20ec556bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h2> Commandes </h2>
    
    <!-- AJOUT COMMANDE -->
    <div>
        <p class=\"row\"> 
            <span class=\"col-sm-4\">Nouvelle Commande : </span>
             <!--path('ajout-article-pop') <a href=\"\" class=\"btn btn-primary ajax-modal\" data-submit-reload='true' > <span class=\"glyficon glyficon-plus\"></span> Ajouter un Article ! </a>-->
            <button type=\"button\" class=\"btn btn-primary col-sm-3\" data-toggle=\"modal\" data-target=\"#modalAjout\">
                <span class=\"glyphicon glyphicon-plus\"></span> nouvelle Commande
            </button>
        </p>
        <p class=\"row MODAL\"> 
            <span class=\"col-sm-4\">Voir les commandes archivées : </span>
            <a href=\"#\" 
               class=\"col-sm-3 btn btn-info\"
               id=\"modifModal\"
               data-toggle=\"modal\" 
               data-target=\"#modalTest\" 
               data-url=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("voir-commandes-archivees");
        echo "\"
            >
                <span class=\"glyphicon glyphicon-book\"></span> Commandes archivées
            </a>
        </p>
    </div>
    
    <!-- FLASH MESSAGE -->
    ";
        // line 31
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "feedback"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-success alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 34
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "alert"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flash_message"]) {
            echo " 
        <div class=\"alert alert-danger alert-dismissible\">
            <button type=\"button\" class=\"close\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
            ";
            // line 40
            echo twig_escape_filter($this->env, $context["flash_message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flash_message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "    
    
    ";
        // line 45
        if (((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")) == null)) {
            // line 46
            echo "        <p>Il n'y à pas encore de commande</p>
    ";
        } else {
            // line 48
            echo "        
        
        <!-- TABLE ARTICLE -->
        <table class=\"table table-bordered\">
            <thead>
                <tr>
                    ";
            // line 54
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 55
                echo "                        <th> Utilisateur </th>
                    ";
            }
            // line 57
            echo "                    <th> Commande </th>
                    <th> Evenement </th>
                    <th> Articles </th>
                    <th> Total </th>
                    <th> Date </th>
                    <th> Client </th>
                    <th> Actions </th>
                </tr>
            </thead> 
            <tbody class=\"row\">
            ";
            // line 67
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
            foreach ($context['_seq'] as $context["_key"] => $context["commande"]) {
                // line 68
                echo "                
                ";
                // line 69
                $context["compteArticle"] = 0;
                // line 70
                echo "                ";
                $context["total"] = 0;
                // line 71
                echo "                ";
                $context["locationCommande"] = 0;
                // line 72
                echo "                ";
                $context["retourArticle"] = 1;
                // line 73
                echo "                
                <tr>
                    ";
                // line 75
                if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                    // line 76
                    echo "                        <td> <strong>";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "getUtilisateur", array(), "method"), "getUsername", array(), "method"), "html", null, true);
                    echo "</strong> </td>
                    ";
                }
                // line 78
                echo "                    
                    <td class=\"col-sm-1\">
                        ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getLibelle", array(), "method"), "html", null, true);
                echo "<hr/>
                        <strong>Commande N° ";
                // line 81
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getId", array(), "method"), "html", null, true);
                echo "</strong> 
                    </td>
                    
                    <td class=\"col-sm-1\">
                        ";
                // line 85
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getTypeEvenement", array(), "method"), "html", null, true);
                echo "
                    </td>
                    
                    <td class=\"col-sm-4\"> 
                        <ul>
                            
                            <!-- Boucle ARTICLE -->
                            ";
                // line 92
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["commandesArticles"]) ? $context["commandesArticles"] : $this->getContext($context, "commandesArticles")));
                foreach ($context['_seq'] as $context["_key"] => $context["commandeArticle"]) {
                    // line 93
                    echo "                                ";
                    if (($this->getAttribute($context["commandeArticle"], "getCommande", array(), "method") == $context["commande"])) {
                        // line 94
                        echo "                                    <li>
                                        <!-- Libelle article -->
                                        ";
                        // line 96
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeArticle"], "getArticle", array()), "html", null, true);
                        echo "
                                        
                                        <!-- Quantité article -->
                                        (x";
                        // line 99
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeArticle"], "getQuantite", array(), "method"), "html", null, true);
                        echo ")
                                        
                                        ";
                        // line 101
                        $context["compteArticle"] = ($this->getAttribute($this->getAttribute($context["commandeArticle"], "getArticle", array()), "getPrix", array(), "method") * $this->getAttribute($context["commandeArticle"], "getQuantite", array(), "method"));
                        // line 102
                        echo "                                        
                                        = ";
                        // line 103
                        echo twig_escape_filter($this->env, (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")), "html", null, true);
                        echo "<span class=\"glyphicon glyphicon-euro\"></span>
                                        
                                        <!-- Action article -->
                                        <strong>";
                        // line 106
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeArticle"], "getAction", array(), "method"), "html", null, true);
                        echo "</strong>
                                        
                                        <!-- si un article est loué on met locationCommande à 1 pour afficher le lien de retour d'article -->
                                        ";
                        // line 109
                        if (($this->getAttribute($context["commandeArticle"], "getAction", array(), "method") && ($this->getAttribute($this->getAttribute($context["commandeArticle"], "getAction", array(), "method"), "getId", array(), "method") == 1))) {
                            // line 110
                            echo "                                            
                                            ";
                            // line 111
                            $context["locationCommande"] = 1;
                            // line 112
                            echo "                                            
                                            ";
                            // line 113
                            if (($this->getAttribute($context["commandeArticle"], "getRetour", array(), "method") == 0)) {
                                // line 114
                                echo "                                                ";
                                $context["retourArticle"] = 0;
                                // line 115
                                echo "                                            ";
                            }
                            // line 116
                            echo "                                            
                                        ";
                        }
                        // line 118
                        echo "                                        
                                        ";
                        // line 119
                        if (($this->getAttribute($context["commande"], "getPaye", array(), "method") == false)) {
                            // line 120
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-article-commande", array("idArticle" => $this->getAttribute($this->getAttribute($context["commandeArticle"], "getArticle", array()), "getId", array(), "method"), "idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                            echo "\">
                                                <span class=\"glyphicon glyphicon-remove\"></span>
                                            </a>
                                        ";
                        }
                        // line 124
                        echo "                                        
                                        ";
                        // line 125
                        $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")));
                        // line 126
                        echo "                                    </li>
                                ";
                    }
                    // line 128
                    echo "                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandeArticle'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 129
                echo "                            
                            
                            <!-- Boucle LOT -->
                            ";
                // line 132
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["commandesLots"]) ? $context["commandesLots"] : $this->getContext($context, "commandesLots")));
                foreach ($context['_seq'] as $context["_key"] => $context["commandeLot"]) {
                    // line 133
                    echo "                                ";
                    if (($this->getAttribute($context["commandeLot"], "getCommande", array(), "method") == $context["commande"])) {
                        // line 134
                        echo "                                    <li>
                                        <!-- Libelle article -->
                                        ";
                        // line 136
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "html", null, true);
                        echo "
                                        
                                        <!-- Quantité article -->
                                        (x";
                        // line 139
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeLot"], "getQuantite", array(), "method"), "html", null, true);
                        echo ")
                                        
                                        ";
                        // line 141
                        $context["compteLot"] = ($this->getAttribute($this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "getPrix", array(), "method") * $this->getAttribute($context["commandeLot"], "getQuantite", array(), "method"));
                        // line 142
                        echo "                                        
                                        <!-- Action article -->
                                        <strong>";
                        // line 144
                        echo twig_escape_filter($this->env, $this->getAttribute($context["commandeLot"], "getAction", array(), "method"), "html", null, true);
                        echo "</strong>
                                        
                                        <!-- si un article est loué on met locationCommande à 1 pour afficher le lien de retour d'article -->
                                        ";
                        // line 147
                        if (($this->getAttribute($context["commandeLot"], "getAction", array(), "method") && ($this->getAttribute($this->getAttribute($context["commandeLot"], "getAction", array(), "method"), "getId", array(), "method") == 1))) {
                            // line 148
                            echo "                                            
                                            ";
                            // line 149
                            $context["locationCommande"] = 1;
                            // line 150
                            echo "                                            
                                            ";
                            // line 151
                            if (($this->getAttribute($context["commandeLot"], "getRetour", array(), "method") == 0)) {
                                // line 152
                                echo "                                                ";
                                $context["retourArticle"] = 0;
                                // line 153
                                echo "                                            ";
                            }
                            // line 154
                            echo "                                            
                                        ";
                        }
                        // line 156
                        echo "                                           
                                        
                                        ";
                        // line 158
                        if (($this->getAttribute($context["commande"], "getPaye", array(), "method") == false)) {
                            // line 159
                            echo "                                            <a href=\"";
                            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-lot-commande", array("idLot" => $this->getAttribute($this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "getId", array(), "method"), "idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                            echo "\">
                                                <span class=\"glyphicon glyphicon-remove\"></span>
                                            </a>
                                        ";
                        }
                        // line 163
                        echo "                                        
                                            
                                        
                                        
                                        ";
                        // line 167
                        $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["compteLot"]) ? $context["compteLot"] : $this->getContext($context, "compteLot")));
                        // line 168
                        echo "                                        
                                        
                                    </li>
                                ";
                    }
                    // line 172
                    echo "                            
                                
                            
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandeLot'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 176
                echo "                            
                            
                            
                            <!-- Ajout ARTICLE -->
                            ";
                // line 180
                if (($this->getAttribute($context["commande"], "getPaye", array(), "method") == false)) {
                    // line 181
                    echo "                                <li class=\"POPOVER\">
                                    <a 
                                        href=\"";
                    // line 183
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout-article-commande-pop", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                    echo "\"
                                        class=\"pop-ajax\"
                                        data-submit-close='true'
                                        data-submit-reload='true'
                                    >
                                        <span class=\"glyphicon glyphicon-plus\"></span> Ajouter un article 
                                    </a>
                                </li>
                                <li class=\"POPOVER\">
                                    <a 
                                        href=\"";
                    // line 193
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ajout-lot-commande-pop", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                    echo "\"
                                        class=\"pop-ajax\"
                                        data-submit-close='true'
                                        data-submit-reload='true'
                                    >
                                        <span class=\"glyphicon glyphicon-plus\"></span> Ajouter un lot
                                    </a>
                                </li>
                                
                            ";
                }
                // line 203
                echo "                        </ul>
                    </td>
                    
                    <td class=\"col-sm-2\">
                        ";
                // line 207
                echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
                echo "<span class=\"glyphicon glyphicon-euro\"></span><br/>
                        ";
                // line 208
                if (($this->getAttribute($context["commande"], "getAcompte", array(), "method") != 0)) {
                    // line 209
                    echo "                            Acompte : ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getAcompte", array(), "method"), "html", null, true);
                    echo " <span class=\"glyphicon glyphicon-euro\"></span>
                            <br/>
                            ";
                    // line 211
                    $context["reste"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) - $this->getAttribute($context["commande"], "getAcompte", array(), "method"));
                    // line 212
                    echo "                            <hr/>
                            Reste : ";
                    // line 213
                    echo twig_escape_filter($this->env, (isset($context["reste"]) ? $context["reste"] : $this->getContext($context, "reste")), "html", null, true);
                    echo " <span class=\"glyphicon glyphicon-euro\"></span>
                        ";
                }
                // line 215
                echo "                    </td>
                    
                   
                    
                    <td class=\"col-sm-1\">Date commande <br/>";
                // line 219
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "getDate", array(), "method"), "d/m/Y"), "html", null, true);
                echo "<hr/> Date Evenement ";
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["commande"], "getDateEvenement", array(), "method"), "d/m/Y"), "html", null, true);
                echo "<br/> </td>
                    <td class=\"col-sm-1\">
                        ";
                // line 221
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "getClient", array(), "method"), "getNom", array(), "method"), "html", null, true);
                echo "
                        ";
                // line 222
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commande"], "getClient", array(), "method"), "getPrenom", array(), "method"), "html", null, true);
                echo "
                        ";
                // line 223
                if ($this->getAttribute($context["commande"], "getPartenaire", array(), "method")) {
                    // line 224
                    echo "                            <hr/>
                            ";
                    // line 225
                    echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getPartenaire", array(), "method"), "html", null, true);
                    echo "
                        ";
                }
                // line 227
                echo "                        
                    </td>
                    
                    <!-- ACTIONS -->
                    <td class=\"row TEST col-sm-3\"> 
                        
                        <!-- Commande payée -->
                        ";
                // line 234
                if (($this->getAttribute($context["commande"], "getPaye", array(), "method") == true)) {
                    // line 235
                    echo "                            <span class=\"col-sm-12 label label-success\">
                                <span class=\"glyphicon glyphicon-ok-circle\"></span> Commande payée !
                            </span>
                            
                        ";
                } elseif (($this->getAttribute(                // line 239
$context["commande"], "getPaye", array(), "method") == false)) {
                    // line 240
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("commande-paye", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"col-sm-12\">
                                <span class=\"glyphicon glyphicon-ok-circle\"></span> Commande payée
                            </a>
                                
                            <!-- Versement acompte --> 
                            ";
                    // line 245
                    if (($this->getAttribute($context["commande"], "getAcompte", array(), "method") == 0)) {
                        // line 246
                        echo "                                <a 
                                    href=\"";
                        // line 247
                        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("versement-acompte-pop", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                        echo "\"
                                    class=\"pop-ajax col-sm-12\"
                                    data-submit-close='true'
                                    data-submit-reload='true'
                                >
                                    <span class=\"glyphicon glyphicon-piggy-bank\"></span> Acompte versé 
                                </a>
                            ";
                    }
                    // line 255
                    echo "                            
                        ";
                }
                // line 257
                echo "                        
                        <!-- Retour des articles -->
                        ";
                // line 259
                if ((((isset($context["locationCommande"]) ? $context["locationCommande"] : $this->getContext($context, "locationCommande")) == 1) && ((isset($context["retourArticle"]) ? $context["retourArticle"] : $this->getContext($context, "retourArticle")) == 1))) {
                    // line 260
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("depart-location", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"col-sm-12\">
                                <span class=\"glyphicon glyphicon-transfer\"></span> Depart des articles
                            </a>
                            
                        ";
                } elseif (((                // line 264
(isset($context["locationCommande"]) ? $context["locationCommande"] : $this->getContext($context, "locationCommande")) == 1) && ((isset($context["retourArticle"]) ? $context["retourArticle"] : $this->getContext($context, "retourArticle")) == 0))) {
                    // line 265
                    echo "                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("retour-location", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                    echo "\" class=\"col-sm-12\">
                                <span class=\"glyphicon glyphicon-transfer\"></span> Retour des articles
                            </a>
                        ";
                }
                // line 269
                echo "                        

                        <!-- Génération de la facture -->       
                        <div class=\"col-sm-12\">
                            <a href=\"";
                // line 273
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("générer-facture", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                                <span class=\"glyphicon glyphicon-copy\"></span> Génerer facture
                            </a>

                            <!-- Génération du devis -->       
                            <a href=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("générer-devis", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                echo "\">
                               / devis
                            </a>
                        </div>
                               
                        <!-- Archiver une commande -->   
                        <a href=\"";
                // line 284
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("archiver-commande", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                echo "\" 
                           class=\"col-sm-12\"
                        >
                            <span class=\"glyphicon glyphicon-folder-open\"></span> Archiver la commande
                        </a>
                           
                        <!-- Suppression de la commande -->
                        <a class=\" col-sm-12 popconfirm\" 
                               href=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("suppression-commande", array("idCommande" => $this->getAttribute($context["commande"], "getId", array(), "method"))), "html", null, true);
                echo "\"
                               data-confirm-title=\"Attention\" 
                               data-confirm-content=\"Etes vous sur de vouloir supprimer la commande '";
                // line 294
                echo twig_escape_filter($this->env, $this->getAttribute($context["commande"], "getLibelle", array(), "method"), "html", null, true);
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commande'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "            </tbody>
        </table>

        
        
        
    ";
        }
        // line 311
        echo "
    <div class=\"navigation\">
        ";
        // line 313
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["commandes"]) ? $context["commandes"] : $this->getContext($context, "commandes")));
        echo "
    </div>
    
    <!-- FENETRE MODAL MODIFICATION -->
        <div class=\"modal fade\" id=\"modalTest\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog modal-lg\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Commandes Archivées</h3>
                    </div>
                    <div class=\"modal-body\" id=\"cible\">
                    </div>
                </div>
            </div>
        </div>
    
    
    <!-- FENETRE MODAL AJOUT-->
        <div class=\"modal fade\" id=\"modalAjout\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"myModalLabel\">
            <div class=\"modal-dialog\" role=\"document\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\"><span aria-hidden=\"true\">&times;</span></button>
                        <h3 class=\"modal-title\" id=\"myModalLabel\">Creation de commande</h3>
                    </div>
                    <div class=\"modal-body\">
                        ";
        // line 340
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                        ";
        // line 341
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
                        ";
        // line 342
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
                    </div>
                </div>
            </div>
        </div> 

    
    

";
        
        $__internal_868c1eec6b4140823fdb438e569e6adb6355e72fca4ca5a959ca4fe20ec556bc->leave($__internal_868c1eec6b4140823fdb438e569e6adb6355e72fca4ca5a959ca4fe20ec556bc_prof);

    }

    public function getTemplateName()
    {
        return "commande/commande.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  660 => 342,  656 => 341,  652 => 340,  622 => 313,  618 => 311,  609 => 304,  593 => 294,  588 => 292,  577 => 284,  568 => 278,  560 => 273,  554 => 269,  546 => 265,  544 => 264,  536 => 260,  534 => 259,  530 => 257,  526 => 255,  515 => 247,  512 => 246,  510 => 245,  501 => 240,  499 => 239,  493 => 235,  491 => 234,  482 => 227,  477 => 225,  474 => 224,  472 => 223,  468 => 222,  464 => 221,  457 => 219,  451 => 215,  446 => 213,  443 => 212,  441 => 211,  435 => 209,  433 => 208,  429 => 207,  423 => 203,  410 => 193,  397 => 183,  393 => 181,  391 => 180,  385 => 176,  376 => 172,  370 => 168,  368 => 167,  362 => 163,  354 => 159,  352 => 158,  348 => 156,  344 => 154,  341 => 153,  338 => 152,  336 => 151,  333 => 150,  331 => 149,  328 => 148,  326 => 147,  320 => 144,  316 => 142,  314 => 141,  309 => 139,  303 => 136,  299 => 134,  296 => 133,  292 => 132,  287 => 129,  281 => 128,  277 => 126,  275 => 125,  272 => 124,  264 => 120,  262 => 119,  259 => 118,  255 => 116,  252 => 115,  249 => 114,  247 => 113,  244 => 112,  242 => 111,  239 => 110,  237 => 109,  231 => 106,  225 => 103,  222 => 102,  220 => 101,  215 => 99,  209 => 96,  205 => 94,  202 => 93,  198 => 92,  188 => 85,  181 => 81,  177 => 80,  173 => 78,  167 => 76,  165 => 75,  161 => 73,  158 => 72,  155 => 71,  152 => 70,  150 => 69,  147 => 68,  143 => 67,  131 => 57,  127 => 55,  125 => 54,  117 => 48,  113 => 46,  111 => 45,  107 => 43,  98 => 40,  89 => 37,  80 => 34,  72 => 31,  61 => 23,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h2> Commandes </h2>*/
/*     */
/*     <!-- AJOUT COMMANDE -->*/
/*     <div>*/
/*         <p class="row"> */
/*             <span class="col-sm-4">Nouvelle Commande : </span>*/
/*              <!--path('ajout-article-pop') <a href="" class="btn btn-primary ajax-modal" data-submit-reload='true' > <span class="glyficon glyficon-plus"></span> Ajouter un Article ! </a>-->*/
/*             <button type="button" class="btn btn-primary col-sm-3" data-toggle="modal" data-target="#modalAjout">*/
/*                 <span class="glyphicon glyphicon-plus"></span> nouvelle Commande*/
/*             </button>*/
/*         </p>*/
/*         <p class="row MODAL"> */
/*             <span class="col-sm-4">Voir les commandes archivées : </span>*/
/*             <a href="#" */
/*                class="col-sm-3 btn btn-info"*/
/*                id="modifModal"*/
/*                data-toggle="modal" */
/*                data-target="#modalTest" */
/*                data-url="{{path('voir-commandes-archivees')}}"*/
/*             >*/
/*                 <span class="glyphicon glyphicon-book"></span> Commandes archivées*/
/*             </a>*/
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
/*     {% if commandes == null %}*/
/*         <p>Il n'y à pas encore de commande</p>*/
/*     {% else %}*/
/*         */
/*         */
/*         <!-- TABLE ARTICLE -->*/
/*         <table class="table table-bordered">*/
/*             <thead>*/
/*                 <tr>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <th> Utilisateur </th>*/
/*                     {% endif %}*/
/*                     <th> Commande </th>*/
/*                     <th> Evenement </th>*/
/*                     <th> Articles </th>*/
/*                     <th> Total </th>*/
/*                     <th> Date </th>*/
/*                     <th> Client </th>*/
/*                     <th> Actions </th>*/
/*                 </tr>*/
/*             </thead> */
/*             <tbody class="row">*/
/*             {% for commande in commandes %}*/
/*                 */
/*                 {% set compteArticle = 0 %}*/
/*                 {% set total = 0 %}*/
/*                 {% set locationCommande = 0 %}*/
/*                 {% set retourArticle = 1 %}*/
/*                 */
/*                 <tr>*/
/*                     {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                         <td> <strong>{{ commande.getUtilisateur().getUsername() }}</strong> </td>*/
/*                     {% endif %}*/
/*                     */
/*                     <td class="col-sm-1">*/
/*                         {{commande.getLibelle()}}<hr/>*/
/*                         <strong>Commande N° {{commande.getId()}}</strong> */
/*                     </td>*/
/*                     */
/*                     <td class="col-sm-1">*/
/*                         {{commande.getTypeEvenement()}}*/
/*                     </td>*/
/*                     */
/*                     <td class="col-sm-4"> */
/*                         <ul>*/
/*                             */
/*                             <!-- Boucle ARTICLE -->*/
/*                             {% for commandeArticle in commandesArticles %}*/
/*                                 {% if(commandeArticle.getCommande() == commande) %}*/
/*                                     <li>*/
/*                                         <!-- Libelle article -->*/
/*                                         {{commandeArticle.getArticle}}*/
/*                                         */
/*                                         <!-- Quantité article -->*/
/*                                         (x{{commandeArticle.getQuantite()}})*/
/*                                         */
/*                                         {% set compteArticle = commandeArticle.getArticle.getPrix()*commandeArticle.getQuantite() %}*/
/*                                         */
/*                                         = {{compteArticle}}<span class="glyphicon glyphicon-euro"></span>*/
/*                                         */
/*                                         <!-- Action article -->*/
/*                                         <strong>{{commandeArticle.getAction()}}</strong>*/
/*                                         */
/*                                         <!-- si un article est loué on met locationCommande à 1 pour afficher le lien de retour d'article -->*/
/*                                         {%if(commandeArticle.getAction() and commandeArticle.getAction().getId() == 1)%}*/
/*                                             */
/*                                             {% set locationCommande = 1 %}*/
/*                                             */
/*                                             {%if(commandeArticle.getRetour() == 0)%}*/
/*                                                 {% set retourArticle = 0 %}*/
/*                                             {%endif%}*/
/*                                             */
/*                                         {%endif%}*/
/*                                         */
/*                                         {%if(commande.getPaye() == false)%}*/
/*                                             <a href="{{path('suppression-article-commande',{'idArticle': commandeArticle.getArticle.getId(),'idCommande': commande.getId()})}}">*/
/*                                                 <span class="glyphicon glyphicon-remove"></span>*/
/*                                             </a>*/
/*                                         {%endif%}*/
/*                                         */
/*                                         {% set total = total+compteArticle %}*/
/*                                     </li>*/
/*                                 {%endif%}*/
/*                             {% endfor %}*/
/*                             */
/*                             */
/*                             <!-- Boucle LOT -->*/
/*                             {% for commandeLot in commandesLots %}*/
/*                                 {% if(commandeLot.getCommande() == commande) %}*/
/*                                     <li>*/
/*                                         <!-- Libelle article -->*/
/*                                         {{commandeLot.getLot()}}*/
/*                                         */
/*                                         <!-- Quantité article -->*/
/*                                         (x{{commandeLot.getQuantite()}})*/
/*                                         */
/*                                         {% set compteLot = commandeLot.getLot().getPrix()*commandeLot.getQuantite() %}*/
/*                                         */
/*                                         <!-- Action article -->*/
/*                                         <strong>{{commandeLot.getAction()}}</strong>*/
/*                                         */
/*                                         <!-- si un article est loué on met locationCommande à 1 pour afficher le lien de retour d'article -->*/
/*                                         {%if(commandeLot.getAction() and commandeLot.getAction().getId() == 1)%}*/
/*                                             */
/*                                             {% set locationCommande = 1 %}*/
/*                                             */
/*                                             {%if(commandeLot.getRetour() == 0)%}*/
/*                                                 {% set retourArticle = 0 %}*/
/*                                             {%endif%}*/
/*                                             */
/*                                         {%endif%}*/
/*                                            */
/*                                         */
/*                                         {%if(commande.getPaye() == false)%}*/
/*                                             <a href="{{path('suppression-lot-commande',{'idLot': commandeLot.getLot().getId(),'idCommande': commande.getId()})}}">*/
/*                                                 <span class="glyphicon glyphicon-remove"></span>*/
/*                                             </a>*/
/*                                         {%endif%}*/
/*                                         */
/*                                             */
/*                                         */
/*                                         */
/*                                         {% set total = total+compteLot %}*/
/*                                         */
/*                                         */
/*                                     </li>*/
/*                                 {%endif%}*/
/*                             */
/*                                 */
/*                             */
/*                             {% endfor %}*/
/*                             */
/*                             */
/*                             */
/*                             <!-- Ajout ARTICLE -->*/
/*                             {%if(commande.getPaye() == false)%}*/
/*                                 <li class="POPOVER">*/
/*                                     <a */
/*                                         href="{{ path('ajout-article-commande-pop', {'idCommande': commande.getId()})}}"*/
/*                                         class="pop-ajax"*/
/*                                         data-submit-close='true'*/
/*                                         data-submit-reload='true'*/
/*                                     >*/
/*                                         <span class="glyphicon glyphicon-plus"></span> Ajouter un article */
/*                                     </a>*/
/*                                 </li>*/
/*                                 <li class="POPOVER">*/
/*                                     <a */
/*                                         href="{{ path('ajout-lot-commande-pop', {'idCommande': commande.getId()})}}"*/
/*                                         class="pop-ajax"*/
/*                                         data-submit-close='true'*/
/*                                         data-submit-reload='true'*/
/*                                     >*/
/*                                         <span class="glyphicon glyphicon-plus"></span> Ajouter un lot*/
/*                                     </a>*/
/*                                 </li>*/
/*                                 */
/*                             {%endif%}*/
/*                         </ul>*/
/*                     </td>*/
/*                     */
/*                     <td class="col-sm-2">*/
/*                         {{total}}<span class="glyphicon glyphicon-euro"></span><br/>*/
/*                         {% if(commande.getAcompte() != 0) %}*/
/*                             Acompte : {{commande.getAcompte()}} <span class="glyphicon glyphicon-euro"></span>*/
/*                             <br/>*/
/*                             {% set reste = total-commande.getAcompte() %}*/
/*                             <hr/>*/
/*                             Reste : {{reste}} <span class="glyphicon glyphicon-euro"></span>*/
/*                         {% endif %}*/
/*                     </td>*/
/*                     */
/*                    */
/*                     */
/*                     <td class="col-sm-1">Date commande <br/>{{commande.getDate()|date('d/m/Y')}}<hr/> Date Evenement {{commande.getDateEvenement()|date('d/m/Y')}}<br/> </td>*/
/*                     <td class="col-sm-1">*/
/*                         {{commande.getClient().getNom()}}*/
/*                         {{commande.getClient().getPrenom()}}*/
/*                         {% if(commande.getPartenaire())%}*/
/*                             <hr/>*/
/*                             {{commande.getPartenaire()}}*/
/*                         {% endif %}*/
/*                         */
/*                     </td>*/
/*                     */
/*                     <!-- ACTIONS -->*/
/*                     <td class="row TEST col-sm-3"> */
/*                         */
/*                         <!-- Commande payée -->*/
/*                         {% if(commande.getPaye() == true)%}*/
/*                             <span class="col-sm-12 label label-success">*/
/*                                 <span class="glyphicon glyphicon-ok-circle"></span> Commande payée !*/
/*                             </span>*/
/*                             */
/*                         {% elseif(commande.getPaye() == false) %}*/
/*                             <a href="{{path('commande-paye', {'idCommande': commande.getId()})}}" class="col-sm-12">*/
/*                                 <span class="glyphicon glyphicon-ok-circle"></span> Commande payée*/
/*                             </a>*/
/*                                 */
/*                             <!-- Versement acompte --> */
/*                             {% if(commande.getAcompte() == 0)%}*/
/*                                 <a */
/*                                     href="{{ path('versement-acompte-pop', {'idCommande': commande.getId()})}}"*/
/*                                     class="pop-ajax col-sm-12"*/
/*                                     data-submit-close='true'*/
/*                                     data-submit-reload='true'*/
/*                                 >*/
/*                                     <span class="glyphicon glyphicon-piggy-bank"></span> Acompte versé */
/*                                 </a>*/
/*                             {% endif %}*/
/*                             */
/*                         {% endif %}*/
/*                         */
/*                         <!-- Retour des articles -->*/
/*                         {% if(locationCommande == 1 and retourArticle == 1) %}*/
/*                             <a href="{{path('depart-location', {'idCommande': commande.getId()})}}" class="col-sm-12">*/
/*                                 <span class="glyphicon glyphicon-transfer"></span> Depart des articles*/
/*                             </a>*/
/*                             */
/*                         {% elseif(locationCommande == 1 and retourArticle ==  0)%}*/
/*                             <a href="{{path('retour-location', {'idCommande': commande.getId()})}}" class="col-sm-12">*/
/*                                 <span class="glyphicon glyphicon-transfer"></span> Retour des articles*/
/*                             </a>*/
/*                         {% endif %}*/
/*                         */
/* */
/*                         <!-- Génération de la facture -->       */
/*                         <div class="col-sm-12">*/
/*                             <a href="{{path('générer-facture',{'idCommande': commande.getId()})}}">*/
/*                                 <span class="glyphicon glyphicon-copy"></span> Génerer facture*/
/*                             </a>*/
/* */
/*                             <!-- Génération du devis -->       */
/*                             <a href="{{path('générer-devis',{'idCommande': commande.getId()})}}">*/
/*                                / devis*/
/*                             </a>*/
/*                         </div>*/
/*                                */
/*                         <!-- Archiver une commande -->   */
/*                         <a href="{{path('archiver-commande', {'idCommande': commande.getId()})}}" */
/*                            class="col-sm-12"*/
/*                         >*/
/*                             <span class="glyphicon glyphicon-folder-open"></span> Archiver la commande*/
/*                         </a>*/
/*                            */
/*                         <!-- Suppression de la commande -->*/
/*                         <a class=" col-sm-12 popconfirm" */
/*                                href="{{path('suppression-commande', {'idCommande': commande.getId()})}}"*/
/*                                data-confirm-title="Attention" */
/*                                data-confirm-content="Etes vous sur de vouloir supprimer la commande '{{commande.getLibelle()}}'"*/
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
/* */
/*         */
/*         */
/*         */
/*     {% endif %}*/
/* */
/*     <div class="navigation">*/
/*         {{ knp_pagination_render(commandes) }}*/
/*     </div>*/
/*     */
/*     <!-- FENETRE MODAL MODIFICATION -->*/
/*         <div class="modal fade" id="modalTest" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog modal-lg" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Commandes Archivées</h3>*/
/*                     </div>*/
/*                     <div class="modal-body" id="cible">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     */
/*     */
/*     <!-- FENETRE MODAL AJOUT-->*/
/*         <div class="modal fade" id="modalAjout" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">*/
/*             <div class="modal-dialog" role="document">*/
/*                 <div class="modal-content">*/
/*                     <div class="modal-header">*/
/*                         <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>*/
/*                         <h3 class="modal-title" id="myModalLabel">Creation de commande</h3>*/
/*                     </div>*/
/*                     <div class="modal-body">*/
/*                         {{ form_start(form) }}*/
/*                         {{ form_widget(form) }}*/
/*                         {{ form_end(form) }}*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div> */
/* */
/*     */
/*     */
/* */
/* {% endblock %}*/
/* */
