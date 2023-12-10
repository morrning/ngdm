<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class PeerController extends AbstractController
{
    #[Route('/peer', name: 'ng_peer')]
    public function ng_peer(LoggerInterface $logger,Request $request): JsonResponse
    {
        $logger->debug('User {userId} has logged in', [
            'userId' => 12,
        ]);
        return $this->json([
            'host' => $request->getHost(),
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/PeerController.php',
        ]);
    }
}
