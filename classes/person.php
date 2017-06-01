<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of person
 *
 * @author Marius
 */
class person {
    
    var $name;
    
    public $height;
    protected $social_insurance;
    private $pinn_number;
            
    function __construct($persons_name) {
        $this->name = $persons_name ;
    }
    
    function set_name($new_name) {
        
        $this->name = $new_name;
    }
    
    function get_name() {
        
        return $this->name;
    }
    
        
    private function get_pinn_number(){
        
        return
	$this->pinn_number;
        
    }
			  
        
        
    
}

// 'extends' is the keyword that enables inheritance
class employee extends person {
    public function __construct($employee_name) {
        $this->set_name($employee_name);
    }
    
}