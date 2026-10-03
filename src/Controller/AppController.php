<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

#[Route('/app', name: 'app', methods: 'GET')]
class AppController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->render('app/index.html.twig');
    }
}
