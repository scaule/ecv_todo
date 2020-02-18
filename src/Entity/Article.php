<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @Assert\NotBlank
     * @Assert\Length(min=3)
     * @ORM\Column(type="text")
     */
    private $content;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $a;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $b;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $c;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $d;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $e;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $f;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $r;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $t;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getA(): ?string
    {
        return $this->a;
    }

    public function setA(string $a): self
    {
        $this->a = $a;

        return $this;
    }

    public function getB(): ?string
    {
        return $this->b;
    }

    public function setB(string $b): self
    {
        $this->b = $b;

        return $this;
    }

    public function getC(): ?string
    {
        return $this->c;
    }

    public function setC(string $c): self
    {
        $this->c = $c;

        return $this;
    }

    public function getD(): ?string
    {
        return $this->d;
    }

    public function setD(string $d): self
    {
        $this->d = $d;

        return $this;
    }

    public function getE(): ?string
    {
        return $this->e;
    }

    public function setE(string $e): self
    {
        $this->e = $e;

        return $this;
    }

    public function getF(): ?string
    {
        return $this->f;
    }

    public function setF(string $f): self
    {
        $this->f = $f;

        return $this;
    }

    public function getR(): ?string
    {
        return $this->r;
    }

    public function setR(string $r): self
    {
        $this->r = $r;

        return $this;
    }

    public function getT(): ?string
    {
        return $this->t;
    }

    public function setT(string $t): self
    {
        $this->t = $t;

        return $this;
    }
}
