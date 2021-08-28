<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BanquesRepository;
use ApiPlatform\Core\Annotation\ApiResource;

/**
 * @ORM\Entity(repositoryClass=BanquesRepository::class)
 */
#[ApiResource(
    itemOperations:[
        'get',
        'put' => [
            'denormalization_context' => [
                'groups' => ['put:banques']
            ]
        ]
    ],
    collectionOperations: [
        'get' => ['normalization_context'=> ['groups' => 'read:banques']]
    ]
)] 
 class Banques
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $operateur;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $localite;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $latitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $longitude;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jours_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heurs_ouverture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $heur_fermiture;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $adresse;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getOperateur(): ?string
    {
        return $this->operateur;
    }

    public function setOperateur(?string $operateur): self
    {
        $this->operateur = $operateur;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(?string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getLatitude(): ?string
    {
        return $this->latitude;
    }

    public function setLatitude(?string $latitude): self
    {
        $this->latitude = $latitude;

        return $this;
    }

    public function getLongitude(): ?string
    {
        return $this->longitude;
    }

    public function setLongitude(?string $longitude): self
    {
        $this->longitude = $longitude;

        return $this;
    }

    public function getJoursOuverture(): ?string
    {
        return $this->jours_ouverture;
    }

    public function setJoursOuverture(?string $jours_ouverture): self
    {
        $this->jours_ouverture = $jours_ouverture;

        return $this;
    }

    public function getHeursOuverture(): ?string
    {
        return $this->heurs_ouverture;
    }

    public function setHeursOuverture(?string $heurs_ouverture): self
    {
        $this->heurs_ouverture = $heurs_ouverture;

        return $this;
    }

    public function getHeurFermiture(): ?string
    {
        return $this->heur_fermiture;
    }

    public function setHeurFermiture(?string $heur_fermiture): self
    {
        $this->heur_fermiture = $heur_fermiture;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }
}
