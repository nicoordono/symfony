<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Contrebandier
 *
 * @ORM\Table(name="contrebandier")
 * @ORM\Entity
 */
class Contrebandier
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=100, nullable=false)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=100, nullable=false)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="nationnalite", type="string", length=10, nullable=false)
     */
    private $nationnalite;

    /**
     * @var string|null
     *
     * @ORM\Column(name="age", type="string", length=10, nullable=true)
     */
    private $age;

    /**
     * @var string|null
     *
     * @ORM\Column(name="sexe", type="string", length=10, nullable=true)
     */
    private $sexe;

    /**
     * @var string
     *
     * @ORM\Column(name="metier", type="string", length=100, nullable=false)
     */
    private $metier;

    /**
     * @var string|null
     *
     * @ORM\Column(name="domicile", type="string", length=100, nullable=true)
     */
    private $domicile;

    /**
     * @var string|null
     *
     * @ORM\Column(name="complice", type="string", length=100, nullable=true)
     */
    private $complice;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nb", type="string", length=3, nullable=true)
     */
    private $nb;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getNationnalite(): ?string
    {
        return $this->nationnalite;
    }

    public function setNationnalite(string $nationnalite): self
    {
        $this->nationnalite = $nationnalite;

        return $this;
    }

    public function getAge(): ?string
    {
        return $this->age;
    }

    public function setAge(?string $age): self
    {
        $this->age = $age;

        return $this;
    }

    public function getSexe(): ?string
    {
        return $this->sexe;
    }

    public function setSexe(?string $sexe): self
    {
        $this->sexe = $sexe;

        return $this;
    }

    public function getMetier(): ?string
    {
        return $this->metier;
    }

    public function setMetier(string $metier): self
    {
        $this->metier = $metier;

        return $this;
    }

    public function getDomicile(): ?string
    {
        return $this->domicile;
    }

    public function setDomicile(?string $domicile): self
    {
        $this->domicile = $domicile;

        return $this;
    }

    public function getComplice(): ?string
    {
        return $this->complice;
    }

    public function setComplice(?string $complice): self
    {
        $this->complice = $complice;

        return $this;
    }

    public function getNb(): ?string
    {
        return $this->nb;
    }

    public function setNb(?string $nb): self
    {
        $this->nb = $nb;

        return $this;
    }


}
