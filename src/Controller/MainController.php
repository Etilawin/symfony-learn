<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class MainController extends Controller
{

    /**
     * @Route("/main", name="main_home")
     */
    public function index()
    {
     return $this->redirectToRoute('main_generate', array($max => 10));
    }


    /**
     * @Route("/main/{max}", name="main_generate", requirements={"max"="\d+"})
     */
    public function generate($max)
    {

        $random = mt_rand(0, $max);

        return $this->render('main/index.html.twig', [
            'controller_name' => 'MainController',
            'value'           => $random,
            'max'             => $max,
        ]);
    }
}
