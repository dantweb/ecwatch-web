<?php

declare(strict_types=1);

namespace Dantweb\EcwServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class ApiController extends AbstractController
{
    #[Route('/api/test', name: 'api_test', methods: ['GET', 'POST'])]
    public function test(Request $request): JsonResponse
    {
        if ($request->isMethod('POST')) {
            $data = $request->request->all();
            return new JsonResponse([
                'status' => 'success',
                'method' => 'POST',
                'data' => $data
            ]);
        }

        return new JsonResponse([
            'status' => 'success',
            'method' => 'GET',
            'data' => null
        ]);
    }
}
