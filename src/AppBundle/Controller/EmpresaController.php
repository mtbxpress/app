<?php
// src/AppBundle/Controller/EmpresaController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;


class EmpresaController extends Controller
{
    /**
     * @Route("/empresa", name="empresa_mostrarAll")
     */
    public function listarTodasAction() 
    {
        $repositorio = $this->getDoctrine()->getRepository('AppBundle:Empresa');
        $empresas = $repositorio->findAll();


        return $this->render('empresa/mostrarAllEmp.html.twig',array("empresas"=>$empresas));          
    }
}