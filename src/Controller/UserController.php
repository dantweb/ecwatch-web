<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'get_user_data', methods: ['GET'])]
    public function getUserData(): JsonResponse
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
