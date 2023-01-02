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

        <link rel="stylesheet" href="css/main.css" type="text/css" />
        <script type="text/javascript" src="js/Winwheel.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&family=Roboto:wght@500&display=swap" rel="stylesheet">


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
            .clickedButton:hover {
                background-color: green;
            }
        </style>


    </head>


    <body style="background: url('img/Background-2.png') no-repeat center center fixed; background-size: 100% 100%;">
        <!-- col-  xs sm md lg  -->



    <div class="container justify-content-center" id="containerPC">
        <div class="row">
            <div class="col-lg-10 col-md-10 col-sm-10 container justify-content-center">
                <h1>Désolé mais cette page est uniquement pour les utilisateurs mobiles</h1>
            </div>
        </div>
    </div>


<!--=======================================================================================================
Mobile version
===========================================================================================================-->
<div class="container d-flex justify-content-center" id="containerMobile">
    <div class="row">

        <div class="col-xs-12 col-sm-12 d-flex justify-content-center"><img src="img/logo.png" width="150px" height="auto" class="imgLogoHeader animated fadeIn" style="width= 60%;"></div>
        <div class="col-xs-12 col-sm-12 pt-3 d-flex justify-content-center">
           <!--  <a href="#" onclick="play();"> -->
            <!-- <a class="clickedButton" style="background-color: white; color: black; padding: 10px 15px; border-radius: 20px; box-shadow: 0px 10px 1px 3px #888888;" onclick="startSpin();"><b style="font-size: 28px; font-weight: 800; font-family: Montserrat; letter-spacing: 3px;">JOUER ICI</b><br><b style="font-size: 15px; color: #C54A8D; font-family: Roboto; line-height: 2px;">GOOD LUCK 💘</b></a>  -->
            <img src="img/JOUER ICI.png" class="imgLogoSubHeader animated fadeIn" id="spin_button" alt="Spin" style="margin-top: 5%;" onClick="startSpin();">
        <!-- </a> -->
     </div>

</div>
</div>



<!--=======================================================================================================
Spining wheel begining
===========================================================================================================-->
        <footer class="container-fluid d-flex justify-content-center" valign="bottom">
        <div class="container-fluid" id="Mainspin" style="position:relative; top:-50px; left:0px; z-index: -1;">
<!--                 <div class="row">
                    <div class="col-xs-12 col-sm-12">
                            <img src="img/pique.png" class="col-xs-12 col-sm-12" id="piqueRoue">
                    </div>
                </div> -->
                <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <img src="img/pique.png" id="piqueRoue" style="display: none;">

                            <canvas id="canvas" class="col-xs-12 col-sm-12 animated zoomIn" width="768" height="1000"></canvas>

                            </div>
                    </div>
                </div>
        </footer>

<script type="text/javascript">

window.onload = function DrawImagePique() {
  var c = document.getElementById("canvas");
  var ctx = c.getContext("2d");
  var img = document.getElementById("piqueRoue");
    ctx.drawImage(img, 364, 50, 40, 70);  //context.drawImage(img,sx,sy,swidth,sheight,x,y,width,height);
    ctx.save();
    ctx.restore();
};

</script>


<!-- <audio id="audio" src="sound/musictick.mp3" controls="controls" loop="loop" style="display: none;"></audio>  -->



























<?php
    $resultRoue = "";
 ?>

