<?php

namespace App\Entity;

use App\Repository\ParrainageRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParrainageRepository::class)
 */
class Parrainage
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="parrainage_id")
     */
    private $user_id;

    /**
     * @ORM\OneToMany(targetEntity=Club::class, mappedBy="parrainage_id")
     */
    private $club_id;

    public function __construct()
    {
        $this->user_id = new ArrayCollection();
        $this->club_id = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection|User[]
     */
    public function getUserId(): Collection
    {
        return $this->user_id;
    }

    public function addUserId(User $userId): self
    {
        if (!$this->user_id->contains($userId)) {
            $this->user_id[] = $userId;
            $userId->setParrainageId($this);
        }

        return $this;
    }

    public function removeUserId(User $userId): self
    {
        if ($this->user_id->removeElement($userId)) {
            // set the owning side to null (unless already changed)
            if ($userId->getParrainageId() === $this) {
                $userId->setParrainageId(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Club[]
     */
    public function getClubId(): Collection
    {
        return $this->club_id;
    }

    public function addClubId(Club $clubId): self
    {
        if (!$this->club_id->contains($clubId)) {
            $this->club_id[] = $clubId;
            $clubId->setParrainageId($this);
        }

        return $this;
    }

    public function removeClubId(Club $clubId): self
    {
        if ($this->club_id->removeElement($clubId)) {
            // set the owning side to null (unless already changed)
            if ($clubId->getParrainageId() === $this) {
                $clubId->setParrainageId(null);
            }
        }

        return $this;
    }
}
