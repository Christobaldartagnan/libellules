<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class LuckyController extends AbstractController
{
    /*
    *@Route("lucky/number",mame="number")
    */
    public function number()
    {
        
        $number = random_int(0, 100);

        return new Response(
            '<html><body>Lucky number: '.$number.'</body></html>'
        );
    }

    /**
     * @Route("/lucky/accueil/{slug}", name="app_lucky_accueil")
     */
    public function accueil($slug)

    {   
        

        $comments=["Les Libellules","Les Arbres","Les Oiseaux"];
        // return new Response(sprintf('<html><body> BIENVENUE DANS LA NATURE % s !!</body></html>',$slug));
                
        
        return $this->render('article/show.html.twig',[
               'title'=> ucwords(str_replace('-',' ',$slug)),
               'slug'=>$slug,
               'comments'=>$comments,
           ]) ;
        
    }

    
    public function asteroide(){
        $comments=["Les Libellules","Les Arbres","Les Oiseaux"];
        return $this->render('article/show.html.twig',[
            'title'=> 'Astéroides  taste like honey',
            
            'comments'=>$comments,
        ]);

    }


    public function bienvenu()
    {
        $comments=["Les Libellules","Les Arbres","Les Oiseaux"];       
        
        return $this->render('article/homepage.html.twig') ;
    }


    /**
     * @Route("/lucky/accueil/{slug}/heart", name="app_lucky_heart",methods={"POST"})
     */
    public function toggleArticleHeart($slug, LoggerInterface $logger){

        $logger->info("l'article a été liké !");

        return $this->json(['hearts'=>rand(5,100)]);


    }
    
}
