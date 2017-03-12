<?php

/* baseVitrine.html.twig */
class __TwigTemplate_8945100a21d01cbe73fd8db7b0f30e7c48b724cca01b91af4adc6e999fcb1ff7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_cea2a8332faa1110ef39a2c379cef2b0c933555d988aa812d87bfb155b405b8a = $this->env->getExtension("native_profiler");
        $__internal_cea2a8332faa1110ef39a2c379cef2b0c933555d988aa812d87bfb155b405b8a->enter($__internal_cea2a8332faa1110ef39a2c379cef2b0c933555d988aa812d87bfb155b405b8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseVitrine.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> Couleurs de Fete : ";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        
        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
        
        <meta charset=\"UTF-8\" />
\t<meta name=\"viewport\" content=\"initial-scale=1\" />

        <META NAME=\"Author\" CONTENT=\"Fran�ois Lavieille\">
        <META NAME=\"Language\" CONTENT=\"fr\">
        <META NAME=\"Description\" CONTENT=\"Location housses de chaises pour mariage et autres �v�nements, bapt�me, cousinades, anniversaire..... Un professionnel vous aide � r�aliser et personnaliser votre d�coration de table\">
        <META NAME=\"Keywords\" CONTENT=\"location de housse de chaise, chandeliers, mange-debout, calvados, caen, normandie, f�tes, mariages d�coration, couleurs de fete\">
        <META NAME=\"Robots\" CONTENT=\"all\">

        
        
    </head>
    <body class='";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "environment", array()), "html", null, true);
        echo "'>
        
        <nav class=\"navbar navbar-inverse\">
        <div class=\"container\">
          <div class=\"navbar-header\">
            <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\".navbar-collapse\">
              <span class=\"sr-only\">Toggle navigation</span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
              <span class=\"icon-bar\"></span>
            </button>
            <a class=\"navbar-brand\" href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\">
                <strong>
                    <span class=\"mot\">
                        <span class=\"bleu\">C</span>
                        <span class=\"rose\">o</span>
                        <span class=\"vert\">u</span>
                        <span class=\"jaune\">l</span>
                        <span class=\"bleu\">e</span>
                        <span class=\"rose\">u</span>
                        <span class=\"vert\">r</span>
                        <span class=\"jaune\">s</span> 
                    </span>
                    <span class=\"mot\">
                        <span class=\"bleu\">D</span>
                        <span class=\"rose\">e</span> 
                    </span>
                    <span class=\"mot\">
                        <span class=\"vert\">F</span>
                        <span class=\"jaune\">e</span>
                        <span class=\"bleu\">t</span>
                        <span class=\"rose\">e</span>
                    </span>
                </strong>
            </a>

          </div>
          <div class=\"navbar-collapse collapse\">
              <ul class=\"nav navbar-nav\">
                    <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("contact");
        echo "\">Contact</a></li>
                    <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("album");
        echo "\">Album</a></li>
                    <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("location");
        echo "\">Location/devis</a></li>
                    <li><a href=\"";
        // line 68
        echo $this->env->getExtension('routing')->getPath("prestation");
        echo "\">Prestations artisanales</a></li>
                    <li><a href=\"";
        // line 69
        echo $this->env->getExtension('routing')->getPath("partenaire");
        echo "\">Partenaires</a></li>
                    <li><a href=\"";
        // line 70
        echo $this->env->getExtension('routing')->getPath("temoignage");
        echo "\">Temoignages</a></li>
              </ul>
              <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 73
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 74
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | Se deconnecter</a></li>
                        ";
        } else {
            // line 76
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                        ";
        }
        // line 78
        echo "              </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
    <div id=\"contenu-principal\" class=\"container\">
          ";
        // line 83
        $this->displayBlock('body', $context, $blocks);
        // line 84
        echo "        
        
    </div>
    <footer class=\"container\" id=\"footer\">
\t<ul>
            <li><strong>Christine Lelong</strong></li>
                <li><strong>06 89 47 02 19</strong></li>
                <li><a href=\"https://www.facebook.com/couleursdefete.free.fr/?fref=ts\"><img src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "\" class=\"icone\"/></a></li>
                <li><a href=\"https://www.linkedin.com/in/christine-lelong-9b79b6104?authType=NAME_SEARCH&authToken=NyKZ&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A444405019%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1469533345425%2Ctas%3Achristin\"><img src=\"";
        // line 92
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/linkedin.png"), "html", null, true);
        echo "\" class=\"icone\"/></a></li>
\t</ul>
    </footer>

        ";
        // line 96
        $this->displayBlock('javascripts', $context, $blocks);
        // line 118
        echo "        
    </body>
