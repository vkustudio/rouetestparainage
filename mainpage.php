<?php
error_reporting(E_ERROR | E_PARSE);
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

        if(isset($_COOKIE['FinalResultCVS'])){

         if ($_COOKIE['FinalResultCVS'] === 'GAGNE') {
            header("Location: php/verifGagne.php");
        }
         elseif ($_COOKIE['FinalResultCVS'] === 'PERDU') {
            header("Location: php/verifPerdu.php");
        }
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <title>ÇA VA SMASHER ! 🍔</title>
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
        <script type="text/javascript">    $(".animated").addClass("delay-1s");</script>
        <!-- col-  xs sm md lg  -->

<!-- ++++++++++++++++ Computer Users Section +++++++++++++ -->


    <div class="container justify-content-center" id="ComputerUsers">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 container justify-content-center fadeIn">
            <p class="textP"><b>Désolé mais cette page est uniquement pour les utilisateurs mobiles</b></p><br>
            <p class="subtextp"><b>Scannez le code sur votre téléphone portable pour continuer</b></p>
            <br>
            <img src="img/qr-code.png" alt="qrCode" class="QrCodePc">

            </div>
        </div>
    </div>



<!-- ++++++++++++++++ End of Computer Users Section +++++++++++++ -->


<!-- ++++++++++++++++ Mobile Users Section +++++++++++++ -->
<div class="container-fluid" align="center" id="MobileUsers">
    <div class="row justify-content-center">
        <table align="center" class="table table-responsive" cellpadding="0" cellspacing="0">
            <tr>
                <td align="center" class="animated fade">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/logo.png" class="imgLogoHeader" style="width: 60%;"></div>
                </td>
            </tr>
            <tr>

                <td align="center" class="animated zoomIn">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><img src="img/CADEAU.png" class="imgCadeau"></div>
                </td>
            </tr>
            <tr>
                <td align="center" class="animated fade" style="margin-top: -3%;">
                    <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12"><a href="#instagramlink"><img src="img/Cliquez-ici.png" class="imgBegin1"></a></div>
                </td>
            </tr>
        </table>
                    <!-- Adaugarea regulamentului si formulei de contact -->
                    <?php include "reglementContact.php" ?>
    </div>

</div>

                <div id="instagramlink" class="overlay">
                    <div class="popupInst">
                        <h2 align="center"><b>REJOIGNEZ-NOUS!</b></h2>
                        <div class="content" style="text-align: center;">
                             <center>
                            <p align="center" id="pInsta"><b>Suivez ÇA VA SMASHER ! 🍔 puis revenez sur cette page pour participer à notre jeu.</b></p>
                            <p align="center" onclick="shareImage()" style="background-color: #FDC400; color: black; border-radius: 30px; width: 60%; padding: 8px;">
                                <b id="socialMedName">PARTAGER</b>
                            </p>
                            </center>
                        </div>
                    </div>
                </div>
<!-- ++++++++++++++++ End of Mobile Users Section +++++++++++++ -->




<script type="text/javascript">

        let socialMedName = document.getElementById('socialMedName'); 

        async function shareImage() {
                        const response = await fetch('img/flayer.png');
                        const blob = await response.blob();
                        const filesArray = [
                            new File(
                            [blob],
                            'img/flayer.png',
                            {
                                type: "image/png",
                                lastModified: new Date().getTime()
                            }
                        )
                        ];
                        const shareData = {
                            files: filesArray,
                        };
                        navigator.share(shareData);
                        location.replace("pageroue.php");
                        }   



</script>


    </body>
</html>
