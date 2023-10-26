<?php
//---------------------------------APPRENANT---------------------------------------------------------------
include("Personne.php");
class Apprenant extends Personne
{
    public $dateNaissance;
    public $matiere;

    // Constructeur
    public function __construct($nom  , $prenom, $matriculas, $dateNaissance, $matiere)
    {
        parent::__construct($nom, $prenom, $matriculas);
        $this->dateNaissance = $dateNaissance;
        $this->matiere = $matiere;
    }

    //------------------getteur et setteur pour la date de naissance
    public function getDateNaissance($dateNaissance)
    {
        return $this->dateNaissance;
    }
    public function setDateNaissance($dateNaissance)
    {
        $this->dateNaissance = $dateNaissance;
    }
    //-----------------------GETTEUR ET SETTEUR POUR LA MATIÉRE
    public function getMatiere($matiere)
    {
        $this->matiere = $matiere;
    }
    public function setMatiere($matiere)
    {
        $this->matiere = $matiere;
    }
    // Fonction faire cours
    public function faireCours()
    {
        echo "Je dois faire un cours de $this->matiere à chaque semaine \n";
    }

    // Fonction faire evaluation
    public function faireEvaluation()
    {
        echo "Je dois faire une évaluation en $this->matiere \n";
    }
}
//La classe fille apprenant
// $student = new Personne(1234556, 123455, 1020232022);
// $student->Presenter();
// $student = new Apprenant("Basse", "Moussa", 182022, 31 / 07 / 2002, "Thermo-Dynamics ");
// echo "<br>";
// $student->faireEvaluation();
// echo "<br>";
// $student->faireCours();
