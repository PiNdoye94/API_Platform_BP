<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteCourantRepository;
use ApiPlatform\Core\Annotation\ApiFilter;
use ApiPlatform\Core\Bridge\Doctrine\Orm\Filter\SearchFilter;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource(
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
 * @ApiFilter(SearchFilter::class, properties={"id": "exact","num_compte"="exact"})
 * @ORM\Entity(repositoryClass=CompteCourantRepository::class)
 */
class CompteCourant
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=16)
     */
    private $num_compte;
    /**
     * @ORM\Column(type="integer", length=2)
     */
    private $cle_rib;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_agence;
    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom_employeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $rs_employeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $id_employeur;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $adresse_employeur;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_ouverture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEmployeur(): ?string
    {
        return $this->nom_employeur;
    }

    public function setNomEmployeur(string $nom_employeur): self
    {
        $this->nom_employeur = $nom_employeur;

        return $this;
    }

    public function getRsEmployeur(): ?string
    {
        return $this->rs_employeur;
    }

    public function setRsEmployeur(string $rs_employeur): self
    {
        $this->rs_employeur = $rs_employeur;

        return $this;
    }

    public function getIdEmployeur(): ?string
    {
        return $this->id_employeur;
    }

    public function setIdEmployeur(string $id_employeur): self
    {
        $this->id_employeur = $id_employeur;

        return $this;
    }

    public function getAdresseEmployeur(): ?string
    {
        return $this->adresse_employeur;
    }

    public function setAdresseEmployeur(string $adresse_employeur): self
    {
        $this->adresse_employeur = $adresse_employeur;

        return $this;
    }

    public function getSolde(): ?int
    {
        return $this->solde;
    }

    public function setSolde(int $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getDateOuverture(): ?\DateTimeInterface
    {
        return $this->date_ouverture;
    }

    public function setDateOuverture(\DateTimeInterface $date_ouverture): self
    {
        $this->date_ouverture = $date_ouverture;

        return $this;
    }

}
