<?php

/* index/index.html.twig */
class __TwigTemplate_8f0e43cb3ca14a9ab8ad69a8aba9ea1ed3af5da34473d26722ce37f01c449a06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "index/index.html.twig", 1);
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
        $__internal_12907ffa0f63f5fec2f172a9fa43e594b38b6254ca7516182cb69ac71325e204 = $this->env->getExtension("native_profiler");
        $__internal_12907ffa0f63f5fec2f172a9fa43e594b38b6254ca7516182cb69ac71325e204->enter($__internal_12907ffa0f63f5fec2f172a9fa43e594b38b6254ca7516182cb69ac71325e204_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12907ffa0f63f5fec2f172a9fa43e594b38b6254ca7516182cb69ac71325e204->leave($__internal_12907ffa0f63f5fec2f172a9fa43e594b38b6254ca7516182cb69ac71325e204_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2b64cb7f059f6544899e0cdac660f74bb4d02ebd2a5f094bfd9e3e1bf354b8bf = $this->env->getExtension("native_profiler");
        $__internal_2b64cb7f059f6544899e0cdac660f74bb4d02ebd2a5f094bfd9e3e1bf354b8bf->enter($__internal_2b64cb7f059f6544899e0cdac660f74bb4d02ebd2a5f094bfd9e3e1bf354b8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    
    <h2> <strong>A</strong>pplication de <strong>G</strong>estion <strong>C</strong>ommerciale </h2>
        <p>Bienvenue dans l'application de gestion commerciale de Couleurs de Fête
            
        ";
        // line 8
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()) == false)) {
            // line 9
            echo "            <a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\" class=\"btn btn-success\">Connectez vous !</a>
        ";
        } else {
            // line 11
            echo "            <br/>
            <br/>
            <a href=\"";
            // line 13
            echo $this->env->getExtension('routing')->getPath("fos_user_change_password");
            echo "\" class=\"btn btn-primary\">Changer mot de passe</a></p>
        
            <h2>Mises à jour de l'application</h2>
            
            
            <h4><strong>Le 12/10/16 :</strong></h4>
            <ul>
                <li>La création/modification/suppression de \"Lots d'artcle\" est pris en charge (cependant l'ajout de lot dans une commande sera effectué demain) </li>
                <li>Une pagination des articles à été réalisé, à raison de 10 articles par pages </li>
            </ul>
            
            
            <h4><strong>Le 9/10/16 :</strong></h4>
            <ul>
                <li>La photo demandée par mail à été ajouté  l'album</li>
                <li>Resolution du probleme de la page partenaire :
                    <ul>
                        <li>Les adresse des sites des partenaire seront sous la forme www.sitedupartenaire.fr (.com ou autre...)</li>
                        <li>Si un partenaire n'a pas de site internet, un mail peut-etre mis à la place.</li>
                        <li>Si une image n'est pas fourni pour un partenaire, le lien de son site internet sera sous la forme \"site internet disponile ICI\"</li>
                    </ul>
                </li>
                <li>L'ancien site couleursdefete.free.fr pointe désormais vers couleursdefete.fr</li>
            </ul>
            
            
            <h4><strong>Le 5/10/16 :</strong></h4>
            <ul>
                <li>Les articles sont désormais triés par ordre alphabétique</li>
                <li>Un partenaire peut etre lié à une commande </li>
                <li>Il apparait désormais sur les devis/factures 
                    <ul>
                        <li>l'adresse du/de la client(e)</li>
                        <li>la date de l'évenement</li>
                        <li>le lieu si un partenaire est lié a la commande</li>
                    </ul>
                </li>
                <li>
                    Quand un ou plusieurs articles sont ajoutés à une commande avec l'action \"Location\" il ne sont désormais <strong>PLUS RETIRES DU STOCK</strong> à la place un lien apparait \"Depart des articles\" sur lequel il faut cliquer lorsque les articles vont etre mis en place (quelques jours avant l'évenement).<br/>
                    Une fois que les articles ont étés déclarés partis, à la place de \"Départ des artices\" il y à \"Retour des articles\" à cliquer quand le matériel est récupéré apres l'évenement. 
                </li>
            </ul>
            
            
            </ul>
        
        ";
        }
        // line 60
        echo "        
        
        
        
