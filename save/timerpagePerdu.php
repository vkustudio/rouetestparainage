<?php

		if (!isset($_COOKIE['TimerPerduCVS'])) {
					header("Location: index.php");
		}
		elseif (isset($_COOKIE['TimerGagneCVS'])) {
					header("Location: timerpageGagne.php");
		}


		$datatimer = $_COOKIE['TimerPerduCVS'];


  ?>

<!DOCTYPE html>
<html>
<head>
    <script type="text/javascript">
(function (global) {

    if(typeof (global) === "undefined") {
        throw new Error("window is undefined");
    }

    var _hash = "!";
    var noBackPlease = function () {
        global.location.href += "#";

        // Making sure we have the fruit available for juice (^__^)
        global.setTimeout(function () {
            global.location.href += "!";
        }, 50);
    };

    global.onhashchange = function () {
        if (global.location.hash !== _hash) {
            global.location.hash = _hash;
        }
    };

    global.onload = function () {
        noBackPlease();

        // Disables backspace on page except on input fields and textarea..
        document.body.onkeydown = function (e) {
            var elm = e.target.nodeName.toLowerCase();
            if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
                e.preventDefault();
            }
            // Stopping the event bubbling up the DOM tree...
            e.stopPropagation();
        };
    }
})(window);
    </script>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>DESOLE🥺</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link rel="stylesheet" href="css/firstpage.css" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>



        <!--++++++++++++++++++++++++++++++Bootstrap+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <!--++++++++++++++++++++++++++++++Bootstrap+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

          <!-- Favicons -->
<link  rel="icon" href="https://like-up.fr/img/favilogo.png">

        <style type="text/css">
            #footerLinks{
                position: fixed;
                bottom: 0%;
                padding: 5px;
                background-color: black;

            }
        </style>
    </head>
    <body style="background: url('img/Background.png') no-repeat center center fixed; background-size: 100% 100%;">

    	<!-- col-  xs sm md lg  -->

<!-- ++++++++++++++++ Computer Users Section +++++++++++++ -->


        <div class="container justify-content-center" id="ComputerUsers">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 container justify-content-center animated fade">
                <h1 class="animated animated fade">Désolé mais cette page est uniquement pour les utilisateurs mobiles</h1>
            </div>
        </div>
    </div>



<!-- ++++++++++++++++ End of Computer Users Section +++++++++++++ -->

<div class="container-fluid" align="center" id="MobileUsers">
    <div class="row justify-content-center">
        <table align="center" class="table table-responsive" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" class="animated fadeIn">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/logo.png" class="imgLogoHeader" style="margin-top: 5%;"></div>
                </td>
            </tr>

            <tr class="animated zoomIn delay-08s">
                <td align="center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1 style="text-transform: uppercase; padding: 10px; background-color: black; border-radius: 20px; color: white; font-size: 20px;">Vous avez PERDU</h1></div>
                </td>
            </tr>
            <br><br>

            <tr>
                <td align="center" class="animated fadeIn delay-1-6s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 style="font-size: 19px; margin-top: 5%;"><b>Retentez votre chance dans:<br></b></h2>
                        </div>
                </td>
            </tr>
            <tr>
                <td align="center" class="animated fadeIn delay-1-6s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <h2 style="font-size: 23px; margin-top: 10%; background-color: black; color: white; padding: 10px; border-radius: 20px; width: 50%;">
                            <b id="demo"></b>
                            <a href="index.php" id="refresh" style="display: none; font-size: 15px; color: white;">RECOMMENCEZ</a>
                        </div>
                </td>
            </tr>



        </table>
                 <!-- Adaugarea regulamentului si formulei de contact -->
                    <?php include "reglementContact.php" ?>
    </div>
</div>






</body>
</html>

<script>

	var js_variable  = '<?php echo $datatimer;?>';

// Set the date we're counting down to
	var countDownDate = new Date(js_variable).getTime();

// Update the count down every 1 second
	var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + "h "
  + minutes + "m " + seconds + "s ";


  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "RECOMMENCEZ";
    document.getElementById("demo").style.display = "none";
    document.getElementById("refresh").style.display = "block";
    var js_time_result = "RECOMMENCEZ";
    document.cookie = "cnameCVS="+js_time_result;
  }
  else{
  	var js_time_result = "Nope";
  	document.cookie = "cnameCVS="+js_time_result;
  }
}, 1000);
</script>

<?php

	$resultTimerExpired = $_COOKIE['cnameCVS'];



	if ($resultTimerExpired === "RECOMMENCEZ") {

			setcookie("TimerPerduCVS", "", time() - 84600, "/", "like-up.fr");

			header("Location: index.php");

	}
	else{}


  ?>
