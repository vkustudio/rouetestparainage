<?php

if (isset($_COOKIE['TimerPerduCVS'])){
    header("Location: timerpagePerdu.php");
    }   
elseif (isset($_COOKIE['TimerGagneCVS'])){
        header("Location: timerpageGagne.php");
    }

else{



if (!isset($_COOKIE['userEntryCVS'])) {

    header("Location: mainpage.php");
}
else{

   }
       else{
           header("Location: pageroue.php");
       }


}

?>
