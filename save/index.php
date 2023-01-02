
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
	$valueFirst = "Hello I'm here :)";

	$socialValue = "INSTAGRAM";

	if (!isset($_COOKIE['userEntryCVS'])) {
		setcookie("userEntryCVS", $valueFirst, time() + 84600, "/", "like-up.fr");

		setcookie("socialCookieCVS", $socialValue, time() + 84600, "/", "like-up.fr");

		header("Location: mainpage.php");
	}
	else{

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
  ?>

</body>
</html>
