<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ClientParticulierRepository;
use Symfony\Component\Serializer\Annotation\Groups;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 *  @ApiResource(
 *     collectionOperations={
 *      "get"={},
 *      "post"={},
 *     },
 *     itemOperations={
 *       "get"={},
 *       "put"={},
 *       "delete"={},
 *     }
 * )
 * @ApiFilter(SearchFilter::class, properties={"id": "exact"})
 * @ORM\Entity(repositoryClass=ClientParticulierRepository::class)
 */
class ClientParticulier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     * 
     * @Groups("article:read")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=15)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $adresse;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $cin;

    /**
     * @ORM\Column(type="date")
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $validite_cin;

    /**
     * @ORM\Column(type="string", length=255)
     * 
     * @Groups({"article:read", "article:write"})
     */
    private $activite;

    public function __construct()
    {
        
    }

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCin(): ?string
    {
        return $this->cin;
    }

    public function setCin(string $cin): self
    {
        $this->cin = $cin;

        return $this;
    }

    public function getValiditeCin(): ?\DateTimeInterface
    {
        return $this->validite_cin;
    }

    public function setValiditeCin(\DateTimeInterface $validite_cin): self
    {
        $this->validite_cin = $validite_cin;

        return $this;
    }

    public function getActivite(): ?string
    {
        return $this->activite;
    }

    public function setActivite(string $activite): self
    {
        $this->activite = $activite;

        return $this;
    }

}
