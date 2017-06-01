<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of dagen
 *
 * @author root
 */
class Dagen {
    
    public function verschil($datum1, $datum2){
        
        $dagen = 0;
        
        $dagen = $datum1->diff($datum2);

        return $dagen;
        
       
        
    }
}
