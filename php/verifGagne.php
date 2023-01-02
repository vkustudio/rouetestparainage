<?php 

	if (isset($_COOKIE['TimerGagneCVS'])) {
		header("Location: ../timerpageGagne.php");
	}
	else{

	echo "A ajuns pe verificarea de GAGNE";
	echo "<br>";

	$resultHere = "GAGNE";

	setcookie("FinalResultCVS", $resultHere, time() + 84600 , "/", "like-up.fr");


	header("Location: ../bravo.php");


	print_r($_COOKIE);
}
	// if (!isset($_COOKIE['chancePerdu'])) {
	// 	setcookie("chancePerdu", 0, time()+84600);
	// 	header("Location: ../perdu.php");
	// }
	// else {
	// 	$newDateTimePerdu = date("F d, Y H:i:s", strtotime("+1 day"));
 //    	$_SESSION['isTimerPerdu'] = $newDateTimePerdu;
	// 	header("Location: ../timerpagePerdu.php");
	// }




 ?>