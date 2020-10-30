<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteEpargneRepository;
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
 * @ORM\Entity(repositoryClass=CompteEpargneRepository::class)
 */
class CompteEpargne
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
     * @ORM\Column(type="integer")
     */
    private $cle_rib;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $num_agence;

    /**
     * @ORM\Column(type="integer")
     */
    private $solde;

    /**
     * @ORM\Column(type="integer")
     */
    private $montant_renum;

    /**
     * @ORM\Column(type="integer")
     */
    private $frais_ouverture;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_ouverture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCompte(): ?string
    {
        return $this->num_compte;
    }

    public function setNumCompte(string $num_compte): self
    {
        $this->num_compte = $num_compte;

        return $this;
    }

    public function getCleRib(): ?int
    {
        return $this->cle_rib;
    }

    public function setCleRib(int $cle_rib): self
    {
        $this->cle_rib = $cle_rib;

        return $this;
    }

    public function getNumAgence(): ?string
    {
        return $this->num_agence;
    }

    public function setNumAgence(string $num_agence): self
    {
        $this->num_agence = $num_agence;

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

    public function getMontantRenum(): ?int
    {
        return $this->montant_renum;
    }

    public function setMontantRenum(int $montant_renum): self
    {
        $this->montant_renum = $montant_renum;

        return $this;
    }

    public function getFraisOuverture(): ?int
    {
        return $this->frais_ouverture;
    }

    public function setFraisOuverture(int $frais_ouverture): self
    {
        $this->frais_ouverture = $frais_ouverture;

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
