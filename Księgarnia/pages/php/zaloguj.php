<?php
  session_start();


  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
  if($polaczenie -> connect_errno!=0)
  {
      echo"Error: ".$polaczenie -> connect_errno;
  }
  else {
    $login = $_POST['login'];
    $haslo = $_POST['pswd'];
    $login = htmlentities($login, ENT_QUOTES, "UTF-8");

    if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM user WHERE login ='%s'",
    mysqli_real_escape_string($polaczenie,$login))))
    {
      $ilu_userow = $rezultat -> num_rows;
      if($ilu_userow > 0)
      {
        $wiersz = $rezultat->fetch_assoc();
        if(password_verify($haslo, $wiersz['haslo']))
        {
          $_SESSION['zalogowany'] = true;
          $_SESSION['user'] = $wiersz['login'];
          unset($_SESSION['blad']);
          $rezultat->free_result();
          header('Location: ../../index_zal.php');
        }
        else
        {
          $_SESSION['blad'] = '<span style="color: red;">Nieprawidłowy logi lub hasło!</span>';
          header('Location: logowanie.php');
        }
      }
      else
      {
        $_SESSION['blad'] = '<span style="color: red;">Nieprawidłowy logi lub hasło!</span>';
        header('Location: logowanie.php');
      }
    }
    $polaczenie->close();
  }

 ?>
