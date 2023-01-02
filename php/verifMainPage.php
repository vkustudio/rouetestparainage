<?php
	
	if ($_COOKIE["socialCookieCVS"] = "INSTAGRAM") {
		setcookie("socialCookieCVS", "", time() - 84600, "/", "like-up.fr");
		setcookie("socialCookieCVS", "GOOGLE", time() + 84600, "/", "like-up.fr");
		header("Location: ../pageroue.php");
	}
	elseif ($_COOKIE["socialCookieCVS"] = "GOOGLE") {
		setcookie("socialCookieCVS", "", time() - 84600, "/", "like-up.fr");
		setcookie("socialCookieCVS", "FACEBOOK", time() + 84600, "/", "like-up.fr");
		header("Location: ../pageroue.php");
	}
	else {
		setcookie("socialCookieCVS", "", time() - 84600, "/", "like-up.fr");
		setcookie("socialCookieCVS", "INSTAGRAM", time() + 84600, "/", "like-up.fr");
		header("Location: ../pageroue.php");
	}
  ?>