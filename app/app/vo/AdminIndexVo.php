<?php

namespace App\Vo;


use App\Entity\Etape;
use App\Entity\Ingredient;
use App\Entity\Mesure;
use App\Entity\Pays;
use App\Entity\Quantite;
use App\Entity\Recette;
use App\Entity\User;

class AdminIndexVo
{
    /**
     * @var Recette[]
     */
    private $recettes = [];

    /**
     * @var Pays[]
     */
    private $pays = [];
    /**
     * @var Ingredient[]
     */
    private $ingredients = [];
    /**
     * @var User[]
     */
    private $users = [];
    /**
     * @var Etape[]
     */
    private $etapes = [];
    /**
     * @var Mesure[]
     */
    private $mesures = [];
    /**
     * @var Quantite[]
     */
    private $quantites = [];

    /**
     * @var boolean
     */
    private $indexActif = false;

    /**
     * @var boolean
     */
    private $recetteActif = false;

    /**
     * @return Recette[]
     */
    public function getRecettes(): array
    {
        return $this->recettes;
    }

    /**
     * @param Recette[] $recettes
     */
    public function setRecettes(array $recettes): void
    {
        $this->recettes = $recettes;
    }

    /**
     * @return Pays[]
     */
    public function getPays(): array
    {
        return $this->pays;
    }

    /**
     * @param Pays[] $pays
     */
    public function setPays(array $pays): void
    {
        $this->pays = $pays;
    }

    /**
     * @return Ingredient[]
     */
    public function getIngredients(): array
    {
        return $this->ingredients;
    }

    /**
     * @param Ingredient[] $ingredients
     */
    public function setIngredients(array $ingredients): void
    {
        $this->ingredients = $ingredients;
    }

    /**
     * @return User[]
     */
    public function getUsers(): array
    {
        return $this->users;
    }

    /**
     * @param User[] $users
     */
    public function setUsers(array $users): void
    {
        $this->users = $users;
    }

    /**
     * @return Etape[]
     */
    public function getEtapes(): array
    {
        return $this->etapes;
    }

    /**
     * @param Etape[] $etapes
     */
    public function setEtapes(array $etapes): void
    {
        $this->etapes = $etapes;
    }

    /**
     * @return Mesure[]
     */
    public function getMesures(): array
    {
        return $this->mesures;
    }

    /**
     * @param Mesure[] $mesures
     */
    public function setMesures(array $mesures): void
    {
        $this->mesures = $mesures;
    }

    /**
     * @return Quantite[]
     */
    public function getQuantites(): array
    {
        return $this->quantites;
    }

    /**
     * @param Quantite[] $quantites
     */
    public function setQuantites(array $quantites): void
    {
        $this->quantites = $quantites;
    }

    /**
     * @return bool
     */
    public function isIndexActif(): bool
    {
        return $this->indexActif;
    }

    /**
     * @param bool $indexActif
     */
    public function setIndexActif(bool $indexActif): void
    {
        $this->indexActif = $indexActif;
    }

    /**
     * @return bool
     */
    public function isRecetteActif(): bool
    {
        return $this->recetteActif;
    }

    /**
     * @param bool $recetteActif
     */
    public function setRecetteActif(bool $recetteActif): void
    {
        $this->recetteActif = $recetteActif;
    }


}