<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/a')) {
            // application
            if ($pathinfo === '/application') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAppliAction',  '_route' => 'application',);
            }

            // accueil
            if ($pathinfo === '/accueil') {
                return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::indexAction',  '_route' => 'accueil',);
            }

        }

        // contact
        if ($pathinfo === '/contact') {
            return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::contactAction',  '_route' => 'contact',);
        }

        // album
        if ($pathinfo === '/album') {
            return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::albumAction',  '_route' => 'album',);
        }

        // location
        if ($pathinfo === '/location') {
            return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::locationAction',  '_route' => 'location',);
        }

        if (0 === strpos($pathinfo, '/p')) {
            // prestation
            if ($pathinfo === '/prestation') {
                return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::prestationAction',  '_route' => 'prestation',);
            }

            // partenaire
            if ($pathinfo === '/partenaire') {
                return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::partenaireAction',  '_route' => 'partenaire',);
            }

        }

        if (0 === strpos($pathinfo, '/temoignage')) {
            // temoignage
            if ($pathinfo === '/temoignage') {
                return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::temoignageAction',  '_route' => 'temoignage',);
            }

            // ajout-temoignage
            if ($pathinfo === '/temoignage/ajout-temoignage') {
                return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::ajoutTemoignageAction',  '_route' => 'ajout-temoignage',);
            }

            if (0 === strpos($pathinfo, '/temoignages')) {
                // gestion-temoignage
                if ($pathinfo === '/temoignages') {
                    return array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::gestionTemoignageAction',  '_route' => 'gestion-temoignage',);
                }

                // publier-temoignage
                if (0 === strpos($pathinfo, '/temoignages/publier-temoignage') && preg_match('#^/temoignages/publier\\-temoignage/(?P<idTemoignage>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'publier-temoignage')), array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::publierAction',));
                }

                // supprimer-temoignage
                if (0 === strpos($pathinfo, '/temoignages/supprimer-temoignage') && preg_match('#^/temoignages/supprimer\\-temoignage/(?P<idTemoignage>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'supprimer-temoignage')), array (  '_controller' => 'VitrineBundle\\Controller\\VitrineController::supprimerAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/partenaire-commerciaux')) {
            // partenaire-appli
            if ($pathinfo === '/partenaire-commerciaux') {
                return array (  '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::indexAction',  '_route' => 'partenaire-appli',);
            }

            // ajout-partenaire
            if ($pathinfo === '/partenaire-commerciaux/ajout-partenaire') {
                return array (  '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::ajoutAction',  '_route' => 'ajout-partenaire',);
            }

            // suppression-partenaire
            if (0 === strpos($pathinfo, '/partenaire-commerciaux/suppression-partenaire') && preg_match('#^/partenaire\\-commerciaux/suppression\\-partenaire/(?P<idPartenaire>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-partenaire')), array (  '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::suppressionAction',));
            }

            if (0 === strpos($pathinfo, '/partenaire-commerciaux/modification-p')) {
                // modification-partenaire
                if (0 === strpos($pathinfo, '/partenaire-commerciaux/modification-partenaire') && preg_match('#^/partenaire\\-commerciaux/modification\\-partenaire/(?P<idPartenaire>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-partenaire')), array (  '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::modificationAction',));
                }

                // modification-pop-partenaire
                if (0 === strpos($pathinfo, '/partenaire-commerciaux/modification-pop-partenaire') && preg_match('#^/partenaire\\-commerciaux/modification\\-pop\\-partenaire/(?P<idPartenaire>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-pop-partenaire')), array (  '_controller' => 'PartenaireBundle\\Controller\\PartenaireController::modificationPopAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/article')) {
            // article
            if ($pathinfo === '/article') {
                return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
            }

            // ajout-article
            if ($pathinfo === '/article/ajout-article') {
                return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutAction',  '_route' => 'ajout-article',);
            }

            // suppression-article
            if (0 === strpos($pathinfo, '/article/suppression-article') && preg_match('#^/article/suppression\\-article/(?P<idArticle>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-article')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionAction',));
            }

            if (0 === strpos($pathinfo, '/article/modification-')) {
                // modification-article
                if (0 === strpos($pathinfo, '/article/modification-article') && preg_match('#^/article/modification\\-article/(?P<idArticle>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-article')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationAction',));
                }

                // modification-pop-article
                if (0 === strpos($pathinfo, '/article/modification-pop-article') && preg_match('#^/article/modification\\-pop\\-article/(?P<idArticle>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-pop-article')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationPopAction',));
                }

            }

            // ajout-lot
            if ($pathinfo === '/article/ajout-lot') {
                return array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutLotAction',  '_route' => 'ajout-lot',);
            }

            // suppression-lot
            if (0 === strpos($pathinfo, '/article/suppression-lot') && preg_match('#^/article/suppression\\-lot/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-lot')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionLotAction',));
            }

            if (0 === strpos($pathinfo, '/article/modification-')) {
                // modification-lot
                if (0 === strpos($pathinfo, '/article/modification-Lot') && preg_match('#^/article/modification\\-Lot/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-lot')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationLotAction',));
                }

                // modification-pop-lot
                if (0 === strpos($pathinfo, '/article/modification-pop-lot') && preg_match('#^/article/modification\\-pop\\-lot/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-pop-lot')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::modificationPopLotAction',));
                }

            }

            if (0 === strpos($pathinfo, '/article/ajout-article-lot')) {
                // ajout-article-lot-pop
                if (0 === strpos($pathinfo, '/article/ajout-article-lot-pop') && preg_match('#^/article/ajout\\-article\\-lot\\-pop/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-article-lot-pop')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutArticlePopAction',));
                }

                // ajout-article-lot
                if (preg_match('#^/article/ajout\\-article\\-lot/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-article-lot')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::ajoutArticleAction',));
                }

            }

            // suppression-article-lot
            if (0 === strpos($pathinfo, '/article/suppression-article-lot') && preg_match('#^/article/suppression\\-article\\-lot/(?P<idArticle>[^/]++)/(?P<idLot>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-article-lot')), array (  '_controller' => 'ArticleBundle\\Controller\\ArticleController::suppressionArticleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/commande')) {
                // commande
                if ($pathinfo === '/commande') {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::indexAction',  '_route' => 'commande',);
                }

                if (0 === strpos($pathinfo, '/commande/ajout-')) {
                    // ajout-commande
                    if ($pathinfo === '/commande/ajout-commande') {
                        return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutAction',  '_route' => 'ajout-commande',);
                    }

                    if (0 === strpos($pathinfo, '/commande/ajout-article-commande')) {
                        // ajout-article-commande-pop
                        if (0 === strpos($pathinfo, '/commande/ajout-article-commande-pop') && preg_match('#^/commande/ajout\\-article\\-commande\\-pop/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-article-commande-pop')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutArticlePopAction',));
                        }

                        // ajout-article-commande
                        if (preg_match('#^/commande/ajout\\-article\\-commande/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-article-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutArticleAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/commande/ajout-lot-commande')) {
                        // ajout-lot-commande-pop
                        if (0 === strpos($pathinfo, '/commande/ajout-lot-commande-pop') && preg_match('#^/commande/ajout\\-lot\\-commande\\-pop/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-lot-commande-pop')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutLotPopAction',));
                        }

                        // ajout-lot-commande
                        if (preg_match('#^/commande/ajout\\-lot\\-commande/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'ajout-lot-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::ajoutLotAction',));
                        }

                    }

                }

                if (0 === strpos($pathinfo, '/commande/suppression-')) {
                    // suppression-lot-commande
                    if (0 === strpos($pathinfo, '/commande/suppression-lot-commande') && preg_match('#^/commande/suppression\\-lot\\-commande/(?P<idLot>[^/]++)/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-lot-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionLotAction',));
                    }

                    // suppression-article-commande
                    if (0 === strpos($pathinfo, '/commande/suppression-article-commande') && preg_match('#^/commande/suppression\\-article\\-commande/(?P<idArticle>[^/]++)/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-article-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionArticleAction',));
                    }

                    // suppression-commande
                    if (0 === strpos($pathinfo, '/commande/suppression-commande') && preg_match('#^/commande/suppression\\-commande/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::suppressionAction',));
                    }

                }

                // commande-paye
                if (0 === strpos($pathinfo, '/commande/commande-paye') && preg_match('#^/commande/commande\\-paye/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'commande-paye')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::payeAction',));
                }

                if (0 === strpos($pathinfo, '/commande/générer-')) {
                    // générer-facture
                    if (0 === strpos($pathinfo, '/commande/générer-facture') && preg_match('#^/commande/générer\\-facture/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'générer-facture')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::factureAction',));
                    }

                    // générer-devis
                    if (0 === strpos($pathinfo, '/commande/générer-devis') && preg_match('#^/commande/générer\\-devis/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'générer-devis')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::devisAction',));
                    }

                }

                // archiver-commande
                if (0 === strpos($pathinfo, '/commande/archiver-commande') && preg_match('#^/commande/archiver\\-commande/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'archiver-commande')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::archiverAction',));
                }

                // voir-commandes-archivees
                if ($pathinfo === '/commande/commandes-archivees') {
                    return array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::commandesArchiveesAction',  '_route' => 'voir-commandes-archivees',);
                }

                // retour-location
                if (0 === strpos($pathinfo, '/commande/retour-location') && preg_match('#^/commande/retour\\-location/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'retour-location')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::retourLocationAction',));
                }

                // depart-location
                if (0 === strpos($pathinfo, '/commande/depart-location') && preg_match('#^/commande/depart\\-location/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'depart-location')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::departLocationAction',));
                }

                if (0 === strpos($pathinfo, '/commande/versement-acompte')) {
                    // versement-acompte-pop
                    if (0 === strpos($pathinfo, '/commande/versement-acompte-pop') && preg_match('#^/commande/versement\\-acompte\\-pop/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'versement-acompte-pop')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::versementAcomptePopAction',));
                    }

                    // versement-acompte
                    if (preg_match('#^/commande/versement\\-acompte/(?P<idCommande>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'versement-acompte')), array (  '_controller' => 'CommandeBundle\\Controller\\CommandeController::versementAcompteAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/client')) {
                // client
                if ($pathinfo === '/client') {
                    return array (  '_controller' => 'ClientBundle\\Controller\\ClientController::indexAction',  '_route' => 'client',);
                }

                // ajout-client
                if ($pathinfo === '/client/ajout-client') {
                    return array (  '_controller' => 'ClientBundle\\Controller\\ClientController::ajoutAction',  '_route' => 'ajout-client',);
                }

                // suppression-client
                if (0 === strpos($pathinfo, '/client/suppression-client') && preg_match('#^/client/suppression\\-client/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-client')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::suppressionAction',));
                }

                if (0 === strpos($pathinfo, '/client/m')) {
                    if (0 === strpos($pathinfo, '/client/modification-')) {
                        // modification-client
                        if (0 === strpos($pathinfo, '/client/modification-client') && preg_match('#^/client/modification\\-client/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-client')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::modificationAction',));
                        }

                        // modification-pop-client
                        if (0 === strpos($pathinfo, '/client/modification-pop-client') && preg_match('#^/client/modification\\-pop\\-client/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-pop-client')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::modificationPopAction',));
                        }

                    }

                    if (0 === strpos($pathinfo, '/client/mail')) {
                        // mail-client
                        if (preg_match('#^/client/mail/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail-client')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::mailClientAction',));
                        }

                        // mail-client-pop
                        if (0 === strpos($pathinfo, '/client/mail-pop') && preg_match('#^/client/mail\\-pop/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mail-client-pop')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::mailClientPopAction',));
                        }

                    }

                }

                // newsletter-client
                if ($pathinfo === '/client/newsletter') {
                    return array (  '_controller' => 'ClientBundle\\Controller\\ClientController::newsletterAction',  '_route' => 'newsletter-client',);
                }

                // relance-client
                if (0 === strpos($pathinfo, '/client/relance') && preg_match('#^/client/relance/(?P<idCommande>[^/]++)/(?P<idClient>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'relance-client')), array (  '_controller' => 'ClientBundle\\Controller\\ClientController::relanceAction',));
                }

            }

        }

        // bilan
        if ($pathinfo === '/bilan') {
            return array (  '_controller' => 'BilanBundle\\Controller\\BilanController::indexAction',  '_route' => 'bilan',);
        }

        // generation-bilan
        if ($pathinfo === '/generation-bilan') {
            return array (  '_controller' => 'BilanBundle\\Controller\\BilanController::generationBilanAction',  '_route' => 'generation-bilan',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // utilisateur
            if ($pathinfo === '/utilisateur') {
                return array (  '_controller' => 'UserBundle\\Controller\\UserController::indexAction',  '_route' => 'utilisateur',);
            }

            if (0 === strpos($pathinfo, '/utilisateur/nommer-')) {
                // nommer-super-admin
                if (0 === strpos($pathinfo, '/utilisateur/nommer-super-admin') && preg_match('#^/utilisateur/nommer\\-super\\-admin/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nommer-super-admin')), array (  '_controller' => 'UserBundle\\Controller\\UserController::superAdminAction',));
                }

                // nommer-admin
                if (0 === strpos($pathinfo, '/utilisateur/nommer-admin') && preg_match('#^/utilisateur/nommer\\-admin/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'nommer-admin')), array (  '_controller' => 'UserBundle\\Controller\\UserController::adminAction',));
                }

            }

            // remove-admin
            if (0 === strpos($pathinfo, '/utilisateur/remove-admin') && preg_match('#^/utilisateur/remove\\-admin/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'remove-admin')), array (  '_controller' => 'UserBundle\\Controller\\UserController::removeAdminAction',));
            }

            // suppression-utilisateur
            if (0 === strpos($pathinfo, '/utilisateur/suppression') && preg_match('#^/utilisateur/suppression/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-utilisateur')), array (  '_controller' => 'UserBundle\\Controller\\UserController::suppressionAction',));
            }

            // activer
            if (0 === strpos($pathinfo, '/utilisateur/activer') && preg_match('#^/utilisateur/activer/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'activer')), array (  '_controller' => 'UserBundle\\Controller\\UserController::activerAction',));
            }

            // desactiver
            if (0 === strpos($pathinfo, '/utilisateur/desactiver') && preg_match('#^/utilisateur/desactiver/(?P<idUtilisateur>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'desactiver')), array (  '_controller' => 'UserBundle\\Controller\\UserController::desactiverAction',));
            }

        }

        if (0 === strpos($pathinfo, '/depense')) {
            // depense
            if ($pathinfo === '/depense') {
                return array (  '_controller' => 'DepenseBundle\\Controller\\DepenseController::indexAction',  '_route' => 'depense',);
            }

            // ajout-depense
            if ($pathinfo === '/depense/ajout-depense') {
                return array (  '_controller' => 'DepenseBundle\\Controller\\DepenseController::ajoutAction',  '_route' => 'ajout-depense',);
            }

            // suppression-depense
            if (0 === strpos($pathinfo, '/depense/suppression-depense') && preg_match('#^/depense/suppression\\-depense/(?P<idDepense>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'suppression-depense')), array (  '_controller' => 'DepenseBundle\\Controller\\DepenseController::suppressionAction',));
            }

            if (0 === strpos($pathinfo, '/depense/modification-')) {
                // modification-depense
                if (0 === strpos($pathinfo, '/depense/modification-depense') && preg_match('#^/depense/modification\\-depense/(?P<idDepense>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-depense')), array (  '_controller' => 'DepenseBundle\\Controller\\DepenseController::modificationAction',));
                }

                // modification-pop-depense
                if (0 === strpos($pathinfo, '/depense/modification-pop-depense') && preg_match('#^/depense/modification\\-pop\\-depense/(?P<idDepense>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'modification-pop-depense')), array (  '_controller' => 'DepenseBundle\\Controller\\DepenseController::modificationPopAction',));
                }

            }

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
