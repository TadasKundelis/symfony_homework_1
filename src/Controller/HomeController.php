<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function index()
    {
        $teams = json_decode(file_get_contents(__DIR__.'/../../public/data.json'), true);
        return $this->render('home/index.html.twig', [
            'teams' => $teams
        ]);
    }
}
