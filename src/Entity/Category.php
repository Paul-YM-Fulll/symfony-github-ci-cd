<?php

namespace App\Entity;

use ApiPlatform\Metadata\ApiFilter;
use ApiPlatform\Metadata\ApiResource;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Doctrine\Orm\Filter\OrderFilter;
use App\Repository\CategoryRepository;
use Doctrine\ORM\Mapping as ORM;

#[ApiResource(
    normalizationContext: [ 'groups' => ['category:read']],
    denormalizationContext: [ 'groups' => ['category:write']],
)]
#[ApiFilter(OrderFilter::class, properties: ['name'])]
#[ORM\Entity(repositoryClass: CategoryRepository::class)]
class Category
{
    #[Groups(['category:read'])]
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[Assert\NotBlank()]
    #[Groups(['category:read', 'book', 'category:write'])]
    #[ORM\Column(length: 255)]
    private ?string $name = null;

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
}
