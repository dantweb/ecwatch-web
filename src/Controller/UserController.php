<?php

// app/web/src/Controller/UserController.php


namespace Dantweb\EcwServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'get_data', methods: ['GET'])]
    public function getUserData(): ?JsonResponse
    {
        return new JsonResponse([
            'status' => 'success',
            'data' => [
                'message' => 'Hello from Symfony Docker!',
                'timestamp' => time(),
            ],
        ]);
    }
}