<script>
          function play() {
            var audio = new Audio('sound/musictick.mp3');
            if (isSpining = true) {
                audio.play();
                audio.loop = false;
                isSpining = false
            }
            else{
                audio.pause();
                audio.currentTime = 0;
            }
          }
        </script>













        <script>
        function percentNumber(){
          var k = 0;
          var resultat = 0;
          var Lose = [53.5, 126, 198, 270.5, 342];
          var Win = [18, 89.5, 162.5, 234, 306];
          k = Math.floor(Math.random() * 101);
          console.log(k);
          if (k <= 86) {
            resultat = Lose[Math.floor(Math.random()*Lose.length)];
            return resultat;
            console.log(resultat);
          }
          else {
            resultat = Win[Math.floor(Math.random()*Win.length)];
            return resultat;
            console.log(resultat);
          }
        }

            // Create new wheel object specifying the parameters at creation time.
            var theWheel = new Winwheel({
                'numSegments'       : 10,         // Specify number of segments.
                'outerRadius'       : 450,       // Set outer radius so wheel fits inside the background.
                'drawMode'          : 'image',   // drawMode must be set to image.
                'drawText'          : true,      // Need to set this true if want code-drawn text on image wheels.
                'textFontSize'      : 30,        // Set text options as desired.
                'textOrientation'   : 'horizontal',
                'textDirection'     : 'normal',
                'textAlignment'     : 'center',
                'textMargin'        : -11,
                'numSegments'       : 10,
                'innerRadius'       : 10,
                'rotationAngle'     : 0,
                'textFontFamily'    : 'Helvetica Neue',
                'textStrokeStyle'   : 'black',
                'textLineWidth'     : 1,
                'textFillStyle'     : 'black',
                'segments'     :                // Define segments.
                [
                   {'text' : '1 DESSERT🍰'}, // 18
                   {'text' : 'PERDU...'},    // 53.5
                   {'text' : '1 CLASSIC SMASH'}, // 89.5
                   {'text' : 'PERDU...'},    // 126
                   {'text' : '1 BOISSON 33CL🥤'}, // 162.5
                   {'text' : 'PERDU...'},    // 198
                   {'text' : '3 TENDERS🍗'}, // 234
                   {'text' : 'PERDU...'},    // 270.5
                   {'text' : '3 TENDERS🍗'}, // 306
                   {'text' : 'PERDU...'}    // 342
                ],
                'animation' :                   // Specify the animation to use.
                {
                    'type'     : 'spinToStop',
                    'stopAngle': percentNumber(),
                    'duration' : 5,     // Duration in seconds.
                    'spins'    : 8,     // Number of complete spins.
                    'callbackFinished' : alertPrize,
                }
            });


            // // Create Sound Effect
            // var audio = new Audio('sound/musictick.mp3');  // Create audio object and load tick.mp3 file.

            // function playSound()
            // {
            //     // Stop and rewind the sound if it already happens to be playing.
            //     audio.pause();
            //     audio.currentTime = 0;

            //     // Play the sound.
            //     audio.play();
            // }

            var isSpining = new Boolean(false);
            // Create new image object in memory.
            var loadedImg = new Image();

            // Create callback to execute once the image has finished loading.
            loadedImg.onload = function()
            {
                theWheel.wheelImage = loadedImg;    // Make wheelImage equal the loaded image object.
                theWheel.draw();                    // Also call draw function to render the wheel.
            }

            // Set the image source, once complete this will trigger the onLoad callback (above).
            loadedImg.src = "img/Roue2.png";



            // Vars used by the code in this page to do power controls.
            var wheelPower    = 3;
            var wheelSpinning = false;





            // -------------------------------------------------------
            // Function to handle the onClick on the power buttons.
            // -------------------------------------------------------
            function powerSelected(powerLevel)
            {
                // Ensure that power can't be changed while wheel is spinning.
                if (wheelSpinning == false)
                {
                    // Reset all to grey incase this is not the first time the user has selected the power.
                    document.getElementById('pw1').className = "";
                    document.getElementById('pw2').className = "";
                    document.getElementById('pw3').className = "";

                    // Now light up all cells below-and-including the one selected by changing the class.
                    // if (powerLevel >= 1)
                    // {
                    //     document.getElementById('pw1').className = "pw1";
                    // }

                    // if (powerLevel >= 2)
                    // {
                    //     document.getElementById('pw2').className = "pw2";
                    // }

                    if (powerLevel >= 3)
                    {
                        document.getElementById('pw3').className = "pw3";
                    }

                    // Set wheelPower var used when spin button is clicked.
                    wheelPower = powerLevel;

                    // Light up the spin button by changing it's source image and adding a clickable class to it.
                    // document.getElementById('spin_button').src = "img/Clique-ici.png";
                    // document.getElementById('spin_button').className = "clickable";
                }
            }

            // -------------------------------------------------------
            // Click handler for spin button.
            // -------------------------------------------------------
            function startSpin()
            {


                // Ensure that spinning can't be clicked again while already running.
                if (wheelSpinning == false)
                {
                    isSpining = true;
                    play();
                    // Based on the power level selected adjust the number of spins for the wheel, the more times is has
                    // to rotate with the duration of the animation the quicker the wheel spins.

                    if (wheelPower == 3)
                    {
                        theWheel.animation.spins = 8;
                    }

                    // Disable the spin button so can't click again while wheel is spinning.
                    // document.getElementById('spin_button').src       = "imgLogoSubHeader";
                    // document.getElementById('spin_button').className = "";

                    // Begin the spin animation by calling startAnimation on the wheel object.

                    theWheel.startAnimation();




                    // Set to true so that power can't be changed and spin button re-enabled during
                    // the current animation. The user will have to reset before spinning again.
                    wheelSpinning = true;




                }
            }

            // -------------------------------------------------------
            // Function for reset button.
            // -------------------------------------------------------
            function resetWheel()
            {
                theWheel.stopAnimation(false);  // Stop the animation, false as param so does not call callback function.
                theWheel.rotationAngle = 0;     // Re-set the wheel angle to 0 degrees.
                theWheel.draw();                // Call draw to render changes to the wheel.

                document.getElementById('pw1').className = "";  // Remove all colours from the power level indicators.
                document.getElementById('pw2').className = "";
                document.getElementById('pw3').className = "";

                wheelSpinning = false;          // Reset to false to power buttons and spin can be clicked again..


            }

            // -------------------------------------------------------
            // Called when the spin animation has finished by the callback feature of the wheel because I specified callback in the parameters.
            // note the indicated segment is passed in as a parmeter as 99% of the time you will want to know this to inform the user of their prize.
            // -------------------------------------------------------
            function alertPrize(indicatedSegment)
            {
                // Do basic alert of the segment text. You would probably want to do something more interesting with this information.
                // alert("Vous avez " + indicatedSegment.text);

                // Aici adaugam functia de f=verificare daca nu este a doua sansa

                        // 1 DESSERT🍰 1 CLASSIC SMASH 1 BOISSON 33CL🥤 3 TENDERS🍗


                if (indicatedSegment.text === '1 DESSERT🍰') {
                    var resultRoue = "GAGNE";
                    var resultcad = "1 DESSERT🍰";
                    var resultImgSrc = "img/Tiramisu.png";
                    document.cookie = "resultRoueCVS="+resultRoue;
                    document.cookie = "resultCadCVS="+resultcad;
                    document.cookie = "resultImgSrcCVS="+resultImgSrc;

                    location.replace("php/verifGagne.php");
                }
                else if (indicatedSegment.text === '1 CLASSIC SMASH') {
                    var resultRoue = "GAGNE";
                    var resultcad = "1 CLASSIC SMASH";
                    var resultImgSrc = "img/Classic.png";
                    document.cookie = "resultRoueCVS="+resultRoue;
                    document.cookie = "resultCadCVS="+resultcad;
                    document.cookie = "resultImgSrcCVS="+resultImgSrc;

                    location.replace("php/verifGagne.php");
                }
                else if (indicatedSegment.text === '1 BOISSON 33CL🥤') {
                    var resultRoue = "GAGNE";
                    var resultcad = "1 BOISSON 33CL🥤";
                    var resultImgSrc = "img/canette.png";
                    document.cookie = "resultRoueCVS="+resultRoue;
                    document.cookie = "resultCadCVS="+resultcad;
                    document.cookie = "resultImgSrcCVS="+resultImgSrc;

                    location.replace("php/verifGagne.php");
                }
                else if (indicatedSegment.text === '3 TENDERS🍗') {
                    var resultRoue = "GAGNE";
                    var resultcad = "3 TENDERS🍗";
                    var resultImgSrc = "img/Tenders.png";
                    document.cookie = "resultRoueCVS="+resultRoue;
                    document.cookie = "resultCadCVS="+resultcad;
                    document.cookie = "resultImgSrcCVS="+resultImgSrc;

                    location.replace("php/verifGagne.php");
                }
                else{
                    var resultRoue = "PERDU";
                    document.cookie = "resultRoueCVS="+resultRoue;
                    location.replace("php/verifPerdu.php");

                }


            }
        </script>






    </body>
</html>
