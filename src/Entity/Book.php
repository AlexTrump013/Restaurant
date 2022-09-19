<?php

// api/src/Entity/Book.php
namespace App\Entity;

//use ApiPlatform\Metadata\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;


/** A book. */
#[ApiResource(mercure: true)]
#[ORM\Entity]

class Book
{
    /** The id of this book. */
    #[ORM\Id]
    #[ORM\Column(type: 'integer')]
    #[ORM\GeneratedValue]
    private ?int $id = null;

    /** The ISBN of this book (or null if doesn't have one). */
    public ?string $isbn = null;

    /** The title of this book. */
    public string $title = '';

    /** The description of this book. */
    public string $description = '';

    /** The author of this book. */
    public string $author = '';

    /** The publication date of this book. */
    public ?\DateTimeImmutable $publicationDate = null;

    public function getId(): ?int
    {
        return $this->id;
    }
}