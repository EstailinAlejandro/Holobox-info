<?php

namespace App\Entity;

use App\Repository\BrancheRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BrancheRepository::class)]
class Branche
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\OneToMany(mappedBy: 'branche', targetEntity: Course::class)]
    private Collection $coourse;

    public function __construct()
    {
        $this->coourse = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    /**
     * @return Collection<int, Course>
     */
    public function getCoourse(): Collection
    {
        return $this->coourse;
    }

    public function addCoourse(Course $coourse): static
    {
        if (!$this->coourse->contains($coourse)) {
            $this->coourse->add($coourse);
            $coourse->setBranche($this);
        }

        return $this;
    }

    public function removeCoourse(Course $coourse): static
    {
        if ($this->coourse->removeElement($coourse)) {
            // set the owning side to null (unless already changed)
            if ($coourse->getBranche() === $this) {
                $coourse->setBranche(null);
            }
        }

        return $this;
    }
}
