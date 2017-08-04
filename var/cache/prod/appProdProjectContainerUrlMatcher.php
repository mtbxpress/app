<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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


        if (0 === strpos($pathinfo, '/articles')) {
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

            // contactarAdidass
            if ('/contactarAdidas' === $pathinfo) {
                return array (  '_controller' => 'AppBundle\\Controller\\EmpresaController::contactarAdidasAction',  '_route' => 'contactarAdidass',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
