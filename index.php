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
        }
    }
    public function setPrenom($prenom)
    {
        if (is_string($prenom) && strlen($prenom) > 0 && strlen($prenom) < 25) {
            $this->prenom = $prenom;
        }
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
        echo "Mon nom est $this->nom et mon prénom $this->prenom numéro de matricule $this->matricule";
    }
}

//---------------------------------APPRENANT---------------------------------------------------------------
class Apprenant extends Personne
{
    public $dateNaissance;
    public $matiere;

    // Constructeur
    public function __construct($nom, $prenom, $matriculas, $dateNaissance, $matiere)
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
        echo "Je dois faire un cours de $this->matiere à chaque semaine";
    }

    // Fonction faire evaluation
    public function faireEvaluation()
    {
        echo "Je dois faire une évaluation en $this->matiere";
    }
}
//La classe fille apprenant
$student = new Personne("Basse", "Moussa", 1020232022);
$student->Presenter();
$student = new Apprenant("Basse", "Moussa", 182022, 31 / 07 / 2002, "Thermo-Dynamics");
echo "<br>";
$student->faireEvaluation();
echo "<br>";
$student->faireCours();

//-----------------------------------------Interface-----------------------------------------------
interface teacher
{
    public function evaluerEtudiant($dateEvaluation);
    public function Presenter();
}


//-------------------------------PROFESSOR---------------------------------------------------------------------

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
    public function evaluerEtudiant($dateEvaluation)
    {
        echo "Evaluation des étudiants sera $this->dateEvaluation";
    }
    public function Presenter()
    {
        parent:: Presenter();
        echo " </br>J'ai une salaire de $this->salaire </br> j'enseigne $this->specialite </br> Si j'ai une voiture $this->voiture";
    }
}
$professor = new Personne("Ndiaye", "Issakha", 1819992022);
$professor = new  Professeur("Ndiaye", "Issakha", 1819999, 1000000, "Science de la vie", "non", "01/01/2023");
$professor->Presenter();
echo "<br>";
$professor->evaluerEtudiant("01/01/2023");
echo "<br>";
