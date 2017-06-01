<?php 
include 'classes/person.php'; 

$marius = new person("Marrrius");
$piet = new person("piiiiet") ;

/*$marius->set_name("Marius Monteyne");
$piet->set_name("Piet Piraat");
*/

echo "Marius volledige naam is " . $marius->get_name();
echo "<br>";
echo "Piet volledige naam is " . $piet->get_name();

/*  
	Since $pinn_number was declared private, this line of code 
	will generate an error. Try it out!   
	
 
echo "<br>";
echo "Tell me private stuff: ". $marius->pinn_number;  
*/


$james = new employee("James Bond");
echo "<br>";
echo "---->" . $james->get_name();


?>

