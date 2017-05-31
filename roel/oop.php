<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Calculate class
 */
class Calc{    
    
    /**
     * Calcs the factorial
     * @param int $number Positive int the calculate the fact on
     * @return 
     */
    function fact($number){ 
        $result = 1;                
        if ($number > 1){            
            $result = $number * $this->fact(--$number);
        }                
        return $result;
    }
}

/**
 * DateTimeCalc class
 */

class DateTimeCalc{
    /**
     * 
     * @param DateTime $date1
     * @param DateTime $date2
     */
    function calcDiff($date1, $date2){
        $diff = $date1->diff($date2);
        echo "Het verschil tussen <i>" . $date1->format("Y-m-d H:i:s"). "</i> en <i>" . $date2->format("Y-m-d H:i:s") . "</i> is <b>" . $diff->format('%R%a dagen') . "</b>";
        
        return $diff;
    }
}


echo("<h1>OOP</h1>");

/* Print 10 fact-results */
    echo("<h2>calc->fact()</h2>");
    $calc = new Calc;
    for($i=1; $i <= 10; $i++){
        $result = $calc->fact($i);
        echo "The result of fact($i) is $result<br>";
    }
/* Print diff of dates */
    echo("<h2>DateTimeCalc->calcDiff()</h2>");

    $today = new DateTime();
    $otherDate = new DateTime("2016-05-23 18:23");
    $calc = new DateTimeCalc;
    $calc->calcDiff($today, $otherDate);





?>