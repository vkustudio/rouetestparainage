<?php


    $newDateTime = date("F d, Y H:i:s", strtotime("+1 day"));

    setcookie("TimerPerduCVS", $newDateTime, time() + 84600, "/", "like-up.fr");

    header("Location: insertPerdu.php");

    exit();

  ?>