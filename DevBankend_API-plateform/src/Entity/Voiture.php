<?php

namespace App\Entity;

use App\Repository\VoitureRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=VoitureRepository::class)
 */
class Voiture
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $matricule;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $marque;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $model;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $assurance;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $carte_grise;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $pneu_secours;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMatricule(): ?string
    {
        return $this->matricule;
    }

    public function setMatricule(string $matricule): self
    {
        $this->matricule = $matricule;

        return $this;
    }

    public function getMarque(): ?string
    {
        return $this->marque;
    }

    public function setMarque(string $marque): self
    {
        $this->marque = $marque;

        return $this;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getAssurance(): ?string
    {
        return $this->assurance;
    }

    public function setAssurance(?string $assurance): self
    {
        $this->assurance = $assurance;

        return $this;
    }

    public function getCarteGrise(): ?string
    {
        return $this->carte_grise;
    }

    public function setCarteGrise(string $carte_grise): self
    {
        $this->carte_grise = $carte_grise;

        return $this;
    }

    public function getPneuSecours(): ?int
    {
        return $this->pneu_secours;
    }

    public function setPneuSecours(?int $pneu_secours): self
    {
        $this->pneu_secours = $pneu_secours;

        return $this;
    }
}
