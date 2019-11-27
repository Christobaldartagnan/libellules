<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class LibelluleController{

/**
 * @Route("/libellule")
 */
public function voler(){


    return new Response("La libéllule vient de s'envoler !!");
}





}