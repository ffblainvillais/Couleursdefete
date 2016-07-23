<?php

/* base.html.twig */
class __TwigTemplate_895ec9b6e7d46cb637e0566d0d98512924112b37c33b204cbe5abed3ccd22431 extends Twig_Template
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
        $__internal_f05e8e6df486a326ddbb2bf58bc266bc7aeaca79af1c03ee032b7b43d0ac054c = $this->env->getExtension("native_profiler");
        $__internal_f05e8e6df486a326ddbb2bf58bc266bc7aeaca79af1c03ee032b7b43d0ac054c->enter($__internal_f05e8e6df486a326ddbb2bf58bc266bc7aeaca79af1c03ee032b7b43d0ac054c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
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
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar\" aria-expanded=\"false\" aria-controls=\"navbar\">
                        <span class=\"sr-only\">Toggle navigation</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("index");
        echo "\"><h1>Symfony</h1></a>
                </div>
                <div class=\"navbar-collapse collapse\">
                    <ul class=\"nav navbar-nav\">
                        <li><a href=\"#\">Home</a></li>
                        <li><a href=\"#about\">About</a></li>
                        <li><a href=\"#contact\">Contact</a></li>
                    </ul>
                    <ul class=\"nav navbar-nav navbar-right\">
                        ";
        // line 33
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 34
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("logout");
            echo "\"><span class=\"glyphicon glyphicon-user\"></span> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo " | Se deconnecter</a></li>
                        ";
        } else {
            // line 36
            echo "                        <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("login");
            echo "\">Se connecter</a></li>
                        ";
        }
        // line 38
        echo "                    </ul>
                </div><!--/.nav-collapse -->
            </div>
      </nav>
                    
            
        
        
        
        <div id=\"contenu-principal\" class=\"container\">
            ";
        // line 48
        $this->displayBlock('body', $context, $blocks);
        // line 49
        echo "        </div>
        <div id='footer' class='container'>
            
        </div>
        ";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>
";
        
        $__internal_f05e8e6df486a326ddbb2bf58bc266bc7aeaca79af1c03ee032b7b43d0ac054c->leave($__internal_f05e8e6df486a326ddbb2bf58bc266bc7aeaca79af1c03ee032b7b43d0ac054c_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_fd25fa003d29085a05b602742d6e41e29cd5371a98fbbaab31fb9a27da69cb96 = $this->env->getExtension("native_profiler");
        $__internal_fd25fa003d29085a05b602742d6e41e29cd5371a98fbbaab31fb9a27da69cb96->enter($__internal_fd25fa003d29085a05b602742d6e41e29cd5371a98fbbaab31fb9a27da69cb96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo " ";
        
        $__internal_fd25fa003d29085a05b602742d6e41e29cd5371a98fbbaab31fb9a27da69cb96->leave($__internal_fd25fa003d29085a05b602742d6e41e29cd5371a98fbbaab31fb9a27da69cb96_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f7cf28d7777d4175373815616c95b9a0359950e5ea3d153ce6f98b4ef7ecf418 = $this->env->getExtension("native_profiler");
        $__internal_f7cf28d7777d4175373815616c95b9a0359950e5ea3d153ce6f98b4ef7ecf418->enter($__internal_f7cf28d7777d4175373815616c95b9a0359950e5ea3d153ce6f98b4ef7ecf418_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/unicaen.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("css/app.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/css/bootstrap.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
            <link href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("vendor/css/bootstrap-theme.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">
        ";
        
        $__internal_f7cf28d7777d4175373815616c95b9a0359950e5ea3d153ce6f98b4ef7ecf418->leave($__internal_f7cf28d7777d4175373815616c95b9a0359950e5ea3d153ce6f98b4ef7ecf418_prof);

    }

    // line 48
    public function block_body($context, array $blocks = array())
    {
        $__internal_acbeaa912c863fa18f0dbb502c0cc6f383540e7fa83f8fc1e29616b211caa304 = $this->env->getExtension("native_profiler");
        $__internal_acbeaa912c863fa18f0dbb502c0cc6f383540e7fa83f8fc1e29616b211caa304->enter($__internal_acbeaa912c863fa18f0dbb502c0cc6f383540e7fa83f8fc1e29616b211caa304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_acbeaa912c863fa18f0dbb502c0cc6f383540e7fa83f8fc1e29616b211caa304->leave($__internal_acbeaa912c863fa18f0dbb502c0cc6f383540e7fa83f8fc1e29616b211caa304_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_510a7cc585c64110062494aa813edc7f3966ed2933155c7fbf011976ecc66302 = $this->env->getExtension("native_profiler");
        $__internal_510a7cc585c64110062494aa813edc7f3966ed2933155c7fbf011976ecc66302->enter($__internal_510a7cc585c64110062494aa813edc7f3966ed2933155c7fbf011976ecc66302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            <script src='js/bootstrap.min.js'></script>
        ";
        
        $__internal_510a7cc585c64110062494aa813edc7f3966ed2933155c7fbf011976ecc66302->leave($__internal_510a7cc585c64110062494aa813edc7f3966ed2933155c7fbf011976ecc66302_prof);

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
        return array (  173 => 54,  167 => 53,  156 => 48,  147 => 10,  143 => 9,  139 => 8,  134 => 7,  128 => 6,  116 => 5,  107 => 56,  105 => 53,  99 => 49,  97 => 48,  85 => 38,  79 => 36,  71 => 34,  69 => 33,  57 => 24,  44 => 14,  38 => 12,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %} {% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link href="{{asset('css/unicaen.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('css/app.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap.min.css')}}" rel="stylesheet">*/
/*             <link href="{{asset('vendor/css/bootstrap-theme.min.css')}}" rel="stylesheet">*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body class='{{ app.environment }}'>*/
/*         <nav class="navbar navbar-inverse">*/
/*             <div class="container">*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">*/
/*                         <span class="sr-only">Toggle navigation</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('index') }}"><h1>Symfony</h1></a>*/
/*                 </div>*/
/*                 <div class="navbar-collapse collapse">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li><a href="#">Home</a></li>*/
/*                         <li><a href="#about">About</a></li>*/
/*                         <li><a href="#contact">Contact</a></li>*/
/*                     </ul>*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         {% if(app.user) %}*/
/*                             <li><a href="{{ path('logout') }}"><span class="glyphicon glyphicon-user"></span> {{app.user.username}} | Se deconnecter</a></li>*/
/*                         {% else %}*/
/*                         <li><a href="{{ path('login') }}">Se connecter</a></li>*/
/*                         {% endif %}*/
/*                     </ul>*/
/*                 </div><!--/.nav-collapse -->*/
/*             </div>*/
/*       </nav>*/
/*                     */
/*             */
/*         */
/*         */
/*         */
/*         <div id="contenu-principal" class="container">*/
/*             {% block body %}{% endblock %}*/
/*         </div>*/
/*         <div id='footer' class='container'>*/
/*             */
/*         </div>*/
/*         {% block javascripts %}*/
/*             <script src='js/bootstrap.min.js'></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