</html>
";
        
        $__internal_cea2a8332faa1110ef39a2c379cef2b0c933555d988aa812d87bfb155b405b8a->leave($__internal_cea2a8332faa1110ef39a2c379cef2b0c933555d988aa812d87bfb155b405b8a_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_496cf74e17d4c19644647ec49d7f03571c1aa00a88f21c54499aa1a3875280d1 = $this->env->getExtension("native_profiler");
        $__internal_496cf74e17d4c19644647ec49d7f03571c1aa00a88f21c54499aa1a3875280d1->enter($__internal_496cf74e17d4c19644647ec49d7f03571c1aa00a88f21c54499aa1a3875280d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_496cf74e17d4c19644647ec49d7f03571c1aa00a88f21c54499aa1a3875280d1->leave($__internal_496cf74e17d4c19644647ec49d7f03571c1aa00a88f21c54499aa1a3875280d1_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1be16b5fbd078303c18f6ab197ae481315b0589aa7bc4530ef7faf16991d3dc2 = $this->env->getExtension("native_profiler");
        $__internal_1be16b5fbd078303c18f6ab197ae481315b0589aa7bc4530ef7faf16991d3dc2->enter($__internal_1be16b5fbd078303c18f6ab197ae481315b0589aa7bc4530ef7faf16991d3dc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/vitrine.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_1be16b5fbd078303c18f6ab197ae481315b0589aa7bc4530ef7faf16991d3dc2->leave($__internal_1be16b5fbd078303c18f6ab197ae481315b0589aa7bc4530ef7faf16991d3dc2_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_a519d7779cda0943a7ed9b9c3b0909206958e57b8530c2e0e6d8c3b9307bc6e2 = $this->env->getExtension("native_profiler");
        $__internal_a519d7779cda0943a7ed9b9c3b0909206958e57b8530c2e0e6d8c3b9307bc6e2->enter($__internal_a519d7779cda0943a7ed9b9c3b0909206958e57b8530c2e0e6d8c3b9307bc6e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_a519d7779cda0943a7ed9b9c3b0909206958e57b8530c2e0e6d8c3b9307bc6e2->leave($__internal_a519d7779cda0943a7ed9b9c3b0909206958e57b8530c2e0e6d8c3b9307bc6e2_prof);

    }

    // line 96
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_423a01b2a1f2bd479466a6140d2f8c049e59b47245f16e5daa8be3c95f1b14e1 = $this->env->getExtension("native_profiler");
        $__internal_423a01b2a1f2bd479466a6140d2f8c049e59b47245f16e5daa8be3c95f1b14e1->enter($__internal_423a01b2a1f2bd479466a6140d2f8c049e59b47245f16e5daa8be3c95f1b14e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 97
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 98
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/unicaen.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.popconfirm.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/app.js"), "html", null, true);
        echo "'></script>
            <script>
                
               \$(\".popconfirm\").popConfirm();

               \$('[data-toggle=\"popover\"]').popover({
                   placement : 'bottom',
                   /*content: function(){
                        \$.post(\$(this).data('url')).done(function (res) {
                            \$(this).data('content').html(res);
                        });
                    }*/
                });
                
            </script>
        ";
        
        $__internal_423a01b2a1f2bd479466a6140d2f8c049e59b47245f16e5daa8be3c95f1b14e1->leave($__internal_423a01b2a1f2bd479466a6140d2f8c049e59b47245f16e5daa8be3c95f1b14e1_prof);

    }

    public function getTemplateName()
    {
        return "baseVitrine.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  260 => 102,  256 => 101,  252 => 100,  248 => 99,  244 => 98,  239 => 97,  233 => 96,  222 => 83,  213 => 9,  209 => 8,  204 => 7,  198 => 6,  186 => 5,  176 => 118,  174 => 96,  167 => 92,  163 => 91,  154 => 84,  152 => 83,  145 => 78,  139 => 76,  131 => 74,  129 => 73,  123 => 70,  119 => 69,  115 => 68,  111 => 67,  107 => 66,  103 => 65,  72 => 37,  58 => 26,  41 => 12,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title> Couleurs de Fete : {% block title %} {% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{asset('css/vitrine.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap-theme.min.css')}}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*         */
/*         <meta charset="UTF-8" />*/
/* 	<meta name="viewport" content="initial-scale=1" />*/
/* */
/*         <META NAME="Author" CONTENT="Fran�ois Lavieille">*/
/*         <META NAME="Language" CONTENT="fr">*/
/*         <META NAME="Description" CONTENT="Location housses de chaises pour mariage et autres �v�nements, bapt�me, cousinades, anniversaire..... Un professionnel vous aide � r�aliser et personnaliser votre d�coration de table">*/
/*         <META NAME="Keywords" CONTENT="location de housse de chaise, chandeliers, mange-debout, calvados, caen, normandie, f�tes, mariages d�coration, couleurs de fete">*/
/*         <META NAME="Robots" CONTENT="all">*/
/* */
/*         */
/*         */
/*     </head>*/
/*     <body class='{{ app.environment }}'>*/
/*         */
/*         <nav class="navbar navbar-inverse">*/
/*         <div class="container">*/
/*           <div class="navbar-header">*/
/*             <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">*/
/*               <span class="sr-only">Toggle navigation</span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*               <span class="icon-bar"></span>*/
/*             </button>*/
/*             <a class="navbar-brand" href="{{path('homepage')}}">*/
/*                 <strong>*/
/*                     <span class="mot">*/
/*                         <span class="bleu">C</span>*/
/*                         <span class="rose">o</span>*/
/*                         <span class="vert">u</span>*/
/*                         <span class="jaune">l</span>*/
/*                         <span class="bleu">e</span>*/
/*                         <span class="rose">u</span>*/
/*                         <span class="vert">r</span>*/
/*                         <span class="jaune">s</span> */
/*                     </span>*/
/*                     <span class="mot">*/
/*                         <span class="bleu">D</span>*/
/*                         <span class="rose">e</span> */
/*                     </span>*/
/*                     <span class="mot">*/
/*                         <span class="vert">F</span>*/
/*                         <span class="jaune">e</span>*/
/*                         <span class="bleu">t</span>*/
/*                         <span class="rose">e</span>*/
/*                     </span>*/
/*                 </strong>*/
/*             </a>*/
/* */
/*           </div>*/
/*           <div class="navbar-collapse collapse">*/
/*               <ul class="nav navbar-nav">*/
/*                     <li><a href="{{ path('contact') }}">Contact</a></li>*/
/*                     <li><a href="{{ path('album') }}">Album</a></li>*/
/*                     <li><a href="{{ path('location') }}">Location/devis</a></li>*/
/*                     <li><a href="{{ path('prestation') }}">Prestations artisanales</a></li>*/
/*                     <li><a href="{{ path('partenaire') }}">Partenaires</a></li>*/
/*                     <li><a href="{{ path('temoignage') }}">Temoignages</a></li>*/
/*               </ul>*/
/*               <ul class="nav navbar-nav navbar-right">*/
/*                         {% if(app.user) %}*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-user"></span> {{app.user.username}} | Se deconnecter</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ path('fos_user_security_login') }}">Se connecter</a></li>*/
/*                         {% endif %}*/
/*               </ul>*/
/*           </div><!--/.nav-collapse -->*/
/*         </div>*/
/*       </nav>*/
/*     <div id="contenu-principal" class="container">*/
/*           {% block body %}{% endblock %}*/
/*         */
/*         */
/*     </div>*/
/*     <footer class="container" id="footer">*/
/* 	<ul>*/
/*             <li><strong>Christine Lelong</strong></li>*/
/*                 <li><strong>06 89 47 02 19</strong></li>*/
/*                 <li><a href="https://www.facebook.com/couleursdefete.free.fr/?fref=ts"><img src="{{asset('images/facebook.png')}}" class="icone"/></a></li>*/
/*                 <li><a href="https://www.linkedin.com/in/christine-lelong-9b79b6104?authType=NAME_SEARCH&authToken=NyKZ&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A444405019%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1469533345425%2Ctas%3Achristin"><img src="{{asset('images/linkedin.png')}}" class="icone"/></a></li>*/
/* 	</ul>*/
/*     </footer>*/
/* */
/*         {% block javascripts %}*/
/*             <script src='{{asset('js/jquery.min.js')}}'></script>*/
/*             <script src='{{asset('js/jquery-ui.min.js')}}'></script>*/
/*             <script src='{{asset('js/unicaen.js')}}'></script>*/
/*             <script src='{{asset('js/bootstrap.min.js')}}'></script>*/
/*             <script src='{{asset('js/jquery.popconfirm.js')}}'></script>*/
/*             <script src='{{asset('js/app.js')}}'></script>*/
/*             <script>*/
/*                 */
/*                $(".popconfirm").popConfirm();*/
/* */
/*                $('[data-toggle="popover"]').popover({*/
/*                    placement : 'bottom',*/
/*                    /*content: function(){*/
/*                         $.post($(this).data('url')).done(function (res) {*/
/*                             $(this).data('content').html(res);*/
/*                         });*/
/*                     }*//* */
/*                 });*/
/*                 */
/*             </script>*/
/*         {% endblock %}*/
/*         */
/*     </body>*/
/* </html>*/
/* */
