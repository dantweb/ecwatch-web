<?php

// app/web/src/Controller/DataController.php


namespace Dantweb\EcwServer\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DataController extends AbstractController
{
    #[Route('/data', name: 'get_data', methods: ['GET'])]
    public function getData(): JsonResponse
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
