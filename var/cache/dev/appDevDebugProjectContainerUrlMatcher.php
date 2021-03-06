<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if ('/_profiler' === $trimmedPathinfo) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ('/_profiler/search' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ('/_profiler/search_bar' === $pathinfo) {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ('/_profiler/phpinfo' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler_open_file
                if ('/_profiler/open' === $pathinfo) {
                    return array (  '_controller' => 'web_profiler.controller.profiler:openAction',  '_route' => '_profiler_open_file',);
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

        elseif (0 === strpos($pathinfo, '/articles')) {
            // app_article_show
            if (preg_match('#^/articles/(?P<_locale>en|fr)/(?P<year>\\d+)/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'app_article_show')), array (  '_format' => 'html',  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',));
            }

            // article_show
            if (preg_match('#^/articles/(?P<_locale>en|fr)/(?P<year>\\d+)/(?P<slug>[^/\\.]++)(?:\\.(?P<_format>html|rss))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',  '_format' => 'html',));
            }

        }

        elseif (0 === strpos($pathinfo, '/blog')) {
            if (0 === strpos($pathinfo, '/blogs')) {
                // blog2_list
                if (preg_match('#^/blogs(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog2_list')), array (  'page' => 1,  '_controller' => 'AppBundle\\Controller\\BlogsController::listAction',));
                }

                // blog2_read
                if (preg_match('#^/blogs/(?P<title>\\S+)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog2_read')), array (  '_controller' => 'AppBundle\\Controller\\BlogsController::readAction',));
                }

            }

            // blog_list
            if (preg_match('#^/blog(?:/(?P<page>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_list')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::listAction',  'page' => 1,));
            }

            // blog_show
            if (preg_match('#^/blog/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'blog_show')), array (  '_controller' => 'AppBundle\\Controller\\BlogController::showAction',));
            }

        }

        elseif (0 === strpos($pathinfo, '/buscar_empresa')) {
            // empresa_buscar
            if (preg_match('#^/buscar_empresa(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_buscar')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::buscarEmpresaAction',  'id' => 1,));
            }

            // empresa_buscarNombre
            if (0 === strpos($pathinfo, '/buscar_empresa_nombre') && preg_match('#^/buscar_empresa_nombre(?:/(?P<nombre>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_buscarNombre')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::buscarEmpresaPorNombreAction',  'nombre' => 'assics',));
            }

        }

        // homepage
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        // app_lucky2_number
        if ('/lucky2/number' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\Lucky2Controller::numberAction',  '_route' => 'app_lucky2_number',);
        }

        // app_lucky_number
        if ('/lucky/number' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  '_route' => 'app_lucky_number',);
        }

        // prueba_show
        if (0 === strpos($pathinfo, '/prueba') && preg_match('#^/prueba/(?P<slug>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'prueba_show')), array (  '_controller' => 'AppBundle\\Controller\\PruebaController::showAction',));
        }

        if (0 === strpos($pathinfo, '/empresa')) {
            // empresa_mostrarAll
            if ('/empresas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::listarTodasAction',  '_route' => 'empresa_mostrarAll',);
            }

            // empresa_mostrarUna
            if (preg_match('#^/empresa(?:/(?P<id>\\d+))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'empresa_mostrarUna')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::listarUnaAction',  'id' => 1,));
            }

        }

        // empresa_nombreEmpresa
        if ('/nombre' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::nombreEmpresaAction',  '_route' => 'empresa_nombreEmpresa',);
        }

        // mensaje
        if (0 === strpos($pathinfo, '/mensaje') && preg_match('#^/mensaje(?:/(?P<men>[^/]++))?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'mensaje')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::mensajeAction',  'men' => '',));
        }

        if (0 === strpos($pathinfo, '/contactar')) {
            // contactar
            if (preg_match('#^/contactar(?:/(?P<marca>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'contactar')), array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::contactarAction',  'marca' => 'nike',));
            }

            // contactarAdidasss
            if ('/contactarAdidas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::contactarAdidasAction',  '_route' => 'contactarAdidasss',);
            }

        }

        elseif (0 === strpos($pathinfo, '/crear_empresa')) {
            // empresa_crear
            if ('/crear_empresa' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::crearEmpresaAction',  '_route' => 'empresa_crear',);
            }

            // empresa_recuperarValoresFormulario
            if ('/crear_empresa_form' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::recuperarValoresFormularioAction',  '_route' => 'empresa_recuperarValoresFormulario',);
            }

            // empresa_nuevo
            if ('/crear_empresa_cont' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::empresaContAction',  '_route' => 'empresa_nuevo',);
            }

        }

        // empresa_crearEmpFormulario
        if ('/form_crear' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::crearEmpresaFormularioAction',  '_route' => 'empresa_crearEmpFormulario',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
