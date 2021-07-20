<?php
  session_start();
  require "walidacja.php";
?>
<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <title>Fabryka Książek - logowanie</title>
</head>

<body onscroll="myFunction()">
  <header class="navbar-fixed-top" id="nav1">
    <nav class="navbar navbar-dark bg-dark py-4 navbar-expand-lg ">
      <a class="navbar-brand" href="../../index.php" id="brand"><img src="../../img/icon.png" width="40" height="40" alt="ikona" class="d-inline-block mx-3" /> Fabryka Książek</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-auto" id="mainmenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-3 " href="../../index.php">Start</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 disabled" href="pages/fantastyka.php">Fantastyka</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 disabled" href="pages/kryminal.php">Kryminał</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 disabled" href="pages/przygodowe.php">Przygodowe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-3 disabled" href="pages/sportowe.php">Sportowe</a>
          </li>
          <div class="d-flex flex-row-reverse">

          <li class="nav-item" >
            <a class="nav-link mx-3" id="log" href="logowanie.php">Zaloguj i się korzystaj!</a>
          </li>
          <div>
        </ul>
      </div>
    </nav>
  </header>
  <main>
    <section id="formularze">
      <div class="container">
        <div class="row">
          <div class="col-md-5  offset-md-1" id="logowanie">
            <form action="zaloguj.php" method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="uname">Login:</label>
                <input type="text" class="form-control" id="uname" placeholder="Wpisz nazwę użytkownika" name="login" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>

              </div>
              <div class="form-group">
                <label for="pwd">Hasło:</label>
                <input type="password" class="form-control" id="pwd" placeholder="Wpisz hasło" name="pswd" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>
              </div>
              <div class="custom-control custom-checkbox mb-3">
                  <input class="custom-control-input" type="checkbox" id="regulamin" name="remember" required>
                <label class="custom-control-label" for="regulamin">
                  Akceptuję <span>regulamin</span>.
                  <div class="valid-feedback">Poprawnie.</div>
                  <div class="invalid-feedback">Proszę zaznacz to pole.</div>
                </label>
              </div>
              <button type="submit" class="btn btn-primary button">Zaloguj</button>
            </form>
            <?php
              if(isset($_SESSION['blad'])){
                echo $_SESSION['blad'];
                unset($_SESSION['blad']);
              }
             ?>
          </div>

          <div class="col-md-5 offset-md-1" id="rejestracja">
            <form method="post" class="needs-validation" novalidate>
              <div class="form-group">
                <label for="rname">Login:</label>
                <input type="text" class="form-control" id="rname" placeholder="Wpisz nazwę użytkownika" name="rlogin" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>
              </div>
              <?php
                if (isset($_SESSION['e_login']))
                {
                    echo '<div class="error">'.$_SESSION['e_login'].'</div>';
    		            unset($_SESSION['e_login']);
                }
              ?>
              <div class="form-group">
                <label for="rpwd">Hasło:</label>
                <input type="password" class="form-control" id="rpwd1" placeholder="Wpisz hasło" name="rpswd1" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>
              </div>
              <?php
                if (isset($_SESSION['e_haslo']))
                {
                    echo '<div class="error">'.$_SESSION['e_haslo'].'</div>';
                    unset($_SESSION['e_haslo']);
                }
              ?>
              <div class="form-group">
                <label for="rpwd">Powtórz hasło:</label>
                <input type="password" class="form-control" id="rpwd2" placeholder="Wpisz hasło" name="rpswd2" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>
              </div>
              <div class="form-group">
                <label for="rpwd">E-mail:</label>
                <input type="text" class="form-control" id="remail" placeholder="Wpisz swój email" name="remail" required>
                <div class="valid-feedback">Poprawnie.</div>
                <div class="invalid-feedback">Proszę wypełnij to pole.</div>
              </div>
              <?php
                if (isset($_SESSION['e_email']))
                {
                    echo '<div class="error">'.$_SESSION['e_email'].'</div>';
                    unset($_SESSION['e_email']);
                }
              ?>
              <div class="custom-control custom-checkbox mb-3">
                  <input class="custom-control-input" type="checkbox" id="regulaminr" name="regulamin" required>
                <label class="custom-control-label" for="regulaminr">
                  Akceptuję <span>regulamin</span>.
                  <div class="valid-feedback">Poprawnie.</div>
                  <div class="invalid-feedback">Proszę zaznacz to pole.</div>
                </label>
              </div>
              <?php
                if (isset($_SESSION['e_regulamin']))
                {
                    echo '<div class="error">'.$_SESSION['e_regulamin'].'</div>';
                    unset($_SESSION['e_regulamin']);
                }
              ?>
            <button type="submit" class="btn btn-primary button">Zarejestruj</button>
            <?php
              if (isset($_SESSION['udanarejestracja']))
              {
                  echo '<div class="brawo">'.$_SESSION['udanarejestracja'].'</div>';
                  unset($_SESSION['udanarejestracja']);
              }
            ?>
             </form>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="jumbotron" id="stopka">
      <div class="conteiner">
        <div class="row">
          <div class="col-md-11 col-sm-12">
            <p class="text-center ml-5 mr-auto" id="copy">Copyright &copy; Kamil Kot 2019</p>
          </div>
          <div class="col-md-1 col-sm-12" id="zegar">
            <form name="clock" onSubmit="0">
              <input type="text" name="face" size="5" id="zegarek">
            </form>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <script type="text/javascript" src="../../js/logowanie_walid.js"></script>
  <script type="text/javascript" src="../../js/show.js"></script>
  <script type="text/javascript" src="../../js/zegarek.js"></script>
  <script type="text/javascript" src="../../js/stickymenu.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
