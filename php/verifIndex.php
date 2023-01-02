<?php


		if (!isset($_COOKIE['userEntryCVS'])) {
           header("Location: index.php");
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
        else{
        	header("Location: ");
            // header("Location: pageroue.php");
        }
	}
	





  ?>