<?php
  session_start();
  if(!isset($_SESSION['zalogowany']))
  {
    header('Location:../index.php');
    exit();
  }
?>
<!doctype html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style_gatunki.css">
  <link rel="stylesheet" href="../css/efekt_ksiazek.css">
  <title>Fabryka Książek</title>
</head>

<body onscroll="myFunction()">
  <header class="navbar-fixed-top" id="nav1">
    <nav class="navbar navbar-dark bg-dark py-4 navbar-expand-lg ">
      <a class="navbar-brand" href="../index.php" id="brand"><img src="../img/icon.png" width="40" height="40" alt="" class="d-inline-block mx-3" /> Fabryka Książek</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="mainmenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-2" href="../index.php">Start</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="fantastyka.php">Fantastyka</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="kryminal.php">Kryminał</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="przygodowe.php">Przygodowe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2 active" href="sportowe.php">Sportowe</a>
          </li>
        </ul>
        <div id="user">
          <?php
            echo "<p> Witaj ".$_SESSION['user'].'.<a href="php/logout.php" id="logout"> Wyloguj się</a></p>';
           ?>
        </div>
      </div>
    </nav>
  </header>
  <main>
    <section class="books">
      <div class="container">
        <header>

        </header>

        <div class="row">
          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#novak">
                <img src="../img/djokovic.jpg" alt="Novak Djoković">
              </a>
            </figure>
            <figcaption>"Novak Djoković. Zwycięzca" <br>Blaža Popović </figcaption>
          </div>
          <div class="modal fade" id="novak" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Novak Djoković | Zwycięzca</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/djokovic.jpg" alt="Novak Djoković">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Blaža Popović</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Wydawnictwo Planeta</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a1')">Szczegóły</p>
                        <div class="A" id="a1">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>13 września 2017</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>544</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Pierwsza w Polsce biografia Novaka Djokovicia, jednego z najwybitniejszych tenisistów w historii.
                            Niezwykle rozbudowana i dogłębna opowieść, która odkryje przed czytelnikami rozwój kariery oraz osobiste tajemnice tego wyjątkowego tenisisty.</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#ozil">
                <img src="../img/ozil.jpg" alt="Magia w grze">
              </a>
            </figure>
            <figcaption>"Magia w grze. Moja historia" <br>Mesut Özil, Kai Psotta </figcaption>
          </div>
          <div class="modal fade" id="ozil" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Magia w grze | Moja historia</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/ozil.jpg" alt="Magia w grze">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Mesut Özil, Kai Psotta</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Sine Qua Non</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a2')">Szczegóły</p>
                        <div class="A" id="a2">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>9 maja 2018</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>288</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Ta książka jest niczym podanie od Özila – precyzyjnie trafia w punkt. Każda opowieść ma znaczenie. Każda przybliża do poznania niezwykłej historii człowieka, który wychował się w domu bez szyb, a stał się jednym z
                            najlepszych piłkarzy świata. To szczera, barwna i pełna anegdot opowieść o kulisach najlepszych klubów świata i futbolu na najwyższym poziomie. To błyskotliwa i mądra biografia, która zachwyci wszystkich fanów piłki nożnej. W sam raz na mundial.</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#ronaldinho">
                <img src="../img/ronaldinho.jpg" alt="Ronaldinho. Uśmiech futbolu">
              </a>
            </figure>
            <figcaption>"Ronaldinho. Uśmiech futbolu" <br>Luca Caioli </figcaption>
          </div>
          <div class="modal fade" id="ronaldinho" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Ronaldinho | Uśmiech futbolu</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/ronaldinho.jpg" alt="Ronaldinho. Uśmiech futbolu">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Luca Caioli</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Sine Qua Non</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a3')">Szczegóły</p>
                        <div class="A" id="a3">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>17 sierpnia 2017</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>288</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Piękne gole, jak piłka wrzucona „za kołnierz” Seamanowi w meczu Brazylia – Anglia. Niezwykłe triki, jak zaczarowanie obrony
                             Chelsea i strzał z miejsca, który przeszedł do historii. Niezapomniane występy, jak El Clásico na Santiago Bernabéu w 2005 roku, po którym kibice Realu zgotowali mu owację na stojąco.</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#kowal">
                <img src="../img/kowal.jpg" alt="Kowal. Prawdziwa historia">
              </a>
            </figure>
            <figcaption>"Kowal. Prawdziwa historia" <br>Wojciech Kowalczyk, Krzysztof Stanowski </figcaption>
          </div>
          <div class="modal fade" id="kowal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Kowal | Prawdziwa historia</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/kowal.jpg" alt="Kowal. Prawdziwa historia">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Wojciech Kowalczyk, Krzysztof Stanowski </span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Buchmann</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a4')">Szczegóły</p>
                        <div class="A" id="a4">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>14 listopada 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>408</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Barwna autobiografia jednej z największych legend polskiego futbolu - Wojciecha Kowalczyka - piłkarza Legii i hiszpańskiego Betisu, zawodnika srebrnej jedenastki Janusza Wójcika.
                             Kowalczyk z niespotykaną szczerością przedstawia swoją historię, blaski i cienie polskiego futbolu. Piłka nożna w tej książce jest w sumie pretekstem do pytania: co jest w życiu najważniejsze?
                              - i z pośród kilku odpowiedzi, które daje Kowal futbol wcale nie jest na pierwszym miejscu. Książka mówi tyle o życiu piłkarza, co głośna 'Futbolowa gorączka' Nicka Hornby'ego o życiu kibica</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#ferguson">
                <img src="../img/ferguson.jpg" alt="Alex Ferguson">
              </a>
            </figure>
            <figcaption>"Autobiografia" <br>Alex Ferguson </figcaption>
          </div>
          <div class="modal fade" id="ferguson" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Alex Ferguson</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/ferguson.jpg" alt="Alex Ferguson">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Alex Ferguson</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Wydawnictwo Literackie</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a5')">Szczegóły</p>
                        <div class="A" id="a5">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>30 maja 2014</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>424</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Jest żywą legendą futbolu. Przez 27 lat stał na czele jednego z najlepszych zespołów piłki nożnej w historii. Zdobywał tytuły Mistrza Anglii i liczne trofea w rozgrywkach międzynarodowych,
                            ze zwycięstwami w Lidze Mistrzów na czele. To on odkrywał i kształtował talenty tak wielkich piłkarzy jak David Beckham, Cristiano Ronaldo czy Ryan Giggs. Swoim autorytetem potrafił
                             poskromić nawet tych najbardziej niepokornych: Erica Cantonę i Wayne’a Rooneya. Sir Alexa Fergusona z pewnością nie trzeba nikomu przedstawiać.</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
          </div>


          <div class="col-md-4 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#giba">
                <img src="../img/giba.jpg" alt="GIBA">
              </a>
            </figure>
            <figcaption>"Giba w punkt" <br>GIBA </figcaption>
          </div>
          <div class="modal fade" id="giba" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Giba | W punkt</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/giba.jpg" alt="GIBA">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Luiz Paulo Montes</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Sine Qua Non</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a6')">Szczegóły</p>
                        <div class="A" id="a6">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>6 lipca 2016</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>256</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>sport</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Był jednym z najlepszych przyjmujących w historii siatkówki. Ale niewiele brakowało, by świat w ogóle o nim nie usłyszał. Zanim trzy razy zdobył mistrzostwo świata i został mistrzem olimpijskim, pokonał wiele przeszkód. Kiedy zachorował na białaczkę,
                             lekarze przygotowywali się na najgorsze, a niespodziewane wyzdrowienie zgodnie nazwali cudem. Podobnie jak przeżycie upadku z drzewa, po którym na lewą rękę założyli mu 150 szwów…</p>
                          <footer class="blockquote-footer">źródło lubimyczytac.pl</footer>
                        </blockquote>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                </div>
              </div>
            </div>
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
            <p class="text-center ml-5 mr-auto" id="copy">Copyright &copy; fabrykaslow.pl 2019</p>
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
  <script type="text/javascript" src="../js/show.js"></script>
  <script type="text/javascript" src="../js/zegarek.js"></script>
  <script type="text/javascript" src="../js/stickymenu.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
