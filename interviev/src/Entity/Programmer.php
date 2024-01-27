<?php

declare(strict_types=1);

namespace App\Entity;

use App\Repository\ProgrammerRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProgrammerRepository::class)]
class Programmer
{
    const RESOURCE_KEY = 'programmer';

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $surname = null;

    #[ORM\Column(type: Types::DATE_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $day_of_birth = null;

    #[ORM\Column(nullable: true)]
    private ?int $height = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $link_to_github = null;

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

    public function getSurname(): ?string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): static
    {
        $this->surname = $surname;

        return $this;
    }

    public function getDayOfBirth(): ?\DateTimeInterface
    {
        return $this->day_of_birth;
    }

    public function setDayOfBirth(?\DateTimeInterface $day_of_birth): static
    {
        $this->day_of_birth = $day_of_birth;

        return $this;
    }

    public function getHeight(): ?int
    {
        return $this->height;
    }

    public function setHeight(?int $height): static
    {
        $this->height = $height;

        return $this;
    }

    public function getLinkToGithub(): ?string
    {
        return $this->link_to_github;
    }

    public function setLinkToGithub(?string $link_to_github): static
    {
        $this->link_to_github = $link_to_github;

        return $this;
    }
}
