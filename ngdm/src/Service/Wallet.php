<?php

namespace App\Service;

use Doctrine\ORM\EntityManagerInterface;

class Wallet
{
    private EntityManagerInterface $em;
    public function __construct(EntityManagerInterface  $entityManager,)
    {
        $this->em = $entityManager;
    }

}