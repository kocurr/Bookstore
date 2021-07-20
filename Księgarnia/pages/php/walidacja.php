<?php
if (isset($_POST['remail']))
	{
		$wszystko_OK=true;

		$login = $_POST['rlogin'];
		if ((strlen($login)<3) || (strlen($login)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Nick musi posiadać od 3 do 20 znaków!";
		}

		if (ctype_alnum($login)==false)
		{
			$wszystko_OK=false;
			$_SESSION['e_login']="Nick może składać się tylko z liter i cyfr (bez polskich znaków)";
		}

    $email = $_POST['remail'];
    $emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
    if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}

    $haslo1 = $_POST['rpswd1'];
    $haslo2 = $_POST['rpswd2'];

    if ((strlen($haslo1)<8) || (strlen($haslo1)>20))
    	{
    		$wszystko_OK=false;
    		$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
    	}
    if ($haslo1!=$haslo2)
    	{
    		$wszystko_OK=false;
    		$_SESSION['e_haslo']="Podane hasła nie są identyczne!";
    	}

    $haslo_hash = password_hash($haslo1, PASSWORD_DEFAULT);

		if(!isset($_POST['regulamin']))
		{
			$wszystko_OK = false;
			$_SESSION['e_regulamin'] = "Potwierdz akceptacje regulaminu!";
		}

		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);

		try {
 			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if($polaczenie -> connect_errno!=0)
		  {
		      throw new Exception(mysqli_connect_errno());
		  }
			else {
				$rezultat = $polaczenie->query("SELECT id FROM user WHERE email = '$email'");
				if(!$rezultat) throw new Exception($polaczenie->error);

				$ile_taki_maili = $rezultat->num_rows;
				if($ile_taki_maili>0){
					$wszystko_OK = false;
					$_SESSION['e_email'] = "Istnieje konto z takim e-mailem!";
				}

				$rezultat = $polaczenie->query("SELECT ID FROM user WHERE login='$login'");

				if (!$rezultat) throw new Exception($polaczenie->error);

				$ile_takich_nickow = $rezultat->num_rows;
				if($ile_takich_nickow>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_login']="Istnieje już gracz o takim nicku! Wybierz inny.";
				}

				if ($wszystko_OK==true)
				{
					if ($polaczenie->query("INSERT INTO user VALUES (NULL, '$login', '$haslo_hash', '$email')"))
					{
						$_SESSION['udanarejestracja']="Gratulujemy i dziękujemy za dołączenie! Możesz się teraz zalogować";
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				$polaczenie->close();
			}
		}
		catch(Exception $e){
			echo '<span>Błąd serwera!</span>'.$e;
		}
	}
?>
