<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class CustomApiController extends AbstractController
{
    #[Route('/test', name: 'get_test', methods: ['GET'])]
    public function test(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'success',
            'message' => 'Test endpoint working',
            'method' => 'GET'
        ]);
    }

    #[Route('/login', name: 'get_login', methods: ['GET'])]
    public function login(): JsonResponse
    {
        return new JsonResponse([
            'status' => 'success',
            'message' => 'Login endpoint',
            'method' => 'GET'
        ]);
    }

    #[Route('/get/users/', name: 'get_users', methods: ['GET'])]
    public function getUsers(): JsonResponse
    {
        // Dummy data for users
        $users = [
            ['id' => 1, 'name' => 'Alice'],
            ['id' => 2, 'name' => 'Bob']
        ];

        return new JsonResponse([
            'status' => 'success',
            'users' => $users
        ]);
    }

    #[Route('/put/user', name: 'put_user', methods: ['PUT'])]
    public function putUser(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        
        // Process new user data (e.g., validate and save)
        // For now, just return the received data
        
        return new JsonResponse([
            'status' => 'success',
            'message' => 'User updated',
            'data' => $data
        ]);
    }
}
