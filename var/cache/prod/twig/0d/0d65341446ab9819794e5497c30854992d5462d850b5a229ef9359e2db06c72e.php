<?php

/* vitrine/album.html.twig */
class __TwigTemplate_8d4e6b896317d8c0c17ef235dd61bb7e3efd8901b9ff214cdf835572b34034a6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/album.html.twig", 1);
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
        $__internal_9c11d43c519ff9b4af24451aa118d1f64035c4f4ee9f80b2882a7bc6fdcaeb59 = $this->env->getExtension("native_profiler");
        $__internal_9c11d43c519ff9b4af24451aa118d1f64035c4f4ee9f80b2882a7bc6fdcaeb59->enter($__internal_9c11d43c519ff9b4af24451aa118d1f64035c4f4ee9f80b2882a7bc6fdcaeb59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/album.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9c11d43c519ff9b4af24451aa118d1f64035c4f4ee9f80b2882a7bc6fdcaeb59->leave($__internal_9c11d43c519ff9b4af24451aa118d1f64035c4f4ee9f80b2882a7bc6fdcaeb59_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3317f3235e365564f216610eb696692909acac1205a8fb029f36d21d81cb0886 = $this->env->getExtension("native_profiler");
        $__internal_3317f3235e365564f216610eb696692909acac1205a8fb029f36d21d81cb0886->enter($__internal_3317f3235e365564f216610eb696692909acac1205a8fb029f36d21d81cb0886_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_3317f3235e365564f216610eb696692909acac1205a8fb029f36d21d81cb0886->leave($__internal_3317f3235e365564f216610eb696692909acac1205a8fb029f36d21d81cb0886_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a51ef47f56159e2d58cf99b15d37037394b5b3f54bbe517dae67f6d1efb6b1a = $this->env->getExtension("native_profiler");
        $__internal_5a51ef47f56159e2d58cf99b15d37037394b5b3f54bbe517dae67f6d1efb6b1a->enter($__internal_5a51ef47f56159e2d58cf99b15d37037394b5b3f54bbe517dae67f6d1efb6b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <h1>Album</h1>

            <div id=\"myCarousel\" class=\"carousel slide\" data-ride=\"carousel\">
                <!-- Indicators -->
                <ol class=\"carousel-indicators\">
                  <li data-target=\"#myCarousel\" data-slide-to=\"0\" class=\"active\"></li>
                  <li data-target=\"#myCarouel\" data-slide-to=\"1\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"2\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"3\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"4\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"5\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"6\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"7\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"8\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"9\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"10\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"11\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"12\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"13\"></li>
                  <li data-target=\"#myCarousel\" data-slide-to=\"14\"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class=\"carousel-inner\" role=\"listbox\">
                  <div class=\"item active\">
                    <img src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album1.JPG"), "html", null, true);
        echo "\" alt=\"Chania\" width=\"460\" height=\"345\">
                  </div>

                  <div class=\"item\">
                    <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album2.JPG"), "html", null, true);
        echo "\" alt=\"Chania\" width=\"460\" height=\"345\">
                  </div>

                  <div class=\"item\">
                    <img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album3.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>

                  <div class=\"item\">
                    <img src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album4.JPG"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album5.JPG"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album6.JPG"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 56
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album7.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 60
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album8.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 64
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album9.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album10.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album11.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 76
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album12.JPG"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 80
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album13.jpg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 84
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album14.JPG"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                  
                  <div class=\"item\">
                    <img src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/Album15.jpeg"), "html", null, true);
        echo "\" alt=\"Flower\" width=\"460\" height=\"345\">
                  </div>
                </div>

                <!-- Left and right controls -->
                <a class=\"left carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"prev\">
                  <span class=\"glyphicon glyphicon-chevron-left\" aria-hidden=\"true\"></span>
                  <span class=\"sr-only\">Previous</span>
                </a>
                <a class=\"right carousel-control\" href=\"#myCarousel\" role=\"button\" data-slide=\"next\">
                  <span class=\"glyphicon glyphicon-chevron-right\" aria-hidden=\"true\"></span>
                  <span class=\"sr-only\">Next</span>
                </a>
              </div>
        
";
        
        $__internal_5a51ef47f56159e2d58cf99b15d37037394b5b3f54bbe517dae67f6d1efb6b1a->leave($__internal_5a51ef47f56159e2d58cf99b15d37037394b5b3f54bbe517dae67f6d1efb6b1a_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/album.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  179 => 88,  172 => 84,  165 => 80,  158 => 76,  151 => 72,  144 => 68,  137 => 64,  130 => 60,  123 => 56,  116 => 52,  109 => 48,  102 => 44,  95 => 40,  88 => 36,  81 => 32,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/*             <h1>Album</h1>*/
/* */
/*             <div id="myCarousel" class="carousel slide" data-ride="carousel">*/
/*                 <!-- Indicators -->*/
/*                 <ol class="carousel-indicators">*/
/*                   <li data-target="#myCarousel" data-slide-to="0" class="active"></li>*/
/*                   <li data-target="#myCarouel" data-slide-to="1"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="2"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="3"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="4"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="5"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="6"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="7"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="8"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="9"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="10"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="11"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="12"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="13"></li>*/
/*                   <li data-target="#myCarousel" data-slide-to="14"></li>*/
/*                 </ol>*/
/* */
/*                 <!-- Wrapper for slides -->*/
/*                 <div class="carousel-inner" role="listbox">*/
/*                   <div class="item active">*/
/*                     <img src="{{asset('images/Album1.JPG')}}" alt="Chania" width="460" height="345">*/
/*                   </div>*/
/* */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album2.JPG')}}" alt="Chania" width="460" height="345">*/
/*                   </div>*/
/* */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album3.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/* */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album4.JPG')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album5.JPG')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album6.JPG')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album7.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album8.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album9.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album10.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album11.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album12.JPG')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album13.jpg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album14.JPG')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                   */
/*                   <div class="item">*/
/*                     <img src="{{asset('images/Album15.jpeg')}}" alt="Flower" width="460" height="345">*/
/*                   </div>*/
/*                 </div>*/
/* */
/*                 <!-- Left and right controls -->*/
/*                 <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">*/
/*                   <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>*/
/*                   <span class="sr-only">Previous</span>*/
/*                 </a>*/
/*                 <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">*/
/*                   <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>*/
/*                   <span class="sr-only">Next</span>*/
/*                 </a>*/
/*               </div>*/
/*         */
/* {% endblock %}*/
/* */