";
        
        $__internal_2b64cb7f059f6544899e0cdac660f74bb4d02ebd2a5f094bfd9e3e1bf354b8bf->leave($__internal_2b64cb7f059f6544899e0cdac660f74bb4d02ebd2a5f094bfd9e3e1bf354b8bf_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 60,  58 => 13,  54 => 11,  48 => 9,  46 => 8,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     */
/*     <h2> <strong>A</strong>pplication de <strong>G</strong>estion <strong>C</strong>ommerciale </h2>*/
/*         <p>Bienvenue dans l'application de gestion commerciale de Couleurs de Fête*/
/*             */
/*         {% if(app.user == false) %}*/
/*             <a href="{{ path('fos_user_security_login') }}" class="btn btn-success">Connectez vous !</a>*/
/*         {% else %}*/
/*             <br/>*/
/*             <br/>*/
/*             <a href="{{ path('fos_user_change_password') }}" class="btn btn-primary">Changer mot de passe</a></p>*/
/*         */
/*             <h2>Mises à jour de l'application</h2>*/
/*             */
/*             */
/*             <h4><strong>Le 12/10/16 :</strong></h4>*/
/*             <ul>*/
/*                 <li>La création/modification/suppression de "Lots d'artcle" est pris en charge (cependant l'ajout de lot dans une commande sera effectué demain) </li>*/
/*                 <li>Une pagination des articles à été réalisé, à raison de 10 articles par pages </li>*/
/*             </ul>*/
/*             */
/*             */
/*             <h4><strong>Le 9/10/16 :</strong></h4>*/
/*             <ul>*/
/*                 <li>La photo demandée par mail à été ajouté  l'album</li>*/
/*                 <li>Resolution du probleme de la page partenaire :*/
/*                     <ul>*/
/*                         <li>Les adresse des sites des partenaire seront sous la forme www.sitedupartenaire.fr (.com ou autre...)</li>*/
/*                         <li>Si un partenaire n'a pas de site internet, un mail peut-etre mis à la place.</li>*/
/*                         <li>Si une image n'est pas fourni pour un partenaire, le lien de son site internet sera sous la forme "site internet disponile ICI"</li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>L'ancien site couleursdefete.free.fr pointe désormais vers couleursdefete.fr</li>*/
/*             </ul>*/
/*             */
/*             */
/*             <h4><strong>Le 5/10/16 :</strong></h4>*/
/*             <ul>*/
/*                 <li>Les articles sont désormais triés par ordre alphabétique</li>*/
/*                 <li>Un partenaire peut etre lié à une commande </li>*/
/*                 <li>Il apparait désormais sur les devis/factures */
/*                     <ul>*/
/*                         <li>l'adresse du/de la client(e)</li>*/
/*                         <li>la date de l'évenement</li>*/
/*                         <li>le lieu si un partenaire est lié a la commande</li>*/
/*                     </ul>*/
/*                 </li>*/
/*                 <li>*/
/*                     Quand un ou plusieurs articles sont ajoutés à une commande avec l'action "Location" il ne sont désormais <strong>PLUS RETIRES DU STOCK</strong> à la place un lien apparait "Depart des articles" sur lequel il faut cliquer lorsque les articles vont etre mis en place (quelques jours avant l'évenement).<br/>*/
/*                     Une fois que les articles ont étés déclarés partis, à la place de "Départ des artices" il y à "Retour des articles" à cliquer quand le matériel est récupéré apres l'évenement. */
/*                 </li>*/
/*             </ul>*/
/*             */
/*             */
/*             </ul>*/
/*         */
/*         {% endif %}*/
/*         */
/*         */
/*         */
/*         */
/* {% endblock %}*/
/* */
