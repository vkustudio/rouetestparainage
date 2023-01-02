
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title></title>
	<link  rel="icon" href="https://like-up.fr/img/favilogo.png">
</head>
<body>

	<?php

	if (isset($_COOKIE['TimerPerduCVS'])){
        header("Location: timerpagePerdu.php");
        }   
    elseif (isset($_COOKIE['TimerGagneCVS'])){
            header("Location: timerpageGagne.php");
        }

	else{

	$valueFirst = 0;

	$cycleTHRDyz = 0; //definirea valorii pentru 3 zile de ciclu in repetare de linkuri

	$cycleRest = 0;

	if (!isset($_COOKIE['userEntryCVS'])) {
		setcookie("userEntryCVS", $valueFirst, time() + 604800, "/", "like-up.fr");

		// definirea variabilei cookie pentru folosirea ei in limitarea linkurilor
		setcookie("CycleTHRDyz", $cycleTHRDyz, time() + 84600, "/", "like-up.fr");

		header("Location: mainpage.php");
	}
	else{
		// Verificam daca 3 zile au trecut sau inca nu
		if(isset($_COOKIE['CycleTHRDyz'])){
			
			setcookie("CycleTHRDyzON", $cycleTHRDyz, time() + 84600, "/", "like-up.fr");
			
			if(isset($_COOKIE['FinalResultCVS'])){

				if ($_COOKIE['FinalResultCVS'] === 'GAGNE') {
				header("Location: php/verifGagne.php");
			   }
				elseif ($_COOKIE['FinalResultCVS'] === 'PERDU') {
				header("Location: php/verifPerdu.php");
			   }
		   }
		   else{
			header("Location: pageroue.php");
		}
		}
		else{
		// Daca au trecut deja 3 zile adaugam o noua variabila care va memoriza acest lucru
			setcookie("CycleRest", $cycleRest, time() + 338400, "/", "like-up.fr");
			setcookie("CycleRestON", $cycleRest, time() + 84600, "/", "like-up.fr");
			if(isset($_COOKIE['FinalResultCVS'])){

				if ($_COOKIE['FinalResultCVS'] === 'GAGNE') {
				header("Location: php/verifGagne.php");
			   }
				elseif ($_COOKIE['FinalResultCVS'] === 'PERDU') {
				header("Location: php/verifPerdu.php");
			   }
		   }
		   else{
			header("Location: pageroue.php");
		}
		}

		
	}
}
  ?>

</body>
</html>
