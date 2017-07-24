<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class ArticleController extends Controller
{
    /**
     * @Route(
     *     "/articles/{_locale}/{year}/{slug}.{_format}",
     *     defaults={"_format": "html"},
     *     requirements={
     *         "_locale": "en|fr",
     *         "_format": "html|rss",
     *         "year": "\d+"
     *     }
     * )
     */

    

    public function showAction($_locale, $year, $slug)
    {
        return new Response(
            '<html><body>SHOW ACTION article controller:'.$_locale.' / '.$year. ' / ' .$slug. '</body></html>'
        );        
/*formatos que coinciden
/articles/en/2010/my-post
/articles/fr/2010/my-post.rss
/articles/en/2013/my-latest-post.html
*/        
    }
}