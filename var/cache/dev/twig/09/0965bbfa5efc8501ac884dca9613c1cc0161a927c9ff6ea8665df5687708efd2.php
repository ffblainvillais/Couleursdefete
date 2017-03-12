<?php

/* vitrine/contact.html.twig */
class __TwigTemplate_315d8f67149fce172fdcfe18666dfa9693d09017f1dfd16b3446080577c9fffa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("baseVitrine.html.twig", "vitrine/contact.html.twig", 1);
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
        $__internal_93e7aeab2fb23196657e19a20b8b5bcf0719f2720d7621f12947e3299e0a15eb = $this->env->getExtension("native_profiler");
        $__internal_93e7aeab2fb23196657e19a20b8b5bcf0719f2720d7621f12947e3299e0a15eb->enter($__internal_93e7aeab2fb23196657e19a20b8b5bcf0719f2720d7621f12947e3299e0a15eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_93e7aeab2fb23196657e19a20b8b5bcf0719f2720d7621f12947e3299e0a15eb->leave($__internal_93e7aeab2fb23196657e19a20b8b5bcf0719f2720d7621f12947e3299e0a15eb_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_364a0832107a6bf52d211ed9f033ff7b399f64e07c3bc0b095329120e2f5c11b = $this->env->getExtension("native_profiler");
        $__internal_364a0832107a6bf52d211ed9f033ff7b399f64e07c3bc0b095329120e2f5c11b->enter($__internal_364a0832107a6bf52d211ed9f033ff7b399f64e07c3bc0b095329120e2f5c11b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_364a0832107a6bf52d211ed9f033ff7b399f64e07c3bc0b095329120e2f5c11b->leave($__internal_364a0832107a6bf52d211ed9f033ff7b399f64e07c3bc0b095329120e2f5c11b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_63dad3733b20fb50e027e16d2fa81c8eca1dd02d3738da25bb90871faefe91e5 = $this->env->getExtension("native_profiler");
        $__internal_63dad3733b20fb50e027e16d2fa81c8eca1dd02d3738da25bb90871faefe91e5->enter($__internal_63dad3733b20fb50e027e16d2fa81c8eca1dd02d3738da25bb90871faefe91e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    
            <h1>Contact</h1>
            <ul class='decorationOut'>
                <li><span class='glyphicon glyphicon-envelope'></span> couleursdefete@gmail.com</li>
                <li><span class='glyphicon glyphicon-earphone'></span> 06 89 47 02 19</li>
                <li><a href='https://www.facebook.com/couleursdefete.free.fr/?fref=ts'><img src='";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/facebook.png"), "html", null, true);
        echo "' class='icone'/></a> Couleurs de fête, décoration évènementiel</li>
                <li><a href='https://www.linkedin.com/in/christine-lelong-9b79b6104?authType=NAME_SEARCH&authToken=NyKZ&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A444405019%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1469533345425%2Ctas%3Achristin'><img src='";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("images/linkedin.png"), "html", null, true);
        echo "' class='icone'/></a> Christine Lelong sur LinkedIn !</li>
            </ul>

               <div class='jumbotron rows'>
                    <p class='col-sm-12'>Vous pouvez dès maintenant m'adresser votre demande</p>

                    <form METHOD=POST ENCTYPE='text/plain' ACTION='mailto:couleursdefete@gmail.com' class='formulaire'>
                        <div class='col-sm-4'>Prénom/NOM : </div>   <div class='col-sm-8'>  <input name='nom' value='' type='text'>                     </div>
                        <div class='col-sm-4'>Ville :      </div>   <div class='col-sm-8'>  <input name='ville' value='' type='text'>                   </div>
                        <div class='col-sm-4'>Email :      </div>   <div class='col-sm-8'>  <input name='email' value='' type='text'>                   </div>
                        <div class='col-sm-4'>Téléphone    </div>   <div class='col-sm-8'>  <input name='tel' value='' type='text'>                     </div>
                        <div class='col-sm-4'>Objet :      </div>   <div class='col-sm-8'>  <input name='objet' value='' type='text'>                   </div>
                        <div class='col-sm-4'>Message :    </div>   <div class='col-sm-8'>  <textarea cols='25' rows='5' name='message' ></textarea>   </div>

                        <input class='btn btn-primary'name='envoyer' value='Envoyer' type='submit' id='envoyer'>
                </form>

                </div>
        
";
        
        $__internal_63dad3733b20fb50e027e16d2fa81c8eca1dd02d3738da25bb90871faefe91e5->leave($__internal_63dad3733b20fb50e027e16d2fa81c8eca1dd02d3738da25bb90871faefe91e5_prof);

    }

    public function getTemplateName()
    {
        return "vitrine/contact.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 12,  60 => 11,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'baseVitrine.html.twig' %}*/
/* */
/* {% block title %}{{titre}}{% endblock %}*/
/*     */
/* {% block body %}*/
/*     */
/*             <h1>Contact</h1>*/
/*             <ul class='decorationOut'>*/
/*                 <li><span class='glyphicon glyphicon-envelope'></span> couleursdefete@gmail.com</li>*/
/*                 <li><span class='glyphicon glyphicon-earphone'></span> 06 89 47 02 19</li>*/
/*                 <li><a href='https://www.facebook.com/couleursdefete.free.fr/?fref=ts'><img src='{{asset('images/facebook.png')}}' class='icone'/></a> Couleurs de fête, décoration évènementiel</li>*/
/*                 <li><a href='https://www.linkedin.com/in/christine-lelong-9b79b6104?authType=NAME_SEARCH&authToken=NyKZ&locale=fr_FR&trk=tyah&trkInfo=clickedVertical%3Amynetwork%2CclickedEntityId%3A444405019%2CauthType%3ANAME_SEARCH%2Cidx%3A1-1-1%2CtarId%3A1469533345425%2Ctas%3Achristin'><img src='{{asset('images/linkedin.png')}}' class='icone'/></a> Christine Lelong sur LinkedIn !</li>*/
/*             </ul>*/
/* */
/*                <div class='jumbotron rows'>*/
/*                     <p class='col-sm-12'>Vous pouvez dès maintenant m'adresser votre demande</p>*/
/* */
/*                     <form METHOD=POST ENCTYPE='text/plain' ACTION='mailto:couleursdefete@gmail.com' class='formulaire'>*/
/*                         <div class='col-sm-4'>Prénom/NOM : </div>   <div class='col-sm-8'>  <input name='nom' value='' type='text'>                     </div>*/
/*                         <div class='col-sm-4'>Ville :      </div>   <div class='col-sm-8'>  <input name='ville' value='' type='text'>                   </div>*/
/*                         <div class='col-sm-4'>Email :      </div>   <div class='col-sm-8'>  <input name='email' value='' type='text'>                   </div>*/
/*                         <div class='col-sm-4'>Téléphone    </div>   <div class='col-sm-8'>  <input name='tel' value='' type='text'>                     </div>*/
/*                         <div class='col-sm-4'>Objet :      </div>   <div class='col-sm-8'>  <input name='objet' value='' type='text'>                   </div>*/
/*                         <div class='col-sm-4'>Message :    </div>   <div class='col-sm-8'>  <textarea cols='25' rows='5' name='message' ></textarea>   </div>*/
/* */
/*                         <input class='btn btn-primary'name='envoyer' value='Envoyer' type='submit' id='envoyer'>*/
/*                 </form>*/
/* */
/*                 </div>*/
/*         */
/* {% endblock %}*/
/* */
/* */
