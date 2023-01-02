<?php

    if (isset($_COOKIE['TimerGagneCVS'])) {
        header("Location: ../timerpageGagne.php");
    }
    elseif (isset($_COOKIE['TimerPerduCVS'])) {
        header("Location: ../timerpagePerdu.php");
    }

    $mysql = new mysqli("i58rh.myd.infomaniak.com", "i58rh_viktor", "ViktorPerso22", "i58rh_cavasmasher");
    $mysql->query("SET NAMES 'utf8'");
    if ($mysql->connect_error) {
       //  echo "Error Number: ".mysql->connect_errno.'<br>';
       // echo "Error:".$mysql->connect_error;
    }

    // Daca conexiunea este corecta va merge la urmatoarea etapa din cod

    else{

if (isset($_POST['nomPrenom']) && isset($_POST['email']) && isset($_POST['tel']) ) {
    // Переменные с формы
    $name = $_POST['nomPrenom'];
    $email = $_POST['email'];
    $telephone = $_POST['tel'];
    $qrcodeValue = "GAGNE";





    // Stergerea automata a utilizatorilor dupa o anumita perioada de timp

    $mysql->query("DELETE FROM `users` WHERE creationdata < NOW() - INTERVAL 1 DAY");



    // Verificarea daca utilizatorii introdusi nu exista deja in baza de date TEMPORARA

    $norepeat = true;

    $result = $mysql->query("SELECT email, phone, qrcode FROM users");
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {

            if ($email === $row['email']) {
                        header("Location: erroruserInsert.php");
                        exit();
                     }
            elseif ($telephone === $row['phone']) {
                    header("Location: erroruserInsert.php");
                        exit();
                    }
            else{
                $norepeat = true;
            }

        }
    }


    // Verificarea daca utilizatorii introdusi nu exista deja in baza de date PERMANENTA

    $norepeatuser = false;

    $resultuser = $mysql->query("SELECT email, phone FROM userspermanent");
    if ($resultuser->num_rows > 0) {
        while ($row = $resultuser->fetch_assoc()) {
            if ($email === $row['email']) {
                $counterpeatuser++;
            }
            elseif ($telephone === $row['phone']) {
                $counterpeatuser++;
            }
            else{
                $norepeatuser = true;
            }

        }
    }








    //  Inregistrarea utilizatorilor in baza de date---- Trimiterea mesajului catre Firma / CLIENT---------------------------------

    error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
    // создание переменных из полей формы
    if (isset($_POST['nomPrenom']))         {$name         = $_POST['nomPrenom'];      if ($name == '')   {unset($name);}}
    if (isset($_POST['email']))        {$email        = $_POST['email'];     if ($email == '')  {unset($email);}}
    if (isset($_POST['tel']))        {$telephone        = $_POST['tel'];     if ($telephone == '')  {unset($telephone);}}

    //стирание треугольных скобок из полей формы
    /* комментарий */
    if (isset($name) ) {
    $name=stripslashes($name);
    $name=htmlspecialchars($name);
    }
    if (isset($email) ) {
    $email=stripslashes($email);
    $email=htmlspecialchars($email);
    }
    if (isset($telephone) ) {
    $telephone=stripslashes($telephone);
    $telephone=htmlspecialchars($telephone);
    }













    // Inregistrarea datelor utilizatorilor in caz ca nu se repeta datele acestora in baza de date temporara

    if ($norepeat = true) {

        $mysql->query("INSERT INTO users (nomprenom, email, phone, qrcode, duration) VALUES ('{$name}', '{$email}', '{$telephone}', '{$qrcodeValue}', CURRENT_TIMESTAMP + INTERVAL 24 HOUR)");

            // Stabilirea duratiei de 24 de ore pentru campul duration

    }

    else{
        echo "Inregistrarea a esuat";
        echo "<br>" .$email;
        echo "<br>" .$name;
        echo "<br>" .$telephone;
        echo "<br>" .$qrcodeValue;
        echo "<br>" .$norepeat;

        exit(); //---------------------- O pagina de EROARE DIFERITA DE CEA CU TIMER
    }

    // Inregistrarea datelor utilizatorilor in caz ca nu se repeta datele acestora in baza de date permanenta

    if ($counterpeatuser > 0) {
    $norepeatuser = false;
    }
    else{
        $mysql->query("INSERT INTO userspermanent (nomprenom, email, phone) VALUES ('{$name}', '{$email}', '{$telephone}')");
    }

    // Mai jos sunt componentele pentru textul emailului




    // Bucatade cod ce se ocupa de generarea codului QR pentru cei care castig

    $newDateTime = date("F d, Y H:i:s", strtotime("+1 day"));



    $randomNumber = rand ( 100000 , 999999 );

    // Linkul pentru mesajul final la Scanarea Codului
    $qrDataLink = "https://like-up.fr/like-up-games/Ca-va-Smasher/Winers/usersWin/" . $randomNumber . "x" . $email . ".html";
    // Linkul pentru mesajul final la Scanarea Codului.
    $qrSize = "300";

    $qrCodeCreation = "https://chart.googleapis.com/chart?chl=" . $qrDataLink . "&chs=" . $qrSize . "x" . $qrSize . "&cht=qr";

    setcookie("QrCodeRandomLinkCVS", $randomNumber, time() + 84600, "/", "like-up.fr");
    setcookie("QrCodeEmailClientCVS", $email, time() + 84600, "/", "like-up.fr");
    setcookie("QrCodeNameClientCVS", $name, time() + 84600, "/", "like-up.fr");
    setcookie("QrCodeExpireTimeCVS", $newDateTime, time() + 84600, "/", "like-up.fr");



    // Deocamdata lasata valoarea GAGNE pana la generarea codului

    $title = "Tu as gagné!";

    $imgLogoDonuts="https://like-up.fr/like-up-games/Ca-va-Smasher/img/email/favilogo.png";

    $note_text_client = "<br>
        <center>
            <img src='$imgLogoDonuts' width='150px' height='auto'/><br>
            <h1>SALUT $name !</h1><br>
            <h3>Toutes nos félicitations</h3><br>
            <h2>TU AS GAGNÉ!</h2><br>
            <img src='$qrCodeCreation'/>
            <h3><b>CE CODE EST VALABLE 24h</b></h3><br>
            <h2>MERCI!</h2>

        </center>";


    if (isset($name)  &&  isset ($email) ) {
    mail($email,$title,$note_text_client,"Content-type:text/html; utf-8");

    setcookie("TimerGagneCVS", $newDateTime, time() + 84600, "/", "like-up.fr");

    // Trimiterea utilizatorului pe pagina de creare a mesajului finalm, Dupa trimiterea pe TimerPage

    // header("Location: ../timerpageGagne.php");
        header("Location: ../Winers/voucherGen.php");

    exit();

    }
    else{
    header("Location: ../errorform.html");
    }



//------------------------------------------------------------------------










    }
    else{
        header("Location: ../bravo.php");
    }




    $mysql->close();
}



?>
