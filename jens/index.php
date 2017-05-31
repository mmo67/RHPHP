<?php


include './Persoon.php';

$roel = new Persoon("Roel", "Vanhooiland", new DateTime());

$marius = new Persoon("Marius", "Monteyne", new DateTime());

$roel->talk($marius);
echo var_dump($roel->getGeboorteDatum());

?>