<?php 
    class Produit {
        public  $tablettes;
        public  $pc;
        public  $portable;
        public  $adresse;
        const prixTablettes = 300;
        const prixPc = 1200;
        const prixPortable = 700;
       
        public function __construct($tablettes, $pc, $portable, $adresse){
            $this->tablettes = $tablettes;
            $this->pc = $pc;
            $this->portable = $portable;
            $this->adresse = $adresse;
        }

        public function getPrix(){
            return $this->tablettes * self::prixTablettes + $this->pc * self::prixPc + $this->portable * self::prixPortable ;
        }

        public function getPrixHT(){
            return round($this->getPrix() * 0.8, 2);
        }

        public function getTablettes(){
            return $this->tablettes;
        }

        public function getPc(){
            return $this->pc;
        }

        public function getPortable(){
            return $this->portable;
        }

        public function getNbProduits(){
            return $this->tablettes + $this->pc + $this->portable;
        }

        public function getAdresse(){
            return $this->adresse;
        }

    }