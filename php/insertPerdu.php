<?php
    
    $mysql = new mysqli("i58rh.myd.infomaniak.com", "i58rh_viktor", "ViktorPerso22", "i58rh_cavasmasher");
    $mysql->query("SET NAMES 'utf8'");
          if ($mysql->connect_error) {
             //  echo "Error Number: ".mysql->connect_errno.'<br>';
             // echo "Error:".$mysql->connect_error;
          }

    // Daca conexiunea este corecta va merge la urmatoarea etapa din cod

            else{ 
                    

                        if (isset($_COOKIE['emailUserCookieCVS']) && isset($_COOKIE['telefUserCookieCVS']) && isset($_COOKIE['nameUserCookieCVS']))

                        {

                                // Переменные с формы
                                  $name = $_COOKIE['nameUserCookieCVS'];
                                  $email = $_COOKIE['emailUserCookieCVS'];
                                  $telephone = $_COOKIE['telefUserCookieCVS'];

                                  // Stergerea automata a utilizatorilor dupa o anumita perioada de timp--------------------------------------------

                                  $mysql->query("DELETE FROM `users` WHERE creationdata < NOW() - INTERVAL 1 DAY");

                                  // --------Stergerea automata a utilizatorilor dupa o anumita perioada de timp--------------------------------------------



                                //  Inregistrarea utilizatorilor in baza de date---- 

                                    error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
                                    // создание переменных из полей формы       
                                    if (isset($_COOKIE['nameUserCookieCVS']))
                                             {$name = $_COOKIE['nameUserCookieCVS'];
                                                   if ($name == '') {
                                                    header("Location: ../perdu.php");}
                                                }


                                    if (isset($_COOKIE['emailUserCookieCVS']))        {$email        = $_COOKIE['emailUserCookieCVS'];     if ($email == '')  {header("Location: ../perdu.php");}}
                                    if (isset($_COOKIE['telefUserCookieCVS']))        {$telephone        = $_COOKIE['telefUserCookieCVS'];     if ($telephone == '')  {header("Location: ../perdu.php");}}    

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

                                    // адрес почты куда придет письмо
                                    $address="ungurean729@gmail.com";
                                    $clientaddress = $_COOKIE['emailUserCookieCVS'];
                                    $title = "Ne sois pas triste!";
                                    // текст письма 

                                     $qrcode = "PERDU";


                                     // Inregistrarea datelor utilizatorilor in caz ca nu se repeta datele acestora in baza de date temporara

                                    if (isset($email)) {
                                        $mysql->query("INSERT INTO users (nomprenom, email, phone, qrcode, duration) VALUES ('{$name}', '{$email}', '{$telephone}', '{$qrcode}', CURRENT_TIMESTAMP + INTERVAL 24 HOUR)");
                                    }
                                    else{
                                        echo "nu a fost setat email-ul";
                                    }



                                    // Mai jos sunt componentele pentru textul emailului 

                                            // Mai jos sunt linkurile unde este trimis utilizatorul dupa executarea codului de pe pagina data    


                                            if (isset($name)  &&  isset ($email)) {

                                            header("Location: ../timerpagePerdu.php");
                                            exit();
                                            }
                                            else{
                                            header("Location: ../errorform.html");
                                            }


                        } // elseif daca exista datele 

                else {
                    header("Location: ERROR.html");
                }        

                 $mysql->close();
            }

 ?>