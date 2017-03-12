<?php

/* vitrine/prestation.html.twig */
class __TwigTemplate_ba5787d18278d2256a1ecc246ae4eb3dfdeb7b72591dc9cd8194a29148e17fbc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/prestation.html.twig", 1);
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
        $__internal_ebfa9555167b125f0be9043fca2675260dd2ead7ac04d0d54f167f2f8c0e5091 = $this->env->getExtension("native_profiler");
        $__internal_ebfa9555167b125f0be9043fca2675260dd2ead7ac04d0d54f167f2f8c0e5091->enter($__internal_ebfa9555167b125f0be9043fca2675260dd2ead7ac04d0d54f167f2f8c0e5091_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/prestation.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ebfa9555167b125f0be9043fca2675260dd2ead7ac04d0d54f167f2f8c0e5091->leave($__internal_ebfa9555167b125f0be9043fca2675260dd2ead7ac04d0d54f167f2f8c0e5091_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8ef06479125349f9d69fe9a55eb99e05055cf01f8fa5b646409151c774c5ab27 = $this->env->getExtension("native_profiler");
        $__internal_8ef06479125349f9d69fe9a55eb99e05055cf01f8fa5b646409151c774c5ab27->enter($__internal_8ef06479125349f9d69fe9a55eb99e05055cf01f8fa5b646409151c774c5ab27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_8ef06479125349f9d69fe9a55eb99e05055cf01f8fa5b646409151c774c5ab27->leave($__internal_8ef06479125349f9d69fe9a55eb99e05055cf01f8fa5b646409151c774c5ab27_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_45ccfcaf5df35097de84ac1f39b0206fd9e2603426d8d3161d847e1d081d4ecf = $this->env->getExtension("native_profiler");
        $__internal_45ccfcaf5df35097de84ac1f39b0206fd9e2603426d8d3161d847e1d081d4ecf->enter($__internal_45ccfcaf5df35097de84ac1f39b0206fd9e2603426d8d3161d847e1d081d4ecf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "
    <h1>Nouveauté</h1>

    <p>Couleurs de Fête vous propose des Janvier 2017<br/>

        <span class=\"glyphicon glyphicon-arrow-right\"></span> Le Coaching Décorations Festives et Personnalisées mais également en Home déco.<br/>
        <span class=\"glyphicon glyphicon-arrow-right\"></span> Des Ateliers Conseils qui s'adressent à tous ceux qui souhaitent réaliser eux-mêmes la décoration de leur évènement mais aussi pour leur intérieur.<br/>
    </p>


    <ul>
        <li>Pack Autonomie: Location de matériel</li>
        <li>Pack Waouh: Création sur mesure et location de matériel</li>
        <li>Pack \"Rêve éveillé\": Création-location de matériel et mise en place</li>
    </ul>

    Je vous écoute et je m'occupe de tout: la salle sera à l'image de vôtre rêve</p>

    <div class='jumbotron rows'>

        <h3>Entreprises je vous propose :</h3>
        <br/>

        <ul>
            <li>Pack Arbre de Noël</li>
            <li>Pack Célébration-objectif atteint</li>
            <li>Pack \"Motivation\"</li>
            <li>Pack Médaille du travail</li>
            <li>Pack \"Surprise\"</li>
        </ul>

    </div>


            <!--<h1>Prestation</h1>

            <p>Vous rêvez d'une décoration élégante qui reflète votre personnalité pour vos espaces de réception.</p>

            Je vous propose:
            <ul>
                <li>un forfait simple qui comprend un centre de table, lien ou rond de serviette- porte-prénom et/ou dragées- menus sur support- Urne</li>

                <li>un forfait Confort ZEN:  location du matériel et mise en place de l'habillage des chaises incluant la décoration de vos tables nappage -centre de table- plan de table personnalisé avec rappel sur vos tables.</li>

                <li>Un forfait Confort Intens: incluant location du matériel pour salle de réception ainsi que la cérémonie laïque- mise en place - création personnalisée sur la décoration de votre réception- éclairage ambiance-</li>
            
            </ul>-->
            
            <!--<h1>Créations personnalisées</h1>

            <p>Christine vous propose un forfait de Conseil/Coaching. Vous n’avez pas d’idées pour la décoration de votre évènement, couleurs, thèmes….
            ou au contraire vous avez l’idée mais vous ne savez pas comment vous y prendre. 
            Elle peut vous aider dans la conception.</p>

            <ul>
                    <li>Créations personnalisées selon le thème</li>
                    <li>Plan de table original</li>
                    <li>Personnalisations de photophores menu</li>
                    <li>Décoration de table</li>
            </ul>-->

            <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                  <li data-target='#myCarouel' data-slide-to='1'></li>
                  <li data-target='#myCarousel' data-slide-to='2'></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                    <img src='";
        // line 78
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Prestation1.jpeg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                  <div class='item'>
                    <img src='";
        // line 82
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Prestation2.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                  <div class='item'>
                    <img src='";
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Prestation3.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>
                  
                </div>

                <!-- Left and right controls -->
                <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>
                  <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>
                  <span class='sr-only'>Previous</span>
                </a>
                <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>
                  <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>
                  <span class='sr-only'>Next</span>
                </a>
              </div>
        
";
        
        $__internal_45ccfcaf5df35097de84ac1f39b0206fd9e2603426d8d3161d847e1d081d4ecf->leave($__internal_45ccfcaf5df35097de84ac1f39b0206fd9e2603426d8d3161d847e1d081d4ecf_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/prestation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  141 => 86,  134 => 82,  127 => 78,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/* */
/*     <h1>Nouveauté</h1>*/
/* */
/*     <p>Couleurs de Fête vous propose des Janvier 2017<br/>*/
/* */
/*         <span class="glyphicon glyphicon-arrow-right"></span> Le Coaching Décorations Festives et Personnalisées mais également en Home déco.<br/>*/
/*         <span class="glyphicon glyphicon-arrow-right"></span> Des Ateliers Conseils qui s'adressent à tous ceux qui souhaitent réaliser eux-mêmes la décoration de leur évènement mais aussi pour leur intérieur.<br/>*/
/*     </p>*/
/* */
/* */
/*     <ul>*/
/*         <li>Pack Autonomie: Location de matériel</li>*/
/*         <li>Pack Waouh: Création sur mesure et location de matériel</li>*/
/*         <li>Pack "Rêve éveillé": Création-location de matériel et mise en place</li>*/
/*     </ul>*/
/* */
/*     Je vous écoute et je m'occupe de tout: la salle sera à l'image de vôtre rêve</p>*/
/* */
/*     <div class='jumbotron rows'>*/
/* */
/*         <h3>Entreprises je vous propose :</h3>*/
/*         <br/>*/
/* */
/*         <ul>*/
/*             <li>Pack Arbre de Noël</li>*/
/*             <li>Pack Célébration-objectif atteint</li>*/
/*             <li>Pack "Motivation"</li>*/
/*             <li>Pack Médaille du travail</li>*/
/*             <li>Pack "Surprise"</li>*/
/*         </ul>*/
/* */
/*     </div>*/
/* */
/* */
/*             <!--<h1>Prestation</h1>*/
/* */
/*             <p>Vous rêvez d'une décoration élégante qui reflète votre personnalité pour vos espaces de réception.</p>*/
/* */
/*             Je vous propose:*/
/*             <ul>*/
/*                 <li>un forfait simple qui comprend un centre de table, lien ou rond de serviette- porte-prénom et/ou dragées- menus sur support- Urne</li>*/
/* */
/*                 <li>un forfait Confort ZEN:  location du matériel et mise en place de l'habillage des chaises incluant la décoration de vos tables nappage -centre de table- plan de table personnalisé avec rappel sur vos tables.</li>*/
/* */
/*                 <li>Un forfait Confort Intens: incluant location du matériel pour salle de réception ainsi que la cérémonie laïque- mise en place - création personnalisée sur la décoration de votre réception- éclairage ambiance-</li>*/
/*             */
/*             </ul>-->*/
/*             */
/*             <!--<h1>Créations personnalisées</h1>*/
/* */
/*             <p>Christine vous propose un forfait de Conseil/Coaching. Vous n’avez pas d’idées pour la décoration de votre évènement, couleurs, thèmes….*/
/*             ou au contraire vous avez l’idée mais vous ne savez pas comment vous y prendre. */
/*             Elle peut vous aider dans la conception.</p>*/
/* */
/*             <ul>*/
/*                     <li>Créations personnalisées selon le thème</li>*/
/*                     <li>Plan de table original</li>*/
/*                     <li>Personnalisations de photophores menu</li>*/
/*                     <li>Décoration de table</li>*/
/*             </ul>-->*/
/* */
/*             <div id='myCarousel' class='carousel slide' data-ride='carousel'>*/
/*                 <!-- Indicators -->*/
/*                 <ol class='carousel-indicators'>*/
/*                   <li data-target='#myCarousel' data-slide-to='0' class='active'></li>*/
/*                   <li data-target='#myCarouel' data-slide-to='1'></li>*/
/*                   <li data-target='#myCarousel' data-slide-to='2'></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class='carousel-inner' role='listbox'>*/
/*                   <div class='item active'>*/
/*                     <img src='{{asset('images/Prestation1.jpeg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                   <div class='item'>*/
/*                     <img src='{{asset('images/Prestation2.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                   <div class='item'>*/
/*                     <img src='{{asset('images/Prestation3.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/*                   */
/*                 </div>*/
/* */
/*                 <!-- Left and right controls -->*/
/*                 <a class='left carousel-control' href='#myCarousel' role='button' data-slide='prev'>*/
/*                   <span class='glyphicon glyphicon-chevron-left' aria-hidden='true'></span>*/
/*                   <span class='sr-only'>Previous</span>*/
/*                 </a>*/
/*                 <a class='right carousel-control' href='#myCarousel' role='button' data-slide='next'>*/
/*                   <span class='glyphicon glyphicon-chevron-right' aria-hidden='true'></span>*/
/*                   <span class='sr-only'>Next</span>*/
/*                 </a>*/
/*               </div>*/
/*         */
/* {% endblock %}*/
/* */
