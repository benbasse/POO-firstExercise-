<?php
//-------------------------------PROFESSOR---------------------------------------------------------------------
include("Personne.php");
include("Interface.php");
class Professeur extends Personne implements teacher
{
    private $salaire;
    private $specialite;
    private $voiture;
    public $dateEvaluation;
    public function __construct($nom, $prenom, $matricule, $salaire, $specialite, $voiture, $dateEvaluation)
    {
        $this->salaire = $salaire;
        $this->specialite = $specialite;
        $this->voiture = $voiture;
        $this->dateEvaluation = $dateEvaluation;
        parent::__construct($nom, $prenom, $matricule);
    }

    //les getteurs 
    public function getSalaire()
    {
        return $this->salaire;
    }
    public function getSpecialite()
    {
        return $this->specialite;
    }
    public function getVoiture()
    {
        return $this->voiture;
    }
    // Les setteurs 
    public function setSalaire($salaire)
    {
        // if ($salaire > 0 && is_int($salaire)) {
            $this->salaire = $salaire;
        // }
    }
    public function setSpecialite($specialite)
    {
        // if (is_string($specialite)) {
            $this->specialite = $specialite;
        // }
    }
    public function setVoiture($voiture)
    {
        if (is_bool($voiture)) {
            return $this->voiture;
        } else {
            throw new \InvalidArgumentException("La voiture est un type boolean");
        }
    }
    // public function evaluerEtudiant($dateEvaluation)
    // {
    //     echo "Evaluation des étudiants sera $this->dateEvaluation";
    // }
    public  function Presenter()
    {
        parent:: Presenter();
        echo " </br>J'ai une salaire de $this->salaire </br> j'enseigne $this->specialite </br> Si j'ai une voiture $this->voiture";
    }
}
$professor = new Personne("Ndiaye", "Issakha", 1819992022);
$professor = new  Professeur("Ndiaye", "Issakha", 1819999, 1000000, "Science de la vie", "non", "01/01/2023");
$professor->Presenter();
// echo "<br>";
// $professor->evaluerEtudiant("01/01/2023");
// echo "<br>";