<?php
// src/AppBundle/Controller/BlogsController.php
namespace AppBundle\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class BlogsController extends Controller
{
    /**
     * @Route("/blogs/{page}", name="blog2_list", requirements={"page": "\d+"})
     */
    public function listAction($page=1)
    {
        return new Response(
            '<html><body>sssshowing page number: '.$page.'</body></html>'
        );
    }
    /**
     * @Route("/blogs/{title}", name="blog2_read", requirements={"title": "\S+"})
     */
    public function readAction($title)
    {
        return new Response(
            '<html><body>Showinghhhhhhhhhh post:'.$title.'</body></html>'
        );
    }
}