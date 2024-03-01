<?php

namespace App\Entity;

use App\Repository\FamilleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: FamilleRepository::class)]
class Famille
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'familles')]
    private ?domaine $domaine = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDomaine(): ?domaine
    {
        return $this->domaine;
    }

    public function setDomaine(?domaine $domaine): static
    {
        $this->domaine = $domaine;

        return $this;
    }
}
