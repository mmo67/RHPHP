<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Faculteitnorm implements Facinterface{
    
    /**
     * Start variabele waar de faculteit moet van berekend worden
     * @var type Int
     */
    private $start = -1;
    
    /**
     * Het resultaat van de berekening
     * @var int Resultaat
     */
    private $result = -1;
    
    /**
     * Construeert een faculteitsberekening
     * @param int $start
     */
    function __construct($start) {
        $this->start = $start;
    }
    
    /**
     * Geeft de startvariabele terug
     * @return int
     */
    function getStart() {
        return $this->start;
    }

    /**
     *  Geeft het resultaat terug van de berekening
     * @return type
     */
    function getResult() {
        if($this->start == -1){
            throw new Exception("De startwaarde is nog niet opgegeven");
        }else{
            $temp = 1;
            for($i = $this->start; $i> 0 ; $i-- ){
                $temp *= i;
            }
        }
        $this->result = $temp;
        return $this->result;
    }

    /**
     * Zet de start vast
     * @param type $start
     */
    function setStart($start) {
        $this->start = $start;
    }


    
}
