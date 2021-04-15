<?php 
    /** Création de la classe et ses objets **/
    class Produit {
        public  $tablettes;
        public  $pc;
        public  $portable;
        public  $adresse;
        const prixTablettes = 300;
        const prixPc = 1200;
        const prixPortable = 700;
        
        /** Le constructeur pour initialiser les variables **/
        public function __construct($tablettes, $pc, $portable, $adresse){
            $this->tablettes = $tablettes;
            $this->pc = $pc;
            $this->portable = $portable;
            $this->adresse = $adresse;
        }

        /** TOUTES LES FONCTIONS QUI RETOURNENT LES VALEURS ATTENDUS **/
        //Retourne le prix
        public function getPrix(){
            return $this->tablettes * self::prixTablettes + $this->pc * self::prixPc + $this->portable * self::prixPortable ;
        }

        //Retourne le prix hors taxe
        public function getPrixHT(){
            return round($this->getPrix() * 0.8, 2);
        }

        //Retourne le nombre de tablettes
        public function getTablettes(){
            return $this->tablettes;
        }

        //Retourne le nombre de pc
        public function getPc(){
            return $this->pc;
        }

        //Retourne le nombre de portables
        public function getPortable(){
            return $this->portable;
        }

        //Retourne le total des produits
        public function getNbProduits(){
            return $this->tablettes + $this->pc + $this->portable;
        }

        public function getAdresse(){
            return $this->adresse;
        }

    }