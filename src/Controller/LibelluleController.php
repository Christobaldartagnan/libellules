<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LibelluleController extends AbstractController{

/**
 * @Route("/libellule")
 */
public function voler(){


    return new Response("La libéllule vient de s'envoler !!");
}





}