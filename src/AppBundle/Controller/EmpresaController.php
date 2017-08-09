<?php
// src/AppBundle/Controller/EmpresaController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;
use AppBundle\Entity\Empresa;
use AppBundle\Form\EmpresaType;

//use AppBundle\Entity\Empresa;

use Symfony\Component\HttpFoundation\Request;



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
                return $this->redirect($this->generateUrl('contactarAdidasss'));
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

        public function crearEmpresaAction(){

            //objeto tipo empresa
            $empresa = new Empresa();
            $empresa->setNombreEmpresa("Assics");
            $empresa->setCiudadEmpresa("Suiza");
            $empresa->setFechaInsercion(new \DateTime("now"));
            $empresa->setComentarioEmpresa("Comentario assics");
            //doctrine
            $managerDoctrine = $this->getDoctrine()->getManager();
            $managerDoctrine->persist($empresa);
            $managerDoctrine->flush($empresa);

            //MOSTRAR LA EMPRESA RECIEN CREADA
            return $this->render('empresa/mostrarUnaEmp.html.twig',array("empresa"=>$empresa));

            //MOSTRAR TODAS LAS EMPRESAS
          /*  $empresas = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findAll();
            return $this->render('empresa/mostrarAllEmp.html.twig',array("empresas"=>$empresas));   
            */         
        }  
        public function buscarEmpresaAction($id){

            $empresa = $this->getDoctrine()->getRepository('AppBundle:Empresa')->find($id);

            return $this->render('empresa/mostrarUnaEmp.html.twig',array("empresa"=>$empresa));
        }  

        public function buscarEmpresaPorNombreAction($nombre){

            $empresa = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findOneByNombreEmpresa($nombre);

    //        $empresa = $this->getDoctrine()->getRepository('AppBundle:Empresa')->findOneByCiudadEmpresa($nombre);   findOneById ....       

            return $this->render('empresa/mostrarUnaEmp.html.twig',array("empresa"=>$empresa));
        }   

        public function crearEmpresaFormularioAction(){
   
            $form = $this->createForm(EmpresaType::class);
            return $this->render('empresa/formCrear.html.twig',array('form'=>$form->createView())); //SI PONGO array("$form"=> DOBLES COMILLAS DA ERROR
        }  

        public function recuperarValoresFormularioAction(Request $request){

            $empresa = new Empresa();
            $form =$this->createForm(EmpresaType::class,$empresa);

            $form->handleRequest($request);
            if($form->isSubmitted() && $form->isValid()){
                // $form->getData() holds the submitted values
                // but, the original `$task` variable has also been updated
                $empresa = $form->getData();            

                // ... perform some action, such as saving the task to the database
                // for example, if Task is a Doctrine entity, save it!
                 $em = $this->getDoctrine()->getManager();

                 $em->persist($empresa);                 
                 $em->flush();
                 echo "EXITO";
             //    return $this->redirectToRoute('index.php');

            }
            return $this->render('empresa/formCrear.html.twig',array('form'=>$form->createView()));            

        }        

        public function empresaContAction(){
            return new Response('<html><head></head><body>mensajee: </body></html>'); 
        }

                                                        
}