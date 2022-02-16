<?php

class Guerrier{
    //-----variables-----//
    public $niveau;
    public $nom;
    public $age;
    public $force;
    public $arme;

    //------constructor------//
    public function __construct($LVL,$N, $A, $F, $ARM)
    {
        $this->niveau = $LVL;
        $this->nom = $N;
        $this->age = $A;
        $this->force = $F;
        $this->arme = $ARM;
    }

     //-----------geters--------//
     public function getNom(){
        return $this->nom;
    }

    public function getNiveau(){
        return $this->niveau;
    }

    
    public function getAge(){
        return $this->age;
    }

    public function getForce(){
        return $this->force;
    }

    public function getArme(){
        return $this->arme;
    }

    //----------setters --------//
    public function setNom($NewNom){
        $this->nom = $NewNom;
    }

    public function setNiveau($NewNiveau){
        $this->niveau = $NewNiveau;
    }

    
    public function setAge($NewAge){
        $this->age = $NewAge;
    }

    public function setForce($NewForce){
        $this->force = $NewForce;
    }

    public function setArme($NewArme){
        $this->arme = $NewArme;
    }

    //----------méthodes-------//
    
    public function levelUp($newNiveau, $newForce){
        $newNiveau +=1;
        $newForce += 50;
        echo "nouveau niveau :" . $newNiveau . " nouvelle valeur de force : " . $newForce . "</br>"; 
    }
    
    public function AttaqueCoupDeHache($newForce){
        $coupCritique = rand(0,1);
        if ($coupCritique== 0){
            echo "Attaque ratée" . "</br> 0 dégâts infligés";
        }
        else
            if($coupCritique == 1){
                $newForce *= 1.5;
                echo "Attaque réussi, ". "</br>". $newForce . " pts de dégâts infligés". "</br>";
            }
    }
}

$Guerrier = new Guerrier("10", "jeanne", "22", "10", "épée");
$Guerrier-> AttaqueCoupDeHache(100);
// $Guerrier->levelUp(1, 50);
?>