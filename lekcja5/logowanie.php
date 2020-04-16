	<?php
	session_start();
	require("funkcje.php");
		if(isSet($_POST["zaloguj"])){
			$login = test_input($_POST["login"]);
			$haslo = test_input($_POST["haslo"]);
			
			if($login == "adam" and $haslo == "adam2020"){
				$_SESSION['zalogowanyImie'] = "AdamKowalski";
				$_SESSION['zalogowany'] = 1;
				//echo "zalogowano";
				header("Location: user.php");
				
			}else if($login == "agata" and $haslo == "2020agata"){
				$_SESSION['zalogowanyImie'] = "AgataNowak";
				$_SESSION['zalogowany'] = 1;
				//echo "zalogowano";
				header("Location: user.php");
			}
			else{
				//echo "xd";
				header("Location: index.php");
			}
			
			//echo "przeslany login " . $login;
			//echo "przeslane haslo " . $haslo;
			//echo $osoba1->login;
		}
		
	?>