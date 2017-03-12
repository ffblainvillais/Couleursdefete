<?php

/* vitrine/location.html.twig */
class __TwigTemplate_31302baac4c4280c41bd155285a444a3a64d772dc94360810b9fb5c97beeded3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/location.html.twig", 1);
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
        $__internal_5db1d8e94810720dd157f334a787136e01d734b28db030a4755155a7b15a1b3f = $this->env->getExtension("native_profiler");
        $__internal_5db1d8e94810720dd157f334a787136e01d734b28db030a4755155a7b15a1b3f->enter($__internal_5db1d8e94810720dd157f334a787136e01d734b28db030a4755155a7b15a1b3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/location.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5db1d8e94810720dd157f334a787136e01d734b28db030a4755155a7b15a1b3f->leave($__internal_5db1d8e94810720dd157f334a787136e01d734b28db030a4755155a7b15a1b3f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_68027f2df75d905bd1d052fcb0c19feedef9503aabc379e5b0ab92d2eb4f2a14 = $this->env->getExtension("native_profiler");
        $__internal_68027f2df75d905bd1d052fcb0c19feedef9503aabc379e5b0ab92d2eb4f2a14->enter($__internal_68027f2df75d905bd1d052fcb0c19feedef9503aabc379e5b0ab92d2eb4f2a14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_68027f2df75d905bd1d052fcb0c19feedef9503aabc379e5b0ab92d2eb4f2a14->leave($__internal_68027f2df75d905bd1d052fcb0c19feedef9503aabc379e5b0ab92d2eb4f2a14_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_36de33f530a2bb48ddb761067eb23f8f9a043015af4a8ad4172925f6124af981 = $this->env->getExtension("native_profiler");
        $__internal_36de33f530a2bb48ddb761067eb23f8f9a043015af4a8ad4172925f6124af981->enter($__internal_36de33f530a2bb48ddb761067eb23f8f9a043015af4a8ad4172925f6124af981_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <h1>Location / Devis</h1>

            <p>Je vous propose de louer votre décoration afin de créer vous-même l'ambiance que vous desirez :</p>
            
            <ul>
                <li>Housse de chaise en lycra blanc</li>
                    <li>Ceinturage organza-satin- toile de jute ( choix de couleurs)</li>
                    <li>Chandelier métal argenté 5 branches avec bougies LED 2 hauteurs 55 et 85 cm</li>
                    <li>Chemin de table assorti au ceinturage des chaises</li>
                    <li>Vase martini haut 60 cm- vase boule  haut 35 et 48 cm-vase coupelle diam 30 cm- vase cylindrique  haut 15 et 70 cm</li>
                    <li>Rampe LED pour vase</li>
                    <li>Arche en bois pour cérémonie laïque</li>
                    <li>Mange-debout diam 60 et 80 cm avec housse noires ou blanches</li>
                    <li>Spot projecteur à  LED 18 couleurs pour ambiance salle</li>
                    <li>Malle à photobooth complète avec cadre et paravent</li>
                    <li>Miroir plat pour centre de table diam 35 cm</li>
                    <li>Plan de table originaux avec rappel sur table</li>
                    <li>Urne</li>
                    <li>Bûche bois plate pour centre de table diam 30 cm</li>
                    <li>Set de dessin à colorier avec crayons de couleurs pour les enfants</li>

            </ul>


            <!--<p>Pour les tarifs indiquez les <strong>articles</strong> et les <strong>quantités</strong> que vous souhaitez louer
            sans oublier de communiquer vos coordonnées complètes dans <strong>CONTACT</strong></p>-->

            <div id='myCarousel' class='carousel slide' data-ride='carousel'>
                <!-- Indicators -->
                <ol class='carousel-indicators'>
                  <li data-target='#myCarousel' data-slide-to='0' class='active'></li>
                  <li data-target='#myCarouel' data-slide-to='1'></li>
                  <li data-target='#myCarousel' data-slide-to='2'></li>
                  <li data-target='#myCarousel' data-slide-to='3'></li>
                  <li data-target='#myCarousel' data-slide-to='4'></li>
                  <li data-target='#myCarousel' data-slide-to='5'></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class='carousel-inner' role='listbox'>
                  <div class='item active'>
                    <img src='";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location1.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                  <div class='item'>
                    <img src='";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location2.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                  <div class='item'>
                    <img src='";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location3.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                  <div class='item'>
                    <img src='";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location4.JPG"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                  </div>

                    <div class='item'>
                      <img src='";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location5.jpg"), "html", null, true);
        echo "' alt='Chania' width='460' height='345'>
                    </div>
                    
                    <div class='item'>
                      <img src='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Location6.jpg"), "html", null, true);
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
        
        $__internal_36de33f530a2bb48ddb761067eb23f8f9a043015af4a8ad4172925f6124af981->leave($__internal_36de33f530a2bb48ddb761067eb23f8f9a043015af4a8ad4172925f6124af981_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/location.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 68,  125 => 64,  118 => 60,  111 => 56,  104 => 52,  97 => 48,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/*             <h1>Location / Devis</h1>*/
/* */
/*             <p>Je vous propose de louer votre décoration afin de créer vous-même l'ambiance que vous desirez :</p>*/
/*             */
/*             <ul>*/
/*                 <li>Housse de chaise en lycra blanc</li>*/
/*                     <li>Ceinturage organza-satin- toile de jute ( choix de couleurs)</li>*/
/*                     <li>Chandelier métal argenté 5 branches avec bougies LED 2 hauteurs 55 et 85 cm</li>*/
/*                     <li>Chemin de table assorti au ceinturage des chaises</li>*/
/*                     <li>Vase martini haut 60 cm- vase boule  haut 35 et 48 cm-vase coupelle diam 30 cm- vase cylindrique  haut 15 et 70 cm</li>*/
/*                     <li>Rampe LED pour vase</li>*/
/*                     <li>Arche en bois pour cérémonie laïque</li>*/
/*                     <li>Mange-debout diam 60 et 80 cm avec housse noires ou blanches</li>*/
/*                     <li>Spot projecteur à  LED 18 couleurs pour ambiance salle</li>*/
/*                     <li>Malle à photobooth complète avec cadre et paravent</li>*/
/*                     <li>Miroir plat pour centre de table diam 35 cm</li>*/
/*                     <li>Plan de table originaux avec rappel sur table</li>*/
/*                     <li>Urne</li>*/
/*                     <li>Bûche bois plate pour centre de table diam 30 cm</li>*/
/*                     <li>Set de dessin à colorier avec crayons de couleurs pour les enfants</li>*/
/* */
/*             </ul>*/
/* */
/* */
/*             <!--<p>Pour les tarifs indiquez les <strong>articles</strong> et les <strong>quantités</strong> que vous souhaitez louer*/
/*             sans oublier de communiquer vos coordonnées complètes dans <strong>CONTACT</strong></p>-->*/
/* */
/*             <div id='myCarousel' class='carousel slide' data-ride='carousel'>*/
/*                 <!-- Indicators -->*/
/*                 <ol class='carousel-indicators'>*/
/*                   <li data-target='#myCarousel' data-slide-to='0' class='active'></li>*/
/*                   <li data-target='#myCarouel' data-slide-to='1'></li>*/
/*                   <li data-target='#myCarousel' data-slide-to='2'></li>*/
/*                   <li data-target='#myCarousel' data-slide-to='3'></li>*/
/*                   <li data-target='#myCarousel' data-slide-to='4'></li>*/
/*                   <li data-target='#myCarousel' data-slide-to='5'></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class='carousel-inner' role='listbox'>*/
/*                   <div class='item active'>*/
/*                     <img src='{{asset('images/Location1.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                   <div class='item'>*/
/*                     <img src='{{asset('images/Location2.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                   <div class='item'>*/
/*                     <img src='{{asset('images/Location3.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                   <div class='item'>*/
/*                     <img src='{{asset('images/Location4.JPG')}}' alt='Chania' width='460' height='345'>*/
/*                   </div>*/
/* */
/*                     <div class='item'>*/
/*                       <img src='{{asset('images/Location5.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                     </div>*/
/*                     */
/*                     <div class='item'>*/
/*                       <img src='{{asset('images/Location6.jpg')}}' alt='Chania' width='460' height='345'>*/
/*                     </div>*/
/*                     */
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
