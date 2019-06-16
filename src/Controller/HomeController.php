<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{   
   
    /**
     * @Route("/", name="homepage")
     */
    public function home()
    {

        $prenoms = ["Lior" => 32 , "Joseph" => 12, "Anne" => 55];
        //return new Response ('Hello  !');
         return $this->render(
            'home.html.twig',
            [
                'title' => "Bonjour à tous !",
                'age' => 22,
                'tableau' => $prenoms
            ]
        );
    }

     /**
     * @Route("/hello/{prenom}", name="hello_base")
     * @Route("/hello", name="hello_base")
     * 
     * @Route("/hello/{prenom}", name="hello_prenom")
     * Montre la page qui dit bonjour
     * 
     * @return void
     */
    public function hello($prenom = "anonyme", $age = 0)
        {
            return $this->render(
                'hello.html.twig', [
                    'prenom' => $prenom,
                    'age'  => $age
                ]
            );
    }


}
