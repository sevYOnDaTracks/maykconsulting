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
    private ?string $document_file = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pays = null;

    #[ORM\OneToOne(inversedBy: 'hebergement', targetEntity: User::class, cascade: ['persist'])]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $user = null;

    #[ORM\Column(nullable: true)]
    private ?int $statut_demande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $ville_etude = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path_passport = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $path_admission_file = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $informations = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $justificatif_paiement = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $last_update = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $hebergement_file = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_demande = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDocumentFile(): ?string
    {
        return $this->document_file;
    }

    public function setDocumentFile(?string $document_file): static
    {
        $this->document_file = $document_file;

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
        return $this->statut_demande;
    }

    public function setStatutDemande(?int $statut_demande): static
    {
        $this->statut_demande = $statut_demande;

        return $this;
    }

    public function getVilleEtude(): ?string
    {
        return $this->ville_etude;
    }

    public function setVilleEtude(?string $ville_etude): static
    {
        $this->ville_etude = $ville_etude;

        return $this;
    }

    public function getPathPassport(): ?string
    {
        return $this->path_passport;
    }

    public function setPathPassport(?string $path_passport): static
    {
        $this->path_passport = $path_passport;

        return $this;
    }

    public function getPathAdmissionFile(): ?string
    {
        return $this->path_admission_file;
    }

    public function setPathAdmissionFile(?string $path_admission_file): static
    {
        $this->path_admission_file = $path_admission_file;

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
        return $this->justificatif_paiement;
    }

    public function setJustificatifPaiement(?string $justificatif_paiement): static
    {
        $this->justificatif_paiement = $justificatif_paiement;

        return $this;
    }

    public function getLastUpdate(): ?\DateTimeInterface
    {
        return $this->last_update;
    }

    public function setLastUpdate(?\DateTimeInterface $last_update): static
    {
        $this->last_update = $last_update;

        return $this;
    }

    public function getHebergementFile(): ?string
    {
        return $this->hebergement_file;
    }

    public function setHebergementFile(?string $hebergement_file): static
    {
        $this->hebergement_file = $hebergement_file;

        return $this;
    }

    public function getDateDemande(): ?\DateTimeInterface
    {
        return $this->date_demande;
    }

    public function setDateDemande(?\DateTimeInterface $date_demande): static
    {
        $this->date_demande = $date_demande;

        return $this;
    }
}
