<?php

namespace App\Entity;

use App\Repository\ReleveRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReleveRepository::class)
 */
class Releve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=Lieu::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Lieu;

    /**
     * @ORM\Column(type="date")
     */
    private $date;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $releve_brut;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLieu(): ?Lieu
    {
        return $this->Lieu;
    }

    public function setLieu(?Lieu $Lieu): self
    {
        $this->Lieu = $Lieu;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getReleveBrut(): ?string
    {
        return $this->releve_brut;
    }

    public function setReleveBrut(string $releve_brut): self
    {
        $this->releve_brut = $releve_brut;

        return $this;
    }
}
