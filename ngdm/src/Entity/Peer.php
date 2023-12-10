<?php

namespace App\Entity;

use App\Repository\PeerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PeerRepository::class)]
class Peer
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $hostname = null;

    #[ORM\Column(type: Types::BIGINT, nullable: true)]
    private ?string $port = null;

    #[ORM\Column(length: 25, nullable: true)]
    private ?string $lastSignal = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getHostname(): ?string
    {
        return $this->hostname;
    }

    public function setHostname(string $hostname): static
    {
        $this->hostname = $hostname;

        return $this;
    }

    public function getPort(): ?string
    {
        return $this->port;
    }

    public function setPort(?string $port): static
    {
        $this->port = $port;

        return $this;
    }

    public function getLastSignal(): ?string
    {
        return $this->lastSignal;
    }

    public function setLastSignal(?string $lastSignal): static
    {
        $this->lastSignal = $lastSignal;

        return $this;
    }
}
