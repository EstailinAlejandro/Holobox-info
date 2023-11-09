<?php

namespace App\Entity;

use App\Repository\CourseRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CourseRepository::class)]
class Course
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(type: Types::TEXT)]
    private ?string $description = null;

    #[ORM\Column(length: 255)]
    private ?string $level = null;

    #[ORM\Column(length: 255)]
    private ?string $duration = null;

    #[ORM\Column(length: 255)]
    private ?string $start = null;

    #[ORM\Column(length: 255)]
    private ?string $learningpath = null;

    #[ORM\Column(length: 255)]
    private ?string $crebonumber = null;

    #[ORM\ManyToOne(inversedBy: 'coourse')]
    private ?Branche $branche = null;

    #[ORM\ManyToMany(targetEntity: Location::class, inversedBy: 'courses')]
    private Collection $location;

    public function __construct()
    {
        $this->location = new ArrayCollection();
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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getLevel(): ?string
    {
        return $this->level;
    }

    public function setLevel(string $level): static
    {
        $this->level = $level;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): static
    {
        $this->duration = $duration;

        return $this;
    }

    public function getStart(): ?string
    {
        return $this->start;
    }

    public function setStart(string $start): static
    {
        $this->start = $start;

        return $this;
    }

    public function getLearningpath(): ?string
    {
        return $this->learningpath;
    }

    public function setLearningpath(string $learningpath): static
    {
        $this->learningpath = $learningpath;

        return $this;
    }

    public function getCrebonumber(): ?string
    {
        return $this->crebonumber;
    }

    public function setCrebonumber(string $crebonumber): static
    {
        $this->crebonumber = $crebonumber;

        return $this;
    }

    public function getBranche(): ?Branche
    {
        return $this->branche;
    }

    public function setBranche(?Branche $branche): static
    {
        $this->branche = $branche;

        return $this;
    }

    /**
     * @return Collection<int, location>
     */
    public function getLocation(): Collection
    {
        return $this->location;
    }

    public function addLocation(location $location): static
    {
        if (!$this->location->contains($location)) {
            $this->location->add($location);
        }

        return $this;
    }

    public function removeLocation(location $location): static
    {
        $this->location->removeElement($location);

        return $this;
    }
}
