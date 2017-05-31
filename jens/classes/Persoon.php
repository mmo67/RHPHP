<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Dit is de klasse die een persoon beschrijft
 */
class Persoon{
    
    //De naam van de pesoon
    private $naam;
    
    /**
     * De achternaam van de persoon
     * @var String 
     */
    private $achternaam;
    
    /**
     * De leeftijd van de persoon
     * @var datetime 
     */
    private $geboorteDatum;
    
    function __construct($naam, String $achternaam, datetime $geboorteDatum) {
        $this->naam = $naam;
        $this->achternaam = $achternaam;
        $this->geboorteDatum = $geboorteDatum;
    }
    
    /**
     * 
     * @return type
     */
    function getNaam() {
        return $this->naam;
    }

    function getAchternaam() {
        return $this->achternaam;
    }

    /**
     * Geeft de geboortedatum terug van de persoon
     * @return DateTime
     */
    function getGeboorteDatum() {
        return $this->geboorteDatum;
    }

    function setNaam($naam) {
        $this->naam = $naam;
    }

    function setAchternaam(String $achternaam) {
        $this->achternaam = $achternaam;
    }

    function setGeboorteDatum(datetime $geboorteDatum) {
        $this->geboorteDatum = $geboorteDatum;
    }
    
    
    function talk($persoon){
        echo "$this->naam zegt hallo tegen ". $persoon->getNaam();
    }
    
}



