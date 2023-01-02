<?php 
	
	if (isset($_COOKIE['TimerPerduCVS'])) {
		header("Location: ../timerpagePerdu.php");
	}
	

	else{

	echo "A ajuns pe verificarea de PERDU";
	echo "<br>";

	$resultHere = "PERDU";

	setcookie("FinalResultCVS", $resultHere, time() + 84600 , "/", "like-up.fr");


	header("Location: ../perdu.php");


	print_r($_COOKIE);
}




 ?>