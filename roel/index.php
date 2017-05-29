<?php

//print title
    function printTitle($text, $h = 2) {
        echo("<h$h>$text</h$h>");
    }

//print 1-2-3-4-5-...
    function printNumbers($end, $start = 1) {
        for ($i = $start; $i <= $end; $i++) {
            echo($i);
            if ($i == $end) {
                continue;
            }
            echo("-");
        }
        echo("<hr>");
    }

//adds all the numbers between start and end
    function addNumbers($end, $start = 0) {
        $sum = 0;
        for($i = $start; $i <= $end; $i++){
            $sum += $i;
        }
        echo("The sum of $start to $end = $sum<br \>");

    }

//prints pyramid
    function printHalfPyramid($numberOfLines) {        
        for($i = 1; $i <= $numberOfLines; $i++){
            for($j = 1; $j <= $i; $j++){
                echo("*");
            }            
            echo("<br \>");
        }
    }
    
//print character multiple times
    function printMultipleTimes($times, $str = "*"){
        for($j = 1; $j <= $times; $j++){
            echo($str);
        }
    }
    
    
//prints fullpyramid
    /*function printFullPyramid($numberOfLines) {        
        for($i = 1; $i <= $numberOfLines; $i++){
            echo("<pre>");
            printMultipleTimes()   
            echo("</pre>");
            echo("<br \>");
            
        }
    } */   
?>

<html>
    <head>
        <title>PHP-Test</title>
    </head>
    <body>
        <?php
        // init vars
            $oef = 0;
            
        // Print title
            printTitle("Hello World", 1);
        
        // ---
            $oef++;
            printTitle("Oef$oef");

            printNumbers(10);
            printNumbers(20);
            printNumbers(500);
        
        // ---
            $oef++;
            printTitle("Oef$oef");

            addNumbers(2, 1);
            addNumbers(30);
            
        // ---
            $oef++;
            printTitle("Oef$oef");            
            
            printHalfPyramid(5);
        ?>
    </body>
</html>