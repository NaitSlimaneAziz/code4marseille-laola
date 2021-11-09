<?php

namespace App\Entity;

use App\Repository\ClubRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClubRepository::class)
 */
class Club
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, mappedBy="user_id")
     */
    private $users;

    /**
     * @ORM\ManyToOne(targetEntity=Parrainage::class, inversedBy="club_id")
     */
    private $parrainage_id;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getClubName(): ?string
    {
        return $this->club_name;
    }

    public function setClubName(string $club_name): self
    {
        $this->club_name = $club_name;

        return $this;
    }

    public function getParrainageId(): ?Parrainage
    {
        return $this->parrainage_id;
    }

    public function setParrainageId(?Parrainage $parrainage_id): self
    {
        $this->parrainage_id = $parrainage_id;

        return $this;
    }
}
