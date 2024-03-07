<?php

namespace App\Entity;

use App\Repository\PharmacieRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PharmacieRepository::class)]
class Pharmacie
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nomPharmacie = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomPharmacie(): ?string
    {
        return $this->nomPharmacie;
    }

    public function setNomPharmacie(string $nomPharmacie): static
    {
        $this->nomPharmacie = $nomPharmacie;

        return $this;
    }
}
