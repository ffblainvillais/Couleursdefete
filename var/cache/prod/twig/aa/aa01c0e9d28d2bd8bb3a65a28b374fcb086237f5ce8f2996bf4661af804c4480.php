<?php

/* baseVitrine.html.twig */
class __TwigTemplate_c3e9212410201518a6d7e9fc2c89f31dc84233cca71c25e4ff4171444cb009f8 extends Twig_Template
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
        $__internal_53c48e7ce2aabd2a20af49eb4092e83245c9a340e8657899a17f15783d91f117 = $this->env->getExtension("native_profiler");
        $__internal_53c48e7ce2aabd2a20af49eb4092e83245c9a340e8657899a17f15783d91f117->enter($__internal_53c48e7ce2aabd2a20af49eb4092e83245c9a340e8657899a17f15783d91f117_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "baseVitrine.html.twig"));

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
        <ul>
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
        </ul>
        <p class=\"texteCentre\">Siège: Couleurs de Fête -6 rue du 7ème Bataillon- 14970 Bénouville</p>
    </footer>

        ";
        // line 97
        $this->displayBlock('javascripts', $context, $blocks);
        // line 119
        echo "        
    </body>
</html>
";
        
        $__internal_53c48e7ce2aabd2a20af49eb4092e83245c9a340e8657899a17f15783d91f117->leave($__internal_53c48e7ce2aabd2a20af49eb4092e83245c9a340e8657899a17f15783d91f117_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_51f0103f5b91450e3e1af463e58b150c405d942a87624f3c200983910c2ecde6 = $this->env->getExtension("native_profiler");
        $__internal_51f0103f5b91450e3e1af463e58b150c405d942a87624f3c200983910c2ecde6->enter($__internal_51f0103f5b91450e3e1af463e58b150c405d942a87624f3c200983910c2ecde6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_51f0103f5b91450e3e1af463e58b150c405d942a87624f3c200983910c2ecde6->leave($__internal_51f0103f5b91450e3e1af463e58b150c405d942a87624f3c200983910c2ecde6_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_eadaab099ee5bfceff67e74862981f5e5c646eab9f8968aba25efecfa6c94994 = $this->env->getExtension("native_profiler");
        $__internal_eadaab099ee5bfceff67e74862981f5e5c646eab9f8968aba25efecfa6c94994->enter($__internal_eadaab099ee5bfceff67e74862981f5e5c646eab9f8968aba25efecfa6c94994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_eadaab099ee5bfceff67e74862981f5e5c646eab9f8968aba25efecfa6c94994->leave($__internal_eadaab099ee5bfceff67e74862981f5e5c646eab9f8968aba25efecfa6c94994_prof);

    }

    // line 83
    public function block_body($context, array $blocks = array())
    {
        $__internal_9800120fdeb69596e716e156d485b4b3b234f3e7bbbb6dd0518b20c3dc8bf2cf = $this->env->getExtension("native_profiler");
        $__internal_9800120fdeb69596e716e156d485b4b3b234f3e7bbbb6dd0518b20c3dc8bf2cf->enter($__internal_9800120fdeb69596e716e156d485b4b3b234f3e7bbbb6dd0518b20c3dc8bf2cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_9800120fdeb69596e716e156d485b4b3b234f3e7bbbb6dd0518b20c3dc8bf2cf->leave($__internal_9800120fdeb69596e716e156d485b4b3b234f3e7bbbb6dd0518b20c3dc8bf2cf_prof);

    }

    // line 97
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c37f453893e6057350dfacdc60fdfc32cb05d6663316079dba2cbb59a895b25b = $this->env->getExtension("native_profiler");
        $__internal_c37f453893e6057350dfacdc60fdfc32cb05d6663316079dba2cbb59a895b25b->enter($__internal_c37f453893e6057350dfacdc60fdfc32cb05d6663316079dba2cbb59a895b25b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 98
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 99
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/unicaen.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 101
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 102
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.popconfirm.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 103
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
        
        $__internal_c37f453893e6057350dfacdc60fdfc32cb05d6663316079dba2cbb59a895b25b->leave($__internal_c37f453893e6057350dfacdc60fdfc32cb05d6663316079dba2cbb59a895b25b_prof);

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
        return array (  261 => 103,  257 => 102,  253 => 101,  249 => 100,  245 => 99,  240 => 98,  234 => 97,  223 => 83,  214 => 9,  210 => 8,  205 => 7,  199 => 6,  187 => 5,  177 => 119,  175 => 97,  167 => 92,  163 => 91,  154 => 84,  152 => 83,  145 => 78,  139 => 76,  131 => 74,  129 => 73,  123 => 70,  119 => 69,  115 => 68,  111 => 67,  107 => 66,  103 => 65,  72 => 37,  58 => 26,  41 => 12,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
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
/*         <ul>*/
/*                 <li><strong>Christine Lelong</strong></li>*/
/*                 <li><strong>06 89 47 02 19</strong></li>*/
/*                 <li><a href="https://www.facebook.com/couleursdefete.free.fr/?fref=ts"><img src="{{asset('images/facebook.png')}}" class="icone"/></a></li>*/
/*                 <li><a href="https://www.linkedin.com/in/christine-lelong-9b79b6104?authType=NAME_SEARCH&authToken=NyKZ&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A444405019%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1469533345425%2Ctas%3Achristin"><img src="{{asset('images/linkedin.png')}}" class="icone"/></a></li>*/
/*         </ul>*/
/*         <p class="texteCentre">Siège: Couleurs de Fête -6 rue du 7ème Bataillon- 14970 Bénouville</p>*/
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
