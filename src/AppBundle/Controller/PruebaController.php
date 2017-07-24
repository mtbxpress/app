<?php
// src/AppBundle/Controller/BlogController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class PruebaController extends Controller
{

    /**   
     *
     * @Route("/prueba", name="prueba_show")
     */
    

    public function showAction()
    {
        return new Response(
            '<html><body>Lucky 2 number: </body></html>'
        );
/*formatos que coinciden
/articles/en/2010/my-post
/articles/fr/2010/my-post.rss
/articles/en/2013/my-latest-post.html
*/        
    }

}