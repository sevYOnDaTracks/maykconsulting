<?php

namespace App\Entity;

use App\Repository\PublicMessageRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PublicMessageRepository::class)]
class PublicMessage
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $senderName = null;

    #[ORM\Column(length: 255)]
    private ?string $senderEmail = null;

    #[ORM\Column(length: 1500)]
    private ?string $senderMessage = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $dateTimeReception = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $senderObject = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSenderName(): ?string
    {
        return $this->senderName;
    }

    public function setSenderName(string $senderName): static
    {
        $this->senderName = $senderName;

        return $this;
    }

    public function getSenderEmail(): ?string
    {
        return $this->senderEmail;
    }

    public function setSenderEmail(string $senderEmail): static
    {
        $this->senderEmail = $senderEmail;

        return $this;
    }

    public function getSenderMessage(): ?string
    {
        return $this->senderMessage;
    }

    public function setSenderMessage(string $senderMessage): static
    {
        $this->senderMessage = $senderMessage;

        return $this;
    }

    public function getDateTimeReception(): ?\DateTimeInterface
    {
        return $this->dateTimeReception;
    }

    public function setDateTimeReception(\DateTimeInterface $dateTimeReception): static
    {
        $this->dateTimeReception = $dateTimeReception;

        return $this;
    }

    public function getSenderObject(): ?string
    {
        return $this->senderObject;
    }

    public function setSenderObject(?string $senderObject): static
    {
        $this->senderObject = $senderObject;

        return $this;
    }
}
