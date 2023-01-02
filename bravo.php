<?php

error_reporting(E_ERROR | E_PARSE);
        if (!isset($_COOKIE['userEntryCVS'])) {
           header("Location: index.php");
       }
        elseif (isset($_COOKIE['TimerGagneCVS'])) {
            header("Location: timerpageGagne.php");
        }
       else{

        if(!isset($_COOKIE['FinalResultCVS'])){
          header("Location: pageroue.php");
        }
        elseif ($_COOKIE['FinalResultCVS'] === 'PERDU') {
             header("Location: perdu.php");
        }
    }



    $resultCadCVS = $_COOKIE['resultCadCVS'];
    $resultImgSrcCVS = $_COOKIE['resultImgSrcCVS'];
?>
<!DOCTYPE html>
<html>
    <head>

        <script type="text/javascript">

        //var resultCadeau  = '<?php echo $resultCadCVS;?>';

        //  1 DESSERT🍰 1 CLASSIC SMASH 1 BOISSON 33CL🥤 3 TENDERS🍗
        function js_onload_code (){

        var resultCadeau  = '<?php echo $resultCadCVS;?>';

        console.log(resultCadeau);
        }

        window.onload= js_onload_code ();

        </script>

        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>BRAVO!</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link rel="stylesheet" href="css/firstpage.css" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        <script src="confetti-falling-animation/confetti.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>



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


<!-- ++++++++++++++++ Mobile Users Section +++++++++++++ -->
<div class="container-fluid" align="center" id="MobileUsers">
            <script type="text/javascript">
                toggleConfetti();
        </script>
    <div class="row justify-content-center">
        <table align="center" class="table table-responsive" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" class="animated zoomInBravo">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/TU A GANGER.png" class="imgBravoHeader"></div>
                </td>
            </tr>
            <tr>

                <td align="center" class="animated zoomInDonut delay-08s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <img src="img/Surprize.png" class="imgDonut" id="imgCadeau" width="100%" height="auto" alt="cadeau" onclick="imageChange()" style="margin-top: 0%;">
                        <!-- <img src="<?php echo $_COOKIE['resultImgSrcCVS']; ?>" class="imgDonut" id="imgCadeau" alt="cadeau" style="margin-top: 0%;"> -->
                    </div>
                </td>
            </tr>
            <tr>
                <td align="center" class="animated fadeIn delay-1-6s" id="RecCode" style="display: none;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#formLink"><img src="img/Code.png" class="imgCode"></a></div>
                </td>
            </tr>
        </table>
                   <!-- Adaugarea regulamentului si formulei de contact -->
                    <?php include "reglementContact.php" ?>
    </div>
</div>

<div id="formLink" class="overlay">



                    <div class="popup animated fade" id="popupBravo">
                       <a class="close" href="#" style="color: red;">&times;</a><br>
                        <h2 align="center"><b style="text-transform: uppercase;">Vos coordonnées</b></h2>
                        <div class="content">
                            <p align="center"><b>Remplissez le formulaire avec vos données pour recevoir le code 🎁</b></p>


                            <form method="POST" action="php/insertGagne.php">
                                  <div class="form-group">
                                    <input type="text" class="form-control" id="nomprenom" name="nomPrenom" style="border-radius: 20px" placeholder="Nom et prénom" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" style="border-radius: 20px" aria-describedby="emailInput" placeholder="E-mail" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="tel" class="form-control" id="InputNrTel" oninvalid="ShowErrMessTel()" oninput="ResetErrMessTel()" minlength="10" maxlength="10" pattern="[0]{1}[1-9]{9}" name="tel" style="border-radius: 20px" aria-describedby="InputTel" placeholder="Numéro de tél." required>
                                    <p id="errorMessTel" style="display: none; color: red; font-size: 13px;">&nbsp;&nbsp;*Ecrire un numero de telefon valid!</p>
                                  </div>

                                  <script type="text/javascript">
                                    function ShowErrMessTel() {
                                        var errmess = document.getElementById('errorMessTel');
                                        errmess.style.display = "contents";
                                    }
                                    function ResetErrMessTel() {
                                        var errmess = document.getElementById('errorMessTel');
                                        errmess.style.display = "none";
                                    }
                                  </script>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Termes et Conditions🍔</label>
                                  </div>
                                  <br>
                                  <center>
                                  <button type="submit" class="btn btn-primary" id="submitButt" onclick="sendMessageTrue()">Envoyer
                                  </button>
                              </center>
                            </form>


                        </div>
                    </div>
                </div>


<script type="text/javascript">
//  1 DESSERT🍰 1 CLASSIC SMASH 1 BOISSON 33CL🥤 3 TENDERS🍗
    function imageChange() {

      var resultCadeau  = '<?php echo $resultCadCVS;?>';

      var resultCadImgSrc = '<?php echo $resultImgSrcCVS;?>';

       // resultCadeau = '3 TENDERS🍗';
      // JUST FOR TEST
       // resultCadImgSrc = 'img/tenders.png';

      var code = document.getElementById("RecCode");

      switch(resultCadeau) {

        case "1 DESSERT🍰":
        var image = document.getElementById('imgCadeau');
        image.src = resultCadImgSrc;
        code.style.display = "contents";
        break;

        case "1 CLASSIC SMASH":
        var image = document.getElementById('imgCadeau');
        image.src = resultCadImgSrc;
        code.style.display = "contents";
        break;

        case "3 TENDERS🍗":
        var image = document.getElementById('imgCadeau');
        image.src = resultCadImgSrc;
        code.style.display = "contents";
        break;


        default:
        var image = document.getElementById('imgCadeau');
        image.src = resultCadImgSrc;
        image.style.width = "70%";
        code.style.display = "contents";
      }



      // if (resultCadeau === "1 CLASSIC SMASH") {
      //   var image = document.getElementById('imgCadeau');
      //   image.src = "img/classic.png";
      //   code.style.display = "contents";
      // }
      // else if (resultCadeau === "1 DESSERT🍰") {
      //   var image = document.getElementById('imgCadeau');
      //   image.src = "img/Tiramisu.png";
      //   code.style.display = "contents";
      // }
      // else if (resultCadeau === "1 BOISSON 33CL🥤") {
      //   var image = document.getElementById('imgCadeau');
      //   image.src = "img/canette.png";
      //   code.style.display = "contents";
      // }
      // else {
      //   var image = document.getElementById('imgCadeau');
      //   image.src = "img/tenders.png";
      //   code.style.display = "contents";
      // }

    }

    function sendMessageTrue() {
    if (document. getElementById("nomprenom"). value. length == 0){
        alert("Veuillez saisir votre nom et prénom");
    }
    else if(document. getElementById("exampleInputEmail1"). value. length == 0){
        alert("Veuillez saisir votre mail");
    }
    else if(document. getElementById("InputNrTel"). value. length == 0){
        alert("Veuillez saisir votre numéro de téléphone");
    }
    else if(!document.getElementById('exampleCheck1').is(':checked')){
        alert("Veuillez accepter les termes et conditions pour continuer");
    }
    else{
        location.replace("php/insertGagne.php");
    }


    }

</script>





<!-- ++++++++++++++++ End of Mobile Users Section +++++++++++++ -->










    </body>
</html>
