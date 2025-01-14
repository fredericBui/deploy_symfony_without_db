<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class RandomnumberController extends AbstractController{
    #[Route('/randomnumber', name: 'app_randomnumber')]
    public function index(): Response
    {
        return $this->render('randomnumber/index.html.twig', [
            'controller_name' => 'RandomnumberController',
        ]);
    }
}
