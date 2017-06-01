<html>
<body>

<?php

function berekenoppervlak_rechthoek ($l, $b)
	{
		$oppervlak = $l * $b;
		return $oppervlak;

	}

?>



<form method="post" action="vierkant.php">
	<p> Lengte: <input type="text" name="lengte" > </p>
	<p> Breedte: <input type="text" name="breedte"> </p>
	<input type="submit"></input>



</form>


</body>
</html>
