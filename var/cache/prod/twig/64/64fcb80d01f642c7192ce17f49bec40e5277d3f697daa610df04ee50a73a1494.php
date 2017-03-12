<?php

/* vitrine/contact.html.twig */
class __TwigTemplate_aed0fe086d169bb6a21c5f9fe1e26467bd13e3cf863e9aa6754b8e88d7b9e4c7 extends Twig_Template
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
        $__internal_4fa4c6199b9757f4ad865c241b87481795e2a09a1e0192d4fe0ddfaeafb8e372 = $this->env->getExtension("native_profiler");
        $__internal_4fa4c6199b9757f4ad865c241b87481795e2a09a1e0192d4fe0ddfaeafb8e372->enter($__internal_4fa4c6199b9757f4ad865c241b87481795e2a09a1e0192d4fe0ddfaeafb8e372_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "vitrine/contact.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4fa4c6199b9757f4ad865c241b87481795e2a09a1e0192d4fe0ddfaeafb8e372->leave($__internal_4fa4c6199b9757f4ad865c241b87481795e2a09a1e0192d4fe0ddfaeafb8e372_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d26bd32d0e206233d67631428a0d5305bb9704676f179bbc8fdfd3b3d250486b = $this->env->getExtension("native_profiler");
        $__internal_d26bd32d0e206233d67631428a0d5305bb9704676f179bbc8fdfd3b3d250486b->enter($__internal_d26bd32d0e206233d67631428a0d5305bb9704676f179bbc8fdfd3b3d250486b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo twig_escape_filter($this->env, (isset($context["titre"]) ? $context["titre"] : $this->getContext($context, "titre")), "html", null, true);
        
        $__internal_d26bd32d0e206233d67631428a0d5305bb9704676f179bbc8fdfd3b3d250486b->leave($__internal_d26bd32d0e206233d67631428a0d5305bb9704676f179bbc8fdfd3b3d250486b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_5c78fbd40bd6300f398cdede8050cc3c2050b7a0d81fa43bd7958f5baf4794b3 = $this->env->getExtension("native_profiler");
        $__internal_5c78fbd40bd6300f398cdede8050cc3c2050b7a0d81fa43bd7958f5baf4794b3->enter($__internal_5c78fbd40bd6300f398cdede8050cc3c2050b7a0d81fa43bd7958f5baf4794b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5c78fbd40bd6300f398cdede8050cc3c2050b7a0d81fa43bd7958f5baf4794b3->leave($__internal_5c78fbd40bd6300f398cdede8050cc3c2050b7a0d81fa43bd7958f5baf4794b3_prof);

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
