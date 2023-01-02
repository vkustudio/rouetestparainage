<?php
    
    $mysql = new mysqli("i58rh.myd.infomaniak.com", "i58rh_viktor", "ViktorPerso22", "i58rh_cavasmasher");
    $mysql->query("SET NAMES 'utf8'");
          if ($mysql->connect_error) {
             //  echo "Error Number: ".mysql->connect_errno.'<br>';
             // echo "Error:".$mysql->connect_error;
          }

    // Daca conexiunea este corecta va merge la urmatoarea etapa din cod

            else{ 
                    if (!isset($_POST['nomPrenom']) || !isset($_POST['email']) || !isset($_POST['tel']) ) {
                    header("Location: ../perdu.php");
                        }

                        elseif (isset($_POST['nomPrenom']) && isset($_POST['email']) && isset($_POST['tel']))

                        {

                                // Переменные с формы
                                  $name = $_POST['nomPrenom'];
                                  $email = $_POST['email'];
                                  $telephone = $_POST['tel'];

                                  // Stergerea automata a utilizatorilor dupa o anumita perioada de timp--------------------------------------------

                                  $mysql->query("DELETE FROM `users` WHERE creationdata < NOW() - INTERVAL 1 DAY");

                                  // --------Stergerea automata a utilizatorilor dupa o anumita perioada de timp--------------------------------------------


                                  // Verificarea daca utilizatorii introdusi nu exista deja in baza de date TEMPORARA

                                  $norepeat = false;
                                  $result = $mysql->query("SELECT email, phone FROM users");

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


                                //  Inregistrarea utilizatorilor in baza de date---- 

                                    error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
                                    // создание переменных из полей формы       
                                    if (isset($_POST['nomPrenom']))
                                             {$name = $_POST['nomPrenom'];
                                                   if ($name == '') {
                                                    header("Location: ../perdu.php");}
                                                }


                                    if (isset($_POST['email']))        {$email        = $_POST['email'];     if ($email == '')  {header("Location: ../perdu.php");}}
                                    if (isset($_POST['tel']))        {$telephone        = $_POST['tel'];     if ($telephone == '')  {header("Location: ../perdu.php");}}    

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
                                    $clientaddress = $_POST['email'];
                                    $title = "Ne sois pas triste!";
                                    // текст письма 




                                    // Inregistrarea datelor utilizatorilor in caz ca nu se repeta datele acestora in baza de date permanenta

                                    if ($counterpeatuser > 0) {
                                    $norepeatuser = false;
                                    }
                                    else{
                                        $mysql->query("INSERT INTO userspermanent (nomprenom, email, phone) VALUES ('{$name}', '{$email}', '{$telephone}')");
                                    }



                                     // Inregistrarea datelor utilizatorilor in caz ca nu se repeta datele acestora in baza de date temporara

                                    if ($norepeat = true) {

                                            $valueForSecondChance = "SECOND";



                                            setcookie("FinalResultCVS", "PERDU", time() - 84600 , "/", "like-up.fr");

                                            setcookie("FinalResultCVS", $valueForSecondChance, time() + 84600, "/", "like-up.fr");

                                            setcookie("emailUserCookieCVS", $clientaddress, time() + 84600, "/", "like-up.fr");
                                            setcookie("telefUserCookieCVS", $telephone, time() + 84600, "/", "like-up.fr");
                                            setcookie("nameUserCookieCVS", $name, time() + 84600, "/", "like-up.fr");

                                            header("Location: ../pageroueSecond.php");

                                            exit();


                                    }
                                    else{
                                        echo "Inregistrarea a esuat";
                                        header("Location: erroruserInsert.php");
                                        exit();
                                    }




                                    // Mai jos sunt componentele pentru textul emailului 



                                            // Mai jos sunt linkurile unde este trimis utilizatorul dupa executarea codului de pe pagina data    



                        } // elseif daca exista datele 

                else {
                    header("Location: ERROR.html");
                }        

                 $mysql->close();
            }

 ?>