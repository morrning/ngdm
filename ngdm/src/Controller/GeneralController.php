<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class GeneralController extends AbstractController
{
    #[Route('/', name: 'ngcoin_root')]
    public function ngcoin_root(): JsonResponse
    {
        return $this->json([
            'message' => 'NGDM: Next Generation Digital Money!',
            'path' => '/',
        ]);
    }
}
