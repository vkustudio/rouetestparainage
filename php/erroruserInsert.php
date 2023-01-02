<?php
	if (isset($_COOKIE['TimerGagneCVS'])) {
        header("Location: ../timerpageGagne.php");
    }
    elseif (isset($_COOKIE['TimerPerduCVS'])){
        header("Location: timerpagePerdu.php");
        }
    elseif (!isset($_COOKIE['FinalResultCVS'])){
    	header("Location: ../index.php");
    }
    else {
    	$resultRoueHere = $_COOKIE['FinalResultCVS'];
    }


  ?>


  <!DOCTYPE html>
  <html>
  <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>❌</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link rel="stylesheet" href="../css/firstpage.css" type="text/css" />
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>



        <!--++++++++++++++++++++++++++++++Bootstrap+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
        <!--++++++++++++++++++++++++++++++Bootstrap+++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++++-->

          <!-- Favicons -->
<link  rel="icon" href="http://like-up.fr/img/favilogo.png">

        <style type="text/css">
            #footerLinks{
                position: fixed;
                bottom: 0%;
                padding: 5px;
                background-color: black;

            }
        </style>
    </head>
    <body style="background: url('../img/Background.png') no-repeat center center fixed; background-size: 100% 100%;">

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
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="../img/logo.png" class="imgLogoHeader" style="margin-top: 5%;"></div>
                </td>
            </tr>

            <tr class="animated zoomIn delay-08s">
                <td align="center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><h1 style="text-transform: uppercase; padding: 10px; background-color: black; border-radius: 20px; color: white; font-size: 20px; width: 50%">OOPS 😅</h1></div>
                </td>
            </tr>
            <br><br>

            <tr>
                <td align="center" class="animated fadeIn delay-1-6s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                 
                        <h2 style="font-size: 19px; margin-top: 5%;"><b>Cet utilisateur existe déjà<br>       	
											l'e-mail ou le numéro de téléphone est déjà utilisé</b></h2>
                        </div>
                </td>
            </tr>
            <tr>
                <td align="center" class="animated fadeIn delay-1-6s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">                 
                        <button style="background-color: transparent; border: none; width: 50%" onclick="VerifResult()"><h2 style="font-size: 23px; margin-top: 10%; background-color: black; color: white; padding: 10px; border-radius: 20px; width: 100%;"><b>RETOUR🍔</b></h2></button>
                        </div>
                </td>
            </tr>



        </table>
                  
                   <!-- AICI REULAMENTUL SI PARTEA DE CONTACT -->
                   <!-- Adaugarea regulamentului si formulei de contact -->
                    <?php include "../reglementContact.php" ?>

    </div>
</div>






	<script type="text/javascript">
		
		function VerifResult() {
			var resultRoueJS = '<?php echo $resultRoueHere;?>';

			if (resultRoueJS === "PERDU") {
				location.replace("../perdu.php");
			}
			else if (resultRoueJS === "GAGNE") {
				location.replace("../bravo.php");
			}
			else{
				location.replace("../index.php");
			}

		}


	</script>



  </body>
  </html>