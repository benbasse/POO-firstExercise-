<?php
// ---------------------------------PRATIQUE_POO-------------------------------------------
class Personne
{
    private $nom;
    private $prenom;
    private $matricule;

    // La fonction de construct
    public function __construct($nom, $prenom, $matricule)
    {
        $this->setNom($nom);
        $this->setPrenom($prenom);
        $this->setMatricule($matricule);
    }
    // LES GETTEURS 
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getMatricule()
    {
        return $this->matricule;
    }
    // les SETTEURS
    public function setNom($nom)
    {
        if (is_string($nom) && strlen($nom) > 0 && strlen($nom) < 25) {
            $this->nom = $nom;
        } else {
            //echo "Le nom doit être uniquement des lettres";
            throw new Exception("Le nom doit être uniquement des lettres");
        }
    }
    public function setPrenom($prenom)
    {
        if (is_string($prenom) && strlen($prenom) > 0 && strlen($prenom) < 25) {
            $this->prenom = $prenom;
        } //else {
        //     echo "Le prenom doit être uniquement des lettres"
        // }
    }
    public function setMatricule($matricule)
    {
        if (is_int($matricule) && $matricule > 0 && strlen($matricule) <= 10) {
            $this->matricule = $matricule;
        }
    }

    // Les fonctions qu'ils ont en commun
    public function Presenter()
    {
        echo "Mon nom est $this->nom et mon prénom $this->prenom numéro de matricule $this->matricule \n";
    }
}