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
                            <p align="center" onclick="ChangePageRoue()" style="background-color: #FDC400; color: black; border-radius: 30px; width: 60%; padding: 8px;">
                                <b id="socialMedName"></b>
                            </p>
                            </center>
                        </div>
                    </div>
                </div>
<!-- ++++++++++++++++ End of Mobile Users Section +++++++++++++ -->






<?php

$valueFirst = $_COOKIE['userEntryCVS'];

if(isset($_COOKIE['CycleTHRDyz'])){
    $cycleTHRDyz = $_COOKIE['CycleTHRDyzON'];
    $cycleTHRDyz = $cycleTHRDyz + 1;
    setcookie("CycleTHRDyzON", $cycleTHRDyz, time() + 84600, "/", "like-up.fr");
}
else{
    $CycleRest = $_COOKIE["CycleRestON"];
    $CycleRest = $CycleRest + 1;
    setcookie("CycleRestON", $cycleTHRDyz, time() + 84600, "/", "like-up.fr");
}


?>


<script type="text/javascript">
        let CycleTHR = '<?php  echo $_COOKIE["CycleTHRDyz"];?>';
        let CycleRest = '<?php  echo $_COOKIE["CycleRestON"];?>';
        let cycleTHRDyz = '<?php  echo $_COOKIE["CycleTHRDyzON"];?>';

        console.log(cycleTHRDyz);
        let socialMedName = document.getElementById('socialMedName'); 
        <?php if($_COOKIE['CycleTHRDyzON'] == 3){
                setcookie("CycleTHRDyzON", 0, time() + 84600, "/", "like-up.fr");
            } ?>

        if(CycleTHR >= 0){
            CycleTHRDyzON();
        }
        else{
            CycleTHRDyzOFF();
        }


    function CycleTHRDyzON(){
        if(cycleTHRDyz == 0){
            socialMedName.innerHTML = "INSTAGRAM";
        }
        else if(cycleTHRDyz == 1){
            socialMedName.innerHTML = "GOOGLE";
        }
        else if(cycleTHRDyz == 2){
            socialMedName.innerHTML = "FACEBOOK";
        }
        else{
            socialMedName.innerHTML = "SNAPCHAT";
            cycleTHRDyz = 0;
        }
    }

    function CycleTHRDyzOFF(){
        socialMedName.innerHTML = "PARTAGER";
    }

    function ChangePageRoue() {

        if(cycleTHRDyz == 0){
            //INSTAGRAM LINK
            window.open('https://www.instagram.com/cava_smasher/');
            location.replace("pageroue.php");
        }
        else if(cycleTHRDyz == 1){
            // GOOGLE LINK
            window.open('https://goo.gl/maps/BAp5wpALiWcciqPa9');
            location.replace("pageroue.php");
        }
        else if(cycleTHRDyz == 2){
            // FACEBOOK LINK
            window.open('https://www.facebook.com/profile.php?id=100085553797421');
            location.replace("pageroue.php");
        }
        else if(cycleTHRDyz == 3){
            // SNAPCHAT LINK
            window.open('https://t.snapchat.com/yruw5jBR');
            location.replace("pageroue.php");
        }
        else{
            window.open('#');
            location.replace("#");
        }
        
            
        }


</script>


    </body>
</html>
