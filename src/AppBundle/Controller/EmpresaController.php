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
        /*$repositorio = $this->getDoctrine()->getRepository('AppBundle:Empresa');
        $empresas = $repositorio->findAll();
        */
        $empresas = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findAll();

        return $this->render('empresa/mostrarAllEmp.html.twig',array("empresas"=>$empresas));          
    }


    public function listarUnaAction($id) //no necesario poner id por defecto si lo pongo por defecto en el routing
    {
        $repositorio = $this->getDoctrine()->getRepository('AppBundle:Empresa');
        $empresa = $repositorio->find($id);
        if (!$empresa) {
            throw $this->createNotFoundException(
                'No se encuentra la empresa con id = '.$id
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
        public function nombreEmpresaAction(){
            return $this->listarTodasAction();
         //   return $this->render('empresa/mostrarAllEmp.html.twig');
        }  

        public function mensajeAction($men = "hola"){
            return new Response('<html><head></head><body>mensajee: '.$men.'</body></html>');
         //   return $this->render('empresa/mostrarAllEmp.html.twig');
        }  

        public function contactarAction($marca){
            if($marca == 'adidas'){
                return $this->redirect($this->generateUrl('contactarAdidass'));
            }
            elseif ($marca == 'nike') {
                return $this->redirect('http://www.nike.es');
            }
            elseif ($marca == 'reebok') {
                return $this->redirect('http://www.reebok.es');    
            }
            else {
                throw $this->createNotFoundException("Te has equivocado. No existe");
            }

        }   
        public function contactarAdidasAction(){
            return $this->render('empresa/contactarAdidas.html.twig');
        }                            
}