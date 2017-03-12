<?php

/* commande/facture.html.twig */
class __TwigTemplate_5bcc22dbd18d2e5440fc288585a3573def0b7365ba3fda5a55d6910ec92b1ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ac34a08f25c8d42e30b5f730c9f12ddc247b691f8793af581829dc4c5f456b83 = $this->env->getExtension("native_profiler");
        $__internal_ac34a08f25c8d42e30b5f730c9f12ddc247b691f8793af581829dc4c5f456b83->enter($__internal_ac34a08f25c8d42e30b5f730c9f12ddc247b691f8793af581829dc4c5f456b83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "commande/facture.html.twig"));

        // line 1
        echo "<page style=\"margin-left: 150px;\"> 
    <page_header> 
       <link href=\"/vendor/css/bootstrap.min.css\" rel=\"stylesheet\">
       <link href=\"/vendor/css/bootstrap-theme.min.css\" rel=\"stylesheet\">     
       <link href=\"/css/facture.css\" rel=\"stylesheet\">
    </page_header> 

    
   
    <div class=\"corp\" style=\"
         margin-left: 50px;
         margin-right: 50px;
         margin-top: 40px;
         
    \">
        
        <img src=\"./images/cdf.png\" width=\"160\" height=\"100\" alt=\"caré\" /><br/>
        
        <strong style=\"margin-left: 495px; font-size: 22px;\">";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getTypeEvenement", array(), "method"), "html", null, true);
        echo "</strong>
        
        <p><em>Décoratrice évènementiel</em></p>
        <p>
            SAS Couleurs de Fête<br/>
            7 rue Alfred Kastler<br/>
            14000 Caen<br/>
            Téléphone: 06 89 47 02 19<br/>
            www.couleursdefete.fr<span style=\"margin-left: 374px;\">";
        // line 27
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getDate", array(), "method"), "d/m/Y"), "html", null, true);
        echo "</span><br/>
        </p>
        
        <strong><u>A l'attention de :</u></strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getClient", array()), "getNom", array(), "method"), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getClient", array()), "getPrenom", array(), "method"), "html", null, true);
        echo " <br/>
        <span style=\"margin-left: 110px;\">";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getClient", array()), "getAdresse", array(), "method"), "html", null, true);
        echo "</span><br/>
        
        <span style=\"margin-left: 510px;\">Objet :</span><br/>
        <span style=\"margin-left: 508px;\"> Mariage le ";
        // line 34
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getDateEvenement", array(), "method"), "d/m/Y"), "html", null, true);
        echo "</span><br/>
        <span style=\"margin-left: 508px;\"> ";
        // line 35
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getPartenaire", array(), "method"), "html", null, true);
        echo "</span>
        
        
        <br/>
        <br/>
        
        
        <p><strong style=\"margin-left: 510px;\">";
        // line 42
        echo twig_escape_filter($this->env, twig_upper_filter($this->env, (isset($context["document"]) ? $context["document"] : $this->getContext($context, "document"))), "html", null, true);
        echo " N° ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getId", array(), "method"), "html", null, true);
        echo "</strong></p>
        
        <p> <strong>Demande de location de matériel pour votre évènement</strong></p>
        
       

        <!-- TABLE ARTICLE -->
        <table style=\"border: solid black 1px;  width:600px;\">

                <tr>
                    <th style=\"width: 400px;  border: solid black 2px; text-align:center;\"> Designation </th>
                    <th style=\"border: solid black 2px;\"> Nombre </th>
                    <th style=\"border: solid black 2px;\"> Montant unitaire</th>
                    <th style=\"border: solid black 2px;\"> Montant TTC </th>
                </tr>

                ";
        // line 58
        $context["total"] = 0;
        // line 59
        echo "                

                ";
        // line 61
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandesArticles"]) ? $context["commandesArticles"] : $this->getContext($context, "commandesArticles")));
        foreach ($context['_seq'] as $context["_key"] => $context["commandeArticle"]) {
            // line 62
            echo "                    ";
            if (($this->getAttribute($context["commandeArticle"], "getCommande", array(), "method") == (isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")))) {
                // line 63
                echo "                    <tr>
                        <td style=\"width: 400px;\"> ";
                // line 64
                echo twig_escape_filter($this->env, $this->getAttribute($context["commandeArticle"], "getArticle", array(), "method"), "html", null, true);
                echo " </td>
                        <td style=\"text-align: right;\"> ";
                // line 65
                echo twig_escape_filter($this->env, $this->getAttribute($context["commandeArticle"], "getQuantite", array(), "method"), "html", null, true);
                echo " </td>
                        <td style=\"text-align: right;\"> ";
                // line 66
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commandeArticle"], "getArticle", array(), "method"), "getPrix", array(), "method"), "html", null, true);
                echo " €</td>

                        ";
                // line 68
                $context["compteArticle"] = ($this->getAttribute($this->getAttribute($context["commandeArticle"], "getArticle", array()), "getPrix", array(), "method") * $this->getAttribute($context["commandeArticle"], "getQuantite", array(), "method"));
                // line 69
                echo "                        ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")));
                // line 70
                echo "                        <td style=\"text-align: right;\"> ";
                echo twig_escape_filter($this->env, (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")), "html", null, true);
                echo " €</td>
                    </tr>
                    ";
            }
            // line 73
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandeArticle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                
                ";
        // line 75
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["commandesLot"]) ? $context["commandesLot"] : $this->getContext($context, "commandesLot")));
        foreach ($context['_seq'] as $context["_key"] => $context["commandeLot"]) {
            // line 76
            echo "                    ";
            if (($this->getAttribute($context["commandeLot"], "getCommande", array(), "method") == (isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")))) {
                // line 77
                echo "                    <tr>
                        <td style=\"width: 400px;\"> ";
                // line 78
                echo twig_escape_filter($this->env, $this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "html", null, true);
                echo " </td>
                        <td style=\"text-align: right;\"> ";
                // line 79
                echo twig_escape_filter($this->env, $this->getAttribute($context["commandeLot"], "getQuantite", array(), "method"), "html", null, true);
                echo " </td>
                        <td style=\"text-align: right;\"> ";
                // line 80
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "getPrix", array(), "method"), "html", null, true);
                echo " €</td>

                        ";
                // line 82
                $context["compteArticle"] = ($this->getAttribute($this->getAttribute($context["commandeLot"], "getLot", array(), "method"), "getPrix", array(), "method") * $this->getAttribute($context["commandeLot"], "getQuantite", array(), "method"));
                // line 83
                echo "                        ";
                $context["total"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) + (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")));
                // line 84
                echo "                        <td style=\"text-align: right;\"> ";
                echo twig_escape_filter($this->env, (isset($context["compteArticle"]) ? $context["compteArticle"] : $this->getContext($context, "compteArticle")), "html", null, true);
                echo " €</td>
                    </tr>
                    ";
            }
            // line 87
            echo "                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['commandeLot'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                
                <tr><td><br/></td><td></td><td></td><td></td></tr> 
                
                ";
        // line 91
        if (((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")) == "Devis")) {
            // line 92
            echo "                    <tr style=\"margin-top: 100px;\">
                        <td style=\"width: 400px;\">
                            Afin de valider votre réservation, il vous est demandé un acompte représentant 40 % de la commande totale.<br/>

                            Une caution par chèque vous sera demandée lors de l'enlevement mais NON ENCAISSEE.
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    
                    <tr>
                        <td style=\"width: 400px;\">
                            Devis valable 1 mois.
                        </td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                ";
        } elseif ((        // line 111
(isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")) == "Facture")) {
            // line 112
            echo "                    
                    
                ";
        }
        // line 115
        echo "                <tr><td><br/></td><td></td><td></td><td></td></tr>
                <tr>
                    <td style=\"width: 400px; text-align: right;\">
                        TOTAL TTC
                    </td>
                    <td colspan=\"3\" style=\" text-align: right; border: 1px solid black;\"> ";
        // line 120
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo " €</td>
                </tr>
                
                ";
        // line 123
        if (((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")) == "Devis")) {
            // line 124
            echo "                    ";
            $context["acompteLogique"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) * 0.4);
            // line 125
            echo "                    <tr>
                        <td style=\"width: 400px; text-align: right;\">
                            <strong>Acompte:</strong>
                        </td>
                        <td colspan=\"3\" style=\" text-align: right; border: 1px solid black;\"> ";
            // line 129
            echo twig_escape_filter($this->env, (isset($context["acompteLogique"]) ? $context["acompteLogique"] : $this->getContext($context, "acompteLogique")), "html", null, true);
            echo " €</td>
                    </tr>
                
                    
                    ";
            // line 133
            $context["restant"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) - (isset($context["acompteLogique"]) ? $context["acompteLogique"] : $this->getContext($context, "acompteLogique")));
            // line 134
            echo "                
                    <tr>
                        <td style=\"width: 400px; text-align: right;\">
                            <strong>Solde restant:</strong>
                        </td>
                        <td colspan=\"3\" style=\" text-align: right; border: 1px solid black;\"> ";
            // line 139
            echo twig_escape_filter($this->env, (isset($context["restant"]) ? $context["restant"] : $this->getContext($context, "restant")), "html", null, true);
            echo " €</td>
                    </tr>
                ";
        } elseif ((        // line 141
(isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")) == "Facture")) {
            // line 142
            echo "                    <tr>
                        <td style=\"width: 400px; text-align: right;\">
                            <strong>Acompte versé:</strong>
                        </td>
                        <td colspan=\"3\" style=\" text-align: right; border: 1px solid black;\">
                            ";
            // line 147
            if (($this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getAcompte", array(), "method") == 0)) {
                // line 148
                echo "                                0 €
                            ";
            } else {
                // line 150
                echo "                                ";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getAcompte", array(), "method"), "html", null, true);
                echo " €
                            ";
            }
            // line 152
            echo "                            
                        </td>
                    </tr>
                
                    
                    ";
            // line 157
            $context["restant"] = ((isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")) - $this->getAttribute((isset($context["commande"]) ? $context["commande"] : $this->getContext($context, "commande")), "getAcompte", array(), "method"));
            // line 158
            echo "                
                    <tr>
                        <td style=\"width: 400px; text-align: right;\">
                            <strong>Solde restant:</strong>
                        </td>
                        <td colspan=\"3\" style=\" text-align: right; border: 1px solid black;\"> ";
            // line 163
            echo twig_escape_filter($this->env, (isset($context["restant"]) ? $context["restant"] : $this->getContext($context, "restant")), "html", null, true);
            echo " €</td>
                    </tr>
                
                
                ";
        }
        // line 168
        echo "        </table>
                
                <p style=\"margin-left:250px;\">Siret 824 661 292 R.C.S. Caen</p>
                
                <p style=\"margin-left:100px;\">
                    Veuillez établir les chèques à l'ordre de <strong>Couleurs de Fête</strong><br/><br/>
                    Non assujetti à la TVA.<br/><br/>
                    <strong>Avec mes remerciements.</strong><br/><br/>
                </p> 
                ";
        // line 177
        if (((isset($context["document"]) ? $context["document"] : $this->getContext($context, "document")) == "Devis")) {
            // line 178
            echo "                    <div style=\"width:250px; padding-bottom:80px; margin-left: 420px; text-align:center; border:solid black 1px;\"><strong>Bon pour accord</strong></div>
                ";
        }
        // line 180
        echo "         
    </div>
</page> ";
        
        $__internal_ac34a08f25c8d42e30b5f730c9f12ddc247b691f8793af581829dc4c5f456b83->leave($__internal_ac34a08f25c8d42e30b5f730c9f12ddc247b691f8793af581829dc4c5f456b83_prof);

    }

    public function getTemplateName()
    {
        return "commande/facture.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  339 => 180,  335 => 178,  333 => 177,  322 => 168,  314 => 163,  307 => 158,  305 => 157,  298 => 152,  292 => 150,  288 => 148,  286 => 147,  279 => 142,  277 => 141,  272 => 139,  265 => 134,  263 => 133,  256 => 129,  250 => 125,  247 => 124,  245 => 123,  239 => 120,  232 => 115,  227 => 112,  225 => 111,  204 => 92,  202 => 91,  197 => 88,  191 => 87,  184 => 84,  181 => 83,  179 => 82,  174 => 80,  170 => 79,  166 => 78,  163 => 77,  160 => 76,  156 => 75,  153 => 74,  147 => 73,  140 => 70,  137 => 69,  135 => 68,  130 => 66,  126 => 65,  122 => 64,  119 => 63,  116 => 62,  112 => 61,  108 => 59,  106 => 58,  85 => 42,  75 => 35,  71 => 34,  65 => 31,  59 => 30,  53 => 27,  42 => 19,  22 => 1,);
    }
}
/* <page style="margin-left: 150px;"> */
/*     <page_header> */
/*        <link href="/vendor/css/bootstrap.min.css" rel="stylesheet">*/
/*        <link href="/vendor/css/bootstrap-theme.min.css" rel="stylesheet">     */
/*        <link href="/css/facture.css" rel="stylesheet">*/
/*     </page_header> */
/* */
/*     */
/*    */
/*     <div class="corp" style="*/
/*          margin-left: 50px;*/
/*          margin-right: 50px;*/
/*          margin-top: 40px;*/
/*          */
/*     ">*/
/*         */
/*         <img src="./images/cdf.png" width="160" height="100" alt="caré" /><br/>*/
/*         */
/*         <strong style="margin-left: 495px; font-size: 22px;">{{commande.getTypeEvenement()}}</strong>*/
/*         */
/*         <p><em>Décoratrice évènementiel</em></p>*/
/*         <p>*/
/*             SAS Couleurs de Fête<br/>*/
/*             7 rue Alfred Kastler<br/>*/
/*             14000 Caen<br/>*/
/*             Téléphone: 06 89 47 02 19<br/>*/
/*             www.couleursdefete.fr<span style="margin-left: 374px;">{{commande.getDate()|date('d/m/Y')}}</span><br/>*/
/*         </p>*/
/*         */
/*         <strong><u>A l'attention de :</u></strong> {{commande.getClient.getNom()}} {{commande.getClient.getPrenom()}} <br/>*/
/*         <span style="margin-left: 110px;">{{commande.getClient.getAdresse()}}</span><br/>*/
/*         */
/*         <span style="margin-left: 510px;">Objet :</span><br/>*/
/*         <span style="margin-left: 508px;"> Mariage le {{commande.getDateEvenement()|date('d/m/Y')}}</span><br/>*/
/*         <span style="margin-left: 508px;"> {{commande.getPartenaire()}}</span>*/
/*         */
/*         */
/*         <br/>*/
/*         <br/>*/
/*         */
/*         */
/*         <p><strong style="margin-left: 510px;">{{document|upper}} N° {{commande.getId()}}</strong></p>*/
/*         */
/*         <p> <strong>Demande de location de matériel pour votre évènement</strong></p>*/
/*         */
/*        */
/* */
/*         <!-- TABLE ARTICLE -->*/
/*         <table style="border: solid black 1px;  width:600px;">*/
/* */
/*                 <tr>*/
/*                     <th style="width: 400px;  border: solid black 2px; text-align:center;"> Designation </th>*/
/*                     <th style="border: solid black 2px;"> Nombre </th>*/
/*                     <th style="border: solid black 2px;"> Montant unitaire</th>*/
/*                     <th style="border: solid black 2px;"> Montant TTC </th>*/
/*                 </tr>*/
/* */
/*                 {% set total = 0 %}*/
/*                 */
/* */
/*                 {%for commandeArticle in commandesArticles%}*/
/*                     {% if(commandeArticle.getCommande() == commande)%}*/
/*                     <tr>*/
/*                         <td style="width: 400px;"> {{commandeArticle.getArticle()}} </td>*/
/*                         <td style="text-align: right;"> {{commandeArticle.getQuantite()}} </td>*/
/*                         <td style="text-align: right;"> {{commandeArticle.getArticle().getPrix()}} €</td>*/
/* */
/*                         {% set compteArticle = commandeArticle.getArticle.getPrix()*commandeArticle.getQuantite() %}*/
/*                         {% set total = total+compteArticle %}*/
/*                         <td style="text-align: right;"> {{compteArticle}} €</td>*/
/*                     </tr>*/
/*                     {% endif%}*/
/*                 {%endfor%}*/
/*                 */
/*                 {%for commandeLot in commandesLot%}*/
/*                     {% if(commandeLot.getCommande() == commande)%}*/
/*                     <tr>*/
/*                         <td style="width: 400px;"> {{commandeLot.getLot()}} </td>*/
/*                         <td style="text-align: right;"> {{commandeLot.getQuantite()}} </td>*/
/*                         <td style="text-align: right;"> {{commandeLot.getLot().getPrix()}} €</td>*/
/* */
/*                         {% set compteArticle = commandeLot.getLot().getPrix()*commandeLot.getQuantite() %}*/
/*                         {% set total = total+compteArticle %}*/
/*                         <td style="text-align: right;"> {{compteArticle}} €</td>*/
/*                     </tr>*/
/*                     {% endif%}*/
/*                 {%endfor%}*/
/*                 */
/*                 <tr><td><br/></td><td></td><td></td><td></td></tr> */
/*                 */
/*                 {% if(document == "Devis")%}*/
/*                     <tr style="margin-top: 100px;">*/
/*                         <td style="width: 400px;">*/
/*                             Afin de valider votre réservation, il vous est demandé un acompte représentant 40 % de la commande totale.<br/>*/
/* */
/*                             Une caution par chèque vous sera demandée lors de l'enlevement mais NON ENCAISSEE.*/
/*                         </td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                     */
/*                     <tr>*/
/*                         <td style="width: 400px;">*/
/*                             Devis valable 1 mois.*/
/*                         </td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                         <td></td>*/
/*                     </tr>*/
/*                 {% elseif(document == "Facture") %}*/
/*                     */
/*                     */
/*                 {% endif %}*/
/*                 <tr><td><br/></td><td></td><td></td><td></td></tr>*/
/*                 <tr>*/
/*                     <td style="width: 400px; text-align: right;">*/
/*                         TOTAL TTC*/
/*                     </td>*/
/*                     <td colspan="3" style=" text-align: right; border: 1px solid black;"> {{total}} €</td>*/
/*                 </tr>*/
/*                 */
/*                 {% if(document == "Devis")%}*/
/*                     {% set acompteLogique = total*0.40 %}*/
/*                     <tr>*/
/*                         <td style="width: 400px; text-align: right;">*/
/*                             <strong>Acompte:</strong>*/
/*                         </td>*/
/*                         <td colspan="3" style=" text-align: right; border: 1px solid black;"> {{acompteLogique}} €</td>*/
/*                     </tr>*/
/*                 */
/*                     */
/*                     {% set restant = total-acompteLogique %}*/
/*                 */
/*                     <tr>*/
/*                         <td style="width: 400px; text-align: right;">*/
/*                             <strong>Solde restant:</strong>*/
/*                         </td>*/
/*                         <td colspan="3" style=" text-align: right; border: 1px solid black;"> {{restant}} €</td>*/
/*                     </tr>*/
/*                 {% elseif(document == "Facture") %}*/
/*                     <tr>*/
/*                         <td style="width: 400px; text-align: right;">*/
/*                             <strong>Acompte versé:</strong>*/
/*                         </td>*/
/*                         <td colspan="3" style=" text-align: right; border: 1px solid black;">*/
/*                             {% if(commande.getAcompte() == 0)%}*/
/*                                 0 €*/
/*                             {% else %}*/
/*                                 {{commande.getAcompte()}} €*/
/*                             {% endif %}*/
/*                             */
/*                         </td>*/
/*                     </tr>*/
/*                 */
/*                     */
/*                     {% set restant = total-commande.getAcompte() %}*/
/*                 */
/*                     <tr>*/
/*                         <td style="width: 400px; text-align: right;">*/
/*                             <strong>Solde restant:</strong>*/
/*                         </td>*/
/*                         <td colspan="3" style=" text-align: right; border: 1px solid black;"> {{restant}} €</td>*/
/*                     </tr>*/
/*                 */
/*                 */
/*                 {% endif %}*/
/*         </table>*/
/*                 */
/*                 <p style="margin-left:250px;">Siret 824 661 292 R.C.S. Caen</p>*/
/*                 */
/*                 <p style="margin-left:100px;">*/
/*                     Veuillez établir les chèques à l'ordre de <strong>Couleurs de Fête</strong><br/><br/>*/
/*                     Non assujetti à la TVA.<br/><br/>*/
/*                     <strong>Avec mes remerciements.</strong><br/><br/>*/
/*                 </p> */
/*                 {% if(document == "Devis")%}*/
/*                     <div style="width:250px; padding-bottom:80px; margin-left: 420px; text-align:center; border:solid black 1px;"><strong>Bon pour accord</strong></div>*/
/*                 {% endif %}*/
/*          */
/*     </div>*/
/* </page> */
