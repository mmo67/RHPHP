<?php

/**
 * 
 * @param type $width The width of the rectangle
 * @param type $height The height of the rectangle
 * @return type
 */
function calcArea($width, $height) {
    $area = $width * $height;
    echo("The area of the rectangle ($width * $height) = $area");
    echo("<br>");

    return $area;
}
?>

<html>
    <head>
        <title>Rectangle Area</title>
    </head>
    <body>
        <h1>Rectangle Area</h1>
        <h2>Part 1</h2>
        <?php
        calcArea(1, 1);
        calcArea(2, 6);
        ?>

        <h2>Part 2</h2>
        <?php
        if (isset($_POST["width"])) {
            $width = (isset($_POST['width'])) ? $_POST['width'] : null;
            $height = (isset($_POST['height'])) ? $_POST['height'] : null;

            $width = (is_numeric($width)) ? (double) $width : null;
            $height = (is_numeric($height)) ? (double) $height : null;

            if ((!is_null($width)) && (!is_null($height))) {
                calcArea($width, $height);
            } else {
                echo("Input is not valid");
            }
            ?>
            <a href="./rect.php"><button>Test</button></a>
            <form method="post">                
                <input type="submit">
            </form>
            <?php
        } else {
            ?>
            <form method="post">
                <label>Width:</label>
                <input type="text"  name="width">
                <br>
                <label>Height:</label>
                <input type="text" name="height">                 
                <input type="submit">
            </form>
            <?php
        }
        ?>

    </body>
</html>
