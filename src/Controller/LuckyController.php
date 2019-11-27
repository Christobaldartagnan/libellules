<?php
// src/Controller/LuckyController.php
namespace App\Controller;

 use Symfony\Component\HttpFoundation\Response;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
class LuckyController
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
        return new Response(sprintf('<html><body> BIENVENUE DANS LA NATURE % s !!</body></html>',$slug)
            
        );
    }
    public function bienvenu()
    {
        return new Response('<html><body> BIENVENUE DANS LA NATURE !!</body></html>'
            
        );
    }
    
}
