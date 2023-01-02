<?

/******************************************************************************
 * Init some variables with values from $_POST so we don't have to keep typing*
 * the full array list name whenever we want to use the values.               *
 * ****************************************************************************/

$bkgImg		=	'../img/Background.png';
$eventName	=	$_POST['inEventName'];
$headline	=	"HELLO HERE Final Page Scan";
$opening	=	$_POST['inOpening'];
$quote		=	$_POST['inQuote'];
$attrib		=	$_POST['inAttrib'];
$font1		=	$_POST['fonts1'];
$font2		=	$_POST['fonts2'];
$font3		=	$_POST['fonts3'];
$font4		=	$_POST['fonts4'];
$dateFr		=	$_POST['inFrDate'];
$dateTo		=	$_POST['inToDate'];
$textOffer1	=	$_POST['inOffer1'];
$addOffer1	=	$_POST['inAdditional1'];
$qrSize		=	$_POST['inQrSize'];
$qrData1	=	$_POST['inQrData1'];


$nameClient = $_COOKIE['QrCodeNameClientCVS'];
$expireTime = $_COOKIE['QrCodeExpireTimeCVS'];

$newDateTime1 = date("d F Y H:i:s", strtotime("+1 day"));;

$resultCadeau = $_COOKIE['resultCadCVS'];

setlocale(LC_ALL, 'fr_FR.UTF8', 'fr_FR','fr','fr','fra','fr_FR@euro');

$newDateTime = strftime("%d %B %Y, %H:%M:%S", strtotime($newDateTime1));



if($font1=="Sans"){
	$font1	=	'Questrial';
} else if($font1=="Serif"){
	$font1	=	'Oranienbaum';
} else if($font1=="Fancy"){
	$font1 = 	'Dancing Script';
}

if($font2=="Sans"){
	$font2	=	'Questrial';
} else if($font2=="Serif"){
	$font2	=	'Oranienbaum';
} else if($font2=="Fancy"){
	$font2 = 	'Dancing Script';
}

if($font3=="Sans"){
	$font3	=	'Questrial';
} else if($font3=="Serif"){
	$font3	=	'Oranienbaum';
} else if($font3=="Fancy"){
	$font3 = 	'Dancing Script';
}

if($font4=="Sans"){
	$font4	=	'Questrial';
} else if($font4=="Serif"){
	$font4	=	'Oranienbaum';
} else if($font4=="Fancy"){
	$font4 = 	'Dancing Script';
}



/******************************************************************************
 * Build a page generator string using the values passed from form.           *
 ******************************************************************************/

$strOut	=	'<!DOCTYPE html>'
		.	'<html style=' . "'" . 'background: url("' . $bkgImg . '") '
		.	'no-repeat center center fixed; background-size: 100% 100%;' . "'>"
		.	'<head>'
		.	'<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'
		.	'<title>🍔</title>'
		.	'<link href="https://fonts.googleapis.com/css?'
		.	'family=Oranienbaum|Questrial|Dancing+Script:700" '
		.	'rel="stylesheet" type="text/css">
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
			<link  rel="icon" href="https://like-up.fr/img/favilogo.png">'
		.	'<!-- Oranienbaum = serif, Questrial = sans, DancingSript = fancy -->'
		.	'</head>';

$strOut	=	$strOut
		.	'<body style="color: white">'
		.	'<center><div id="main" class="container" align="center"'
		.	'style="z-index:2; text-align: center;'
		.	'margin-top: 50%; width: 70%; height: auto;'
		.	'padding: 20px; background-color: black; border-radius: 20px;">'
		.	'<h1 style="font-family: Montserrat; font-size: 60px;">' . $nameClient . ' a gagné<br>' . $resultCadeau . '</h1>'
		.	'<p style="font-family: Montserrat; font-size: 40px;"><b>Le code est valable apres le timer</b></p><p style="font-family: Montserrat; font-size: 30px;"><b id="expireData"></b></p>'
		.	'<center><p id="demo" align="center" style="background-color: white; color: black; width: 40%; font-family: Montserrat; font-size: 40px; padding: 10px; border-radius: 20px; text-align: center;"><b></b></p>
			<p id="refresh" align="center" style="background-color: white; color: black; width: 40%; font-family: Montserrat; font-size: 40px; padding: 10px; border-radius: 20px; text-align: center; display: none;"><b></b></p></center>
		'
		. 	'</div></center>'
		.	'</body>'
		.	'<script src="assets/js/jquery.js"></script>'
		.	'<script src="assets/js/bootstrap.js"></script>'
		    // TIMER FOR DELETE THE PAGE WHEN EXPIRE
		.   '<script>'
		.		'var js_variable  = "' . $expireTime . '";'
		.		'var js_variable_frTime = "' . $newDateTime . '";'
			// Set the date we're counting down to
		.	'var countDownDate = new Date(js_variable).getTime();'

			// Update the count down every 1 second
		.		'var x = setInterval(function() {'

			  // Get today's date and time
		.	  'var now = new Date().getTime();'

			  // Find the distance between now and the count down date
		.	  'var distance = countDownDate - now;'

			  // Time calculations for days, hours, minutes and seconds
		.	  'var days = Math.floor(distance / (1000 * 60 * 60 * 24));'
		.	  'var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));'
		.	  'var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));'
		.	  'var seconds = Math.floor((distance % (1000 * 60)) / 1000);'

			  // Display the result in the element with id="demo"
		.	  'document.getElementById("demo").innerHTML = hours + "h "'
		.	  '+ minutes + "m " + seconds + "s ";'
		.	    'document.getElementById("expireData").innerHTML = js_variable_frTime;'


			  // If the count down is finished, write some text
		.	  'if (distance < 0) {'
		.	    'clearInterval(x);'
		.	    'document.getElementById("demo").innerHTML = "Code Valable";'
		.	    'document.getElementById("demo").style.display = "none";'
		.	    'document.getElementById("refresh").style.display = "block";'
		.	    'var js_time_result = "EXPIRED";'
		.	    'document.cookie = "cnameCVS="+js_time_result;'
		.	  '}'
		.	  'else{'
		.	  	'var js_time_result = "Nope";'
		.	  	'document.cookie = "cnameCVS="+js_time_result;'
		.	  '}'
		.	'}, 1000);'
		.	'</script>'
		.	'</html>';

/******************************************************************************
 * Create a text file to accept the output string					          *
 ******************************************************************************/

$emailClient = $_COOKIE['QrCodeEmailClientCVS'];
$randomNumber = $_COOKIE['QrCodeRandomLinkCVS'];

$fileWay = "usersWin/" . $randomNumber . 'x'. $emailClient . ".html";

$f = fopen($fileWay, "w");
fwrite($f, $strOut);
fclose($f);


/******************************************************************************
 * Give some feedback and a test link                                         *
 ******************************************************************************/
 header("Location: ../timerpageGagne.php");


?>
