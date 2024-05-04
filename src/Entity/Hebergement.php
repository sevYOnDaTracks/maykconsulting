<?php

namespace App\Entity;

use App\Repository\HebergementRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: HebergementRepository::class)]
class Hebergement
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $documentFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\OneToOne(inversedBy: 'hebergement', targetEntity: User::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?int $statutDemande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $villeEtude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pathPassport = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pathAdmissionFile = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $informations = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $justificatifPaiement = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $lastUpdate = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hebergementFile = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $dateDemande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocumentFile(): ?string
    {
        return $this->documentFile;
    }

    public function setDocumentFile(?string $documentFile): static
    {
        $this->documentFile = $documentFile;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): static
    {
        $this->pays = $pays;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): static
    {
        $this->user = $user;

        return $this;
    }

    public function getStatutDemande(): ?int
    {
        return $this->statutDemande;
    }

    public function setStatutDemande(?int $statutDemande): static
    {
        $this->statutDemande = $statutDemande;

        return $this;
    }

    public function getVilleEtude(): ?string
    {
        return $this->villeEtude;
    }

    public function setVilleEtude(?string $villeEtude): static
    {
        $this->villeEtude = $villeEtude;

        return $this;
    }

    public function getPathPassport(): ?string
    {
        return $this->pathPassport;
    }

    public function setPathPassport(?string $pathPassport): static
    {
        $this->pathPassport = $pathPassport;

        return $this;
    }

    public function getPathAdmissionFile(): ?string
    {
        return $this->pathAdmissionFile;
    }

    public function setPathAdmissionFile(?string $pathAdmissionFile): static
    {
        $this->pathAdmissionFile = $pathAdmissionFile;

        return $this;
    }

    public function getInformations(): ?string
    {
        return $this->informations;
    }

    public function setInformations(?string $informations): static
    {
        $this->informations = $informations;

        return $this;
    }

    public function getJustificatifPaiement(): ?string
    {
        return $this->justificatifPaiement;
    }

    public function setJustificatifPaiement(?string $justificatifPaiement): static
    {
        $this->justificatifPaiement = $justificatifPaiement;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->lastUpdate;
    }

    public function setLastUpdate(?\DateTimeInterface $lastUpdate): static
    {
        $this->lastUpdate = $lastUpdate;

        return $this;
    }

    public function getHebergementFile(): ?string
    {
        return $this->hebergementFile;
    }

    public function setHebergementFile(?string $hebergementFile): static
    {
        $this->hebergementFile = $hebergementFile;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->dateDemande;
    }

    public function setDateDemande(?\DateTimeInterface $dateDemande): static
    {
        $this->dateDemande = $dateDemande;

        return $this;
    }
}
