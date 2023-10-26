<?php
include("Professeur.php");
class Evaluation {
    private $nomEvaluation;
    private $dateEvaluation;
    private $duree;

    public function __construct($nomEvaluation, $dateEvaluation, $duree) {
        $this->nomEvaluation = $nomEvaluation;
        $this->dateEvaluation = $dateEvaluation;
        $this->duree = $duree;
    }
    public function getNomEvaluation()
    {
        return $this->nomEvaluation;
    }
    public function setNomEvaluation($nomEvaluation)
    {
        $this->nomEvaluation = $nomEvaluation;

        return $this;
    }
    
    public function getDateEvaluation()
    {
        return $this->dateEvaluation;
    }
    public function setDateEvaluation($dateEvaluation)
    {
        $this->dateEvaluation = $dateEvaluation;
        return $this;
    }
    public function getDuree(){
        return $this->duree;
    }
    public function setDuree($duree)
    {
        $this->duree = $duree;
        return $this;
    }

    public function Evaluer(){
       // Professeur::class::Presenter();
        echo " .L'evaluation $this->nomEvaluation sera en $this->duree heures, le jour sera $this->dateEvaluation";
        // var_dump($this->nomEvaluation);
        // die();
        
    }
}

$evaluer = new Evaluation("Mathmatics","12/02/2023", 2);
$evaluer->Evaluer();








































//-------------------------------------------Exercice-----------------------------------------------

// class Personnage {
//     private $nom;
//     private $classe;
//     private $attaque;
//     private $pv;
//     private $forceDuBien;

//     public function __construct($nom, $classe, $attaque, $pv, $forceDuBien){
//         $this->nom = $nom;
//         $this->classe = $classe;
//         $this->attaque = $attaque;
//         $this->pv = $pv;
//         $this->forceDuBien = $forceDuBien;
//     }

//     private function calculDegat(){
//         return $this->pv/100 * ($this->attaque+1);
//     }
//     public function afficherDegat(){
//         echo "Dégats infligés,".$this->calculDegat().", dégats";
//     }

//     public function __toString(){
//         $txt = "Mon nom est : ".$this->nom ."<br />";
//         $txt .= "Ma classe est : ".$this->classe ."<br />";
//         $txt .= "J'inflige ".$this->attaque ."<br />";
//         $txt .= "J'ai ".$this->pv ."<br />";
//         $txt .= ($this->forceDuBien) ? "Je fais parti des bien" : "Je fais parti des mals" ."<br />";
//         return $txt;

        
//     }
// }

// $personne1 = new Personnage("Milo", "guerrier", 10, 100, true);
// echo $personne1;
// $personne1->afficherDegat();

// class Voiture{
//     private $marque;
//     private $modele;
//     private $couleur;
//     private $nbPortes;
//     private $estElectrique;

//     public function __construct($marque, $modele, $couleur, $nbPortes, $estElectrique){
//         $this->marque = $marque;
//         $this->modele = $modele;
//         $this->couleur = $couleur;
//         $this->nbPortes = $nbPortes;
//         $this->estElectrique = $estElectrique;
//     }

//     public function afficherVoiture(){
//         echo "$this->marque, $this->modele, $this->couleur, $this->nbPortes, $this->estElectrique";
//     }

//     public function getMarque(){
//         return $this->marque;
//     }
//     public function setMarque($marque){
//         $this->marque = $marque;
//     }
//     public function getModele($modele){
//         return $this->modele;
//     }
//     public function setModele($modele){
//         $this->modele = $modele;
//     }
// }

// $v1 = new Voiture("Toyota", "Ryas", "noir", 5, true);
// $v2 = new Voiture("Toyota", "Risau", "rouge", 5, true);
// $v3 = new Voiture("Mercedes", "X6","Black", 5, true);
// $tab = [
//     $v1,
//     $v2,
//     $v3
// ];
// for ($i=0; $i < count($tab); $i++) { 
//     $tab[$i]->afficherVoiture();
//     echo"<br/>";
// }
// // echo afficherVoiture($tab, "Mercedes");

// afficherVoitureMarque($tab, "Mercedes");

// function afficherVoitureMarque($tab, $marque){
//     echo "----------------------------------------";
//     echo"<br/>";
//     echo "Voici les vehicules de la marque ".$marque;
//     echo"<br/>";

//     for ($i=0; $i < count($tab); $i++) { 
//         if ($tab[$i]->getMarque() === $marque) {
//             $tab[$i]->afficherVoiture();
//         }
//     }


// }
