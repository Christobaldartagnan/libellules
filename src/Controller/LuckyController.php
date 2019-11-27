<?php
// src/Controller/LuckyController.php
namespace App\Controller;

 use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /*
    *@Route("lucky/number")
    */
    public function number()
    {
        
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/accueil/{slug}")
     */
    public function accueil($slug)


    {

        $comments=["Les Libellules","Les Arbres","Les Oiseaux"];
        // return new Response(sprintf('<html><body> BIENVENUE DANS LA NATURE % s !!</body></html>',$slug));
           return $this->render('article/show.html.twig',[
               'title'=> ucwords(str_replace('-',' ',$slug)),
               'comments'=>$comments,
           ]) ;
        
    }
    public function bienvenu()
    {
        return new Response('<html><body> BIENVENUE DANS LA NATURE !!</body></html>'
            
        );
    }
    
}
