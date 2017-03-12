<?php

/* base.html.twig */
class __TwigTemplate_20ae9757a3cc58aa27a99a928df3d9674380dcf30c61b82b5a44fb50c5fa17ee extends Twig_Template
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
        $__internal_2ca6cd6f769dfcdb9aed16bde7057a785b0bdbda22d90a69043029af2f1036ca = $this->env->getExtension("native_profiler");
        $__internal_2ca6cd6f769dfcdb9aed16bde7057a785b0bdbda22d90a69043029af2f1036ca->enter($__internal_2ca6cd6f769dfcdb9aed16bde7057a785b0bdbda22d90a69043029af2f1036ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title> AGC ";
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
    </head>
    <body class='";
        // line 14
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
        // line 25
        echo $this->env->getExtension('routing')->getPath("application");
        echo "\"><h1>AGC</h1></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        ";
        // line 29
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 30
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("article");
            echo "\">Articles</a></li>
                            <li><a href=\"";
            // line 31
            echo $this->env->getExtension('routing')->getPath("commande");
            echo "\">Commandes</a></li>
                            ";
            // line 32
            if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
                // line 33
                echo "                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("client");
                echo "\">Clients</a></li>
                                <li><a href=\"";
                // line 34
                echo $this->env->getExtension('routing')->getPath("depense");
                echo "\">Dépenses</a></li>
                                <li><a href=\"";
                // line 35
                echo $this->env->getExtension('routing')->getPath("bilan");
                echo "\">Bilan</a></li>
                                <li><a href=\"";
                // line 36
                echo $this->env->getExtension('routing')->getPath("partenaire-appli");
                echo "\">Partenaire</a></li>
                                <li><a href=\"";
                // line 37
                echo $this->env->getExtension('routing')->getPath("gestion-temoignage");
                echo "\">Temoignages</a></li>
                            ";
            }
            // line 39
            echo "                            ";
            if ($this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN")) {
                // line 40
                echo "                                <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("utilisateur");
                echo "\">Utilisateurs</a></li>
                            ";
            }
            // line 42
            echo "                        ";
        }
        // line 43
        echo "

                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 47
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 48
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | Se deconnecter</a></li>
                        ";
        } else {
            // line 50
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">Se connecter</a></li>
                        ";
        }
        // line 52
        echo "                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </nav>
        <div id=\"contenu-principal\" class=\"container\">
            ";
        // line 57
        $this->displayBlock('body', $context, $blocks);
        // line 58
        echo "        </div>
        
        
        <div id='footer' class='container'>
            
        </div>
        ";
        // line 64
        $this->displayBlock('javascripts', $context, $blocks);
        // line 86
        echo "        
    </body>
</html>
";
        
        $__internal_2ca6cd6f769dfcdb9aed16bde7057a785b0bdbda22d90a69043029af2f1036ca->leave($__internal_2ca6cd6f769dfcdb9aed16bde7057a785b0bdbda22d90a69043029af2f1036ca_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_559bad276cb6227ca2b5dc4d3553050d54dc49113152a4f0b5bba88f21f79a41 = $this->env->getExtension("native_profiler");
        $__internal_559bad276cb6227ca2b5dc4d3553050d54dc49113152a4f0b5bba88f21f79a41->enter($__internal_559bad276cb6227ca2b5dc4d3553050d54dc49113152a4f0b5bba88f21f79a41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_559bad276cb6227ca2b5dc4d3553050d54dc49113152a4f0b5bba88f21f79a41->leave($__internal_559bad276cb6227ca2b5dc4d3553050d54dc49113152a4f0b5bba88f21f79a41_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_d777b1b51a466e611f8887632a63b252b05436f2e6a71c844ee95367f0ff4901 = $this->env->getExtension("native_profiler");
        $__internal_d777b1b51a466e611f8887632a63b252b05436f2e6a71c844ee95367f0ff4901->enter($__internal_d777b1b51a466e611f8887632a63b252b05436f2e6a71c844ee95367f0ff4901_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
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
        
        $__internal_d777b1b51a466e611f8887632a63b252b05436f2e6a71c844ee95367f0ff4901->leave($__internal_d777b1b51a466e611f8887632a63b252b05436f2e6a71c844ee95367f0ff4901_prof);

    }

    // line 57
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6bf9f1a0d69f7facf4c73b15a7801e37619f6678e4db903c6c4d0b9f0bfb581 = $this->env->getExtension("native_profiler");
        $__internal_f6bf9f1a0d69f7facf4c73b15a7801e37619f6678e4db903c6c4d0b9f0bfb581->enter($__internal_f6bf9f1a0d69f7facf4c73b15a7801e37619f6678e4db903c6c4d0b9f0bfb581_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_f6bf9f1a0d69f7facf4c73b15a7801e37619f6678e4db903c6c4d0b9f0bfb581->leave($__internal_f6bf9f1a0d69f7facf4c73b15a7801e37619f6678e4db903c6c4d0b9f0bfb581_prof);

    }

    // line 64
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_42e88be1fbda7645e3db85789b2958ebcdb274354c601c31be40a0c35b24640f = $this->env->getExtension("native_profiler");
        $__internal_42e88be1fbda7645e3db85789b2958ebcdb274354c601c31be40a0c35b24640f->enter($__internal_42e88be1fbda7645e3db85789b2958ebcdb274354c601c31be40a0c35b24640f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 65
        echo "            <script src='";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 66
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery-ui.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/unicaen.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/bootstrap.min.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 69
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("js/jquery.popconfirm.js"), "html", null, true);
        echo "'></script>
            <script src='";
        // line 70
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
        
        $__internal_42e88be1fbda7645e3db85789b2958ebcdb274354c601c31be40a0c35b24640f->leave($__internal_42e88be1fbda7645e3db85789b2958ebcdb274354c601c31be40a0c35b24640f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  239 => 70,  235 => 69,  231 => 68,  227 => 67,  223 => 66,  218 => 65,  212 => 64,  201 => 57,  192 => 9,  188 => 8,  183 => 7,  177 => 6,  165 => 5,  155 => 86,  153 => 64,  145 => 58,  143 => 57,  136 => 52,  130 => 50,  122 => 48,  120 => 47,  114 => 43,  111 => 42,  105 => 40,  102 => 39,  97 => 37,  93 => 36,  89 => 35,  85 => 34,  80 => 33,  78 => 32,  74 => 31,  69 => 30,  67 => 29,  60 => 25,  46 => 14,  41 => 12,  38 => 11,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title> AGC {% block title %} {% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{asset('css/app.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap-theme.min.css')}}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         */
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class='{{ app.environment }}'>*/
/*         */
/*         <nav class="navbar navbar-inverse">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                         <a class="navbar-brand" href="{{ path('application') }}"><h1>AGC</h1></a>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         {% if(app.user) %}*/
/*                             <li><a href="{{ path('article') }}">Articles</a></li>*/
/*                             <li><a href="{{ path('commande') }}">Commandes</a></li>*/
/*                             {% if is_granted('ROLE_ADMIN') %}*/
/*                                 <li><a href="{{ path('client') }}">Clients</a></li>*/
/*                                 <li><a href="{{ path('depense') }}">Dépenses</a></li>*/
/*                                 <li><a href="{{ path('bilan') }}">Bilan</a></li>*/
/*                                 <li><a href="{{ path('partenaire-appli') }}">Partenaire</a></li>*/
/*                                 <li><a href="{{ path('gestion-temoignage') }}">Temoignages</a></li>*/
/*                             {% endif %}*/
/*                             {% if is_granted('ROLE_SUPER_ADMIN') %}*/
/*                                 <li><a href="{{ path('utilisateur') }}">Utilisateurs</a></li>*/
/*                             {% endif %}*/
/*                         {% endif %}*/
/* */
/* */
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         {% if(app.user) %}*/
/*                             <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-user"></span> {{app.user.username}} | Se deconnecter</a></li>*/
/*                         {% else %}*/
/*                             <li><a href="{{ path('fos_user_security_login') }}">Se connecter</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*         </nav>*/
/*         <div id="contenu-principal" class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         */
/*         */
/*         <div id='footer' class='container'>*/
/*             */
/*         </div>*/
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