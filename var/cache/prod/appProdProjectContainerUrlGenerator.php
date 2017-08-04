<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'app_article_show' => array (  0 =>   array (    0 => '_locale',    1 => 'year',    2 => 'slug',    3 => '_format',  ),  1 =>   array (    '_format' => 'html',    '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',  ),  2 =>   array (    '_locale' => 'en|fr',    '_format' => 'html|rss',    'year' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|rss',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'year',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),    4 =>     array (      0 => 'text',      1 => '/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog2_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    'page' => 1,    '_controller' => 'AppBundle\\Controller\\BlogsController::listAction',  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/blogs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog2_read' => array (  0 =>   array (    0 => 'title',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BlogsController::readAction',  ),  2 =>   array (    'title' => '\\S+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\S+',      3 => 'title',    ),    1 =>     array (      0 => 'text',      1 => '/blogs',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky2_number' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\Lucky2Controller::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lucky2/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'app_lucky_number' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\LuckyController::numberAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/lucky/number',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_list' => array (  0 =>   array (    0 => 'page',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BlogController::listAction',    'page' => 1,  ),  2 =>   array (    'page' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'page',    ),    1 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'blog_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\BlogController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/blog',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'prueba_show' => array (  0 =>   array (    0 => 'slug',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\PruebaController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'slug',    ),    1 =>     array (      0 => 'text',      1 => '/prueba',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'article_show' => array (  0 =>   array (    0 => '_locale',    1 => 'year',    2 => 'slug',    3 => '_format',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\ArticleController::showAction',    '_format' => 'html',  ),  2 =>   array (    '_locale' => 'en|fr',    '_format' => 'html|rss',    'year' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => 'html|rss',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'slug',    ),    2 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'year',    ),    3 =>     array (      0 => 'variable',      1 => '/',      2 => 'en|fr',      3 => '_locale',    ),    4 =>     array (      0 => 'text',      1 => '/articles',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empresa_mostrarAll' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::listarTodasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empresas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empresa_mostrarUna' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::listarUnaAction',    'id' => 1,  ),  2 =>   array (    'id' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empresa',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'empresa_nombreEmpresa' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::nombreEmpresaAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/nombre',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'mensaje' => array (  0 =>   array (    0 => 'men',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::mensajeAction',    'men' => '',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'men',    ),    1 =>     array (      0 => 'text',      1 => '/mensaje',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contactar' => array (  0 =>   array (    0 => 'marca',  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::contactarAction',    'marca' => 'nike',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'marca',    ),    1 =>     array (      0 => 'text',      1 => '/contactar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'contactarAdidass' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\EmpresaController::contactarAdidasAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/contactarAdidas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
