<?php
// src/AppBundle/Controller/EmpresaController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class EmpresaController extends Controller
{
    /**
     * @Route("/empresas", name="empresa_mostrarAll")
     */
    public function listarTodasAction() 
    {
        $repositorio = $this->getDoctrine()->getRepository('AppBundle:Empresa');
        $empresas = $repositorio->findAll();


        return $this->render('empresa/mostrarAllEmp.html.twig',array("empresas"=>$empresas));          
    }


    public function listarUnaAction($page = 1) 
    {
        $repositorio = $this->getDoctrine()->getRepository('AppBundle:Empresa');
        $empresa = $repositorio->find($page);
        if (!$empresa) {
            throw $this->createNotFoundException(
                'No se encuentra la empresa con id = '.$page
            );
        }
        else{
            return $this->render('empresa/mostrarUnaEmp.html.twig',array("empresa"=>$empresa));          
        }

/*        return new Response(
            '<html><body>LIST ACTION '.$id.'</body></html>'
        );        
*/
    }    
}