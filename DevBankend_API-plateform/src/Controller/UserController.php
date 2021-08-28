<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user/login', name: 'api_token')]
    public function getToken(): Response
    {
        return $this->json(['property'=>'value'],200);
    }
}
