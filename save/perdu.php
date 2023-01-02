<?php
        if (!isset($_COOKIE['userEntryCVS'])) {
           header("Location: index.php");
       }
        elseif (isset($_COOKIE['TimerPerduCVS'])){
        header("Location: timerpagePerdu.php");
        }
        elseif (isset($_COOKIE['TimerGagneCVS'])){
            header("Location: timerpageGagne.php");
        }
       else{

        if(!isset($_COOKIE['FinalResultCVS'])){
          header("Location: pageroue.php");
        }
        elseif ($_COOKIE['FinalResultCVS'] === 'GAGNE') {
             header("Location: bravo.php");
        }
        elseif ($_COOKIE['FinalResultCVS'] === 'SECOND') {
            header("Location: pageroue.php");
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>PERDU🥺</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <meta content="" name="description">
        <meta content="" name="keywords">

        <link rel="stylesheet" href="css/firstpage.css" type="text/css" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
        
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
    <div class="row justify-content-center">
        <table align="center" class="table table-responsive" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" class="animated fadeIn">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/Perdu.png" class="imgBravoHeader" style="margin-top: 5%;"></div>
                </td>
            </tr>

            <tr class="animated zoomIn delay-08s">
                <td align="center">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/2EME-CHANCE.png" class="imgMessage" style="border-radius: 30px;"></div>
                </td>
            </tr>

            <tr>
                <td align="center" class="animated fadeIn delay-1-6s">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                        <form style="margin-top: 5%" method="POST" action="php/insertUserCookiePerdu.php">
                                  <div class="form-group">

                                    <input type="text" class="form-control" id="nomprenom" name="nomPrenom" placeholder="Nom et prénom" style="border-radius: 20px" required>
                                  </div>
                                  <div class="form-group">
                                    <input type="email" class="form-control" id="InputEmail1" name="email" aria-describedby="emailHelp" placeholder="E-mail" style="border-radius: 20px"required>
                                  </div>
                                  <div class="form-group">
                                    <input type="tel" class="form-control" id="InputNrTel" name="tel" aria-describedby="nrTel" placeholder="Numéro de tél." style="border-radius: 20px" required>
                                  </div>
                                  <div class="form-check">
                                    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
                                    <label class="form-check-label" for="exampleCheck1">Termes et Conditions🍔</label>
                                  </div>
                                  <div class="form-button" style="height:20%;">
                                    <button type="submit" class="buttonSubmit" onclick="sendMessageTrue()">
                                        <img src="img/Je-Rejoue.png" class="imgRejoue" style="margin-top: 5%;" width="80">
                                        </button>
                                  </div>
                            </form>
                        </div>
                </td>
            </tr>
        </table>

                   <!-- Adaugarea regulamentului si formulei de contact -->
                    <?php include "reglementContact.php" ?>
    </div>
</div>



<script type="text/javascript">
    function sendMessageTrue() {
    if (document. getElementById("nomprenom"). value. length == 0){
        alert("Veuillez saisir votre nom et prénom");
    }
    else if(document. getElementById("InputEmail1"). value. length == 0){
        alert("Veuillez saisir votre mail");
    }
    else if(document. getElementById("InputNrTel"). value. length == 0){
        alert("Veuillez saisir votre numéro de téléphone");
    }
    else if(!document.getElementById('exampleCheck1').is(':checked')){
        alert("Veuillez accepter les termes et conditions pour continuer");
    }
    else{
        location.replace("php/insertUserCookiePerdu.php");
    }


    }

</script>

<!--  Conditions generale de utilisation -->


<!-- ++++++++++++++++ End of Mobile Users Section +++++++++++++ -->










    </body>
</html>
