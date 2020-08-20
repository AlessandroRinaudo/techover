<?php

namespace App\Entity;

/**
 * Class FormationSearch
 * @package App\Entity
 * Cette classe permet de créer un formulaire qui permet de filtrer les formations comme demandé par
 * la start-up.
 * Le filtre de la langue à été consideré comme filtre par chaine de charactère et les langues sont stockées dans une constante,
 * Si jamais dans le futur une connexion à une table de langues sera prévu un code pour la recherche des langue est déja
 * disponible et mis en commentaire. Il suffit tout simplement de le décommenter.
 */
class FormationSearch
{
    /**
     * @var int|null : la note max du cours choisi par l'utilisateur
     */
    private $maxNote;
    /**
     * @var string|null : le niveau  choisi par l'utilisateur
     */
    private $maxLevel;

//    /**
//     * @var int|null : La langue choisie par l'utilisateur
//     */
//    private $langueChoisie;

    /**
     * @var string|null
     */
    private $langueUtilisateur;

    /**
     * @var string|null
     */
    private $categoriePrefere;

    /**
     * @return int|null
     */
    public function getMaxNote(): ?int
    {
        return $this->maxNote;
    }

    /**
     * @param int|null $maxNote
     */
    public function setMaxNote(int $maxNote): void
    {
        $this->maxNote = $maxNote;
    }

    /**
     * @return string|null
     */
    public function getMaxLevel(): ?string
    {
        return $this->maxLevel;
    }

    /**
     * @param string|null $maxLevel
     */
    public function setMaxLevel(string $maxLevel): void
    {
        $this->maxLevel = $maxLevel;
    }

//    /**
//     * @return int|null
//     */
//    public function getLangueChoisie(): ?int
//    {
//        return $this->langueChoisie;
//    }
//
//    /**
//     * @param int|null $langueChoisie
//     */
//    public function setLangueChoisie(int $langueChoisie): void
//    {
//        $this->langueChoisie = $langueChoisie;
//    }

    /**
    * @return string|null
    */
    public function getLangueUtilisateur(): ?string
    {
        return $this->langueUtilisateur;
    }/**
 * @param string|null $langueUtilisateur
 */
    public function setLangueUtilisateur(string $langueUtilisateur): void
    {
        $this->langueUtilisateur = $langueUtilisateur;
    }


    /**
     * @return string|null
     */
    public function getCategoriePrefere(): ?string
    {
        return $this->categoriePrefere;
    }

    /**
     * @param string|null $categoriePrefere
     */
    public function setCategoriePrefere(string $categoriePrefere): void
    {
        $this->categoriePrefere = $categoriePrefere;
    }


}