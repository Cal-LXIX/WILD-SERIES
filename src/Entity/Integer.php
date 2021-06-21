<?php

namespace App\Entity;

use App\Repository\IntegerRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=IntegerRepository::class)
 * @ORM\Table(name="`integer`")
 */
class Integer
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    public function getId(): ?int
    {
        return $this->id;
    }
}
