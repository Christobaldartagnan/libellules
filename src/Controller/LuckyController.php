<?php
// src/Controller/LuckyController.php
namespace App\Controller;

 use Symfony\Component\HttpFoundation\Response;

use Symfony\Component\Routing\Annotation\Route;
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
