<?php

function printNumbers($end, $start = 1) {
    for ($i = $start; $i <= $end; $i++) {
        echo($i);
        if ($i == $end) {
            continue;
        }
        echo("-");
    }
    echo("<br><hr>");
}
?>


<html>
    <head>
        <title>PHP-Test</title>
    </head>
    <body>
        <?php
        $var = "<h1>Hello world</h1>";
        echo($var);
        ?>

        <?php
        printNumbers(10);
        printNumbers(20);
        printNumbers(500);
        ?>
    </body>
</html>