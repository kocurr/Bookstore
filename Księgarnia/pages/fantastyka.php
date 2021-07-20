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
    <nav class="navbar navbar-dark bg-dark py-4 navbar-expand-lg " >
      <a class="navbar-brand" href="../index.php" id="brand"><img src="../img/icon.png" width="40" height="40"
        alt="" class="d-inline-block mx-3" /> Fabryka Książek</a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse " id="mainmenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-2" href="../index.php">Start</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2 active" href="fantastyka.php">Fantastyka</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="kryminal.php">Kryminał</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="przygodowe.php">Przygodowe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="sportowe.php">Sportowe</a>
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
              <figure class="wiersz1">
                  <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#lodowy1">
                      <img src="../img/lodowycz1.jpg" alt="Pan Lodowego Ogrodu">
                  </a>
              </figure>
              <figcaption>"Pan Lodowego Ogrodu cz.1" <br /> Jarosław Grzędowicz </figcaption>
          </div>
          <div class="modal fade" id="lodowy1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Pan Lodowego Ogrodu cz.1</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/lodowycz1.jpg" alt="Pan Lodowego Ogrodu">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Jarosław Grzędowicz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Fabryka Słów</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Pan lodowego ogrodu  </span></h2>
                        <h2 class="about">Twoja ocena: <span class="about2"></span></h2>
                        <p class="info" onClick="show('a1')">Szczegóły</p>
                        <div class="A" id="a1">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>11 maja 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>560</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Pan z Wami! Jako i ogród jego! Wstąpiwszy, porzućcie nadzieję. Oślepną monitory, ogłuchną komunikatory, zamilknie broń. Tu włada magia.
                          Vuko Drakkainen samotnie rusza na ratunek ekspedycji naukowej badającej człekopodobną cywilizację planety Midgaard. Pod żadnym pozorem nie może ingerować w rozwój nieznanej kultury. Trafia na zły czas.
                           Planeta powitała go mgłą i śmiercią. Dalej jest tylko gorzej. Trwa wojna bogów. Giną śmiertelnicy. Odwieczne reguły zostały złamane.</p>
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
              <figure class="wiersz1">
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#lodowy2">
                  <img src="../img/lodowycz2.jpg" alt="Pan Lodowego Ogrodu">
                </a>
              </figure>
              <figcaption>"Pan Lodowego Ogrodu cz.2" <br /> Jarosław Grzędowicz</figcaption>
          </div>
          <div class="modal fade" id="lodowy2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Pan Lodowego Ogrodu cz.2</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/lodowycz2.jpg" alt="Pan Lodowego Ogrodu">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Jarosław Grzędowicz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Fabryka Słów</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Pan lodowego ogrodu  </span></h2>
                        <p class="info" onClick="show('a2')">Szczegóły</p>
                        <div class="A" id="a2">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>11 maja 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>656</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Pan z Wami! Jako i ogród jego! Wstąpiwszy, porzućcie nadzieję. Oślepną monitory, ogłuchną komunikatory, zamilknie broń. Tu włada magia.Mówią, że zimna mgła żyje.
                            Inni uważają, że to oddech bogów albo brama zaświatów. Była zawsze i zawsze będzie Midgaard. Planeta, gdzie nas, ludzi, postrzega się jako istoty o rybich oczach. Gdzie trwa wojna bogów,
                             a samozwańczy demiurgowie hodują okrucieństwo kwitnące w mroku zła. Gdzie więdną najnowsze ziemskie technologie, a człowiek stawić musi czoła swoim koszmarom. I zostaje zupełnie sam...</p>
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
          <div class="col-md-4 col-sm-6 ">
              <figure class="wiersz1">
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#lodowy3">
                  <img src="../img/lodowycz3.jpg" alt="Wotum Nieufności">
                </a>
              </figure>
              <figcaption>"Pan Lodowego Ogrodu cz.3" <br /> Jarosław Grzędowicz</figcaption>
          </div>
          <div class="modal fade" id="lodowy3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Pan Lodowego Ogrodu cz.3</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/lodowycz3.jpg" alt="Pan Lodowego Ogrodu">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Jarosław Grzędowicz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Fabryka Słów</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Pan lodowego ogrodu  </span></h2>
                        <p class="info" onClick="show('a3')">Szczegóły</p>
                        <div class="A" id="a3">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>11 maja 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>512</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Pan z Wami! Jako i ogród jego! Wstąpiwszy, porzućcie nadzieję. Oślepną monitory, ogłuchną komunikatory, zamilknie broń. Tu włada magia.Mówią, że zimna mgła żyje.
                            Wystarczyło ledwie czworo Ziemian, by z planety Midgaard uczynić prawdziwe piekło. Ich tropem, znaczonym niewyobrażalnymi okrucieństwami podąża Vuko Drakkainen. Kierowany nieujarzmioną determinacją,
                             krok za krokiem przedziera się przez koszmar niczym z chorej wyobraźni Hieronima Boscha. To jeszcze misja czy już przeznaczenie? Lecz, czy zdoła powstrzymać tych, których moc uczyniła równych Bogom?
                             Czy zdoła ich zabić?</p>
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
          <div class="col-md-4 col-sm-6 ">
              <figure class="wiersz1">
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#lodowy4">
                  <img src="../img/lodowycz4.jpg" alt="Pan Lodowego ogrodu">
                </a>
              </figure>
              <figcaption>"Pan Lodowego Ogrodu cz.4" <br /> Jarosław Grzędowicz</figcaption>
          </div>
          <div class="modal fade" id="lodowy4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Pan Lodowego Ogrodu cz.4</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/lodowycz4.jpg" alt="Pan Lodowego Ogrodu">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Jarosław Grzędowicz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Fabryka Słów</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Pan lodowego ogrodu  </span></h2>
                        <p class="info" onClick="show('a4')">Szczegóły</p>
                        <div class="A" id="a4">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>30 listopad 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>880</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Ten cykl to właściwie jeden wielki, literacki popis możliwości kreacji współczesnego pisarza popkulturowego. Faszerowany efektami blockbuster z przesłaniem sprowadzony do postaci książki.
                              Perspektywa opisu zmieniająca się w zależności od tempa akcji, wielotorowa fabuła, słowa kreślące dziwaczny, szalony wręcz obraz rodem z sennych widziadeł Hieronima Boscha. Supertechnologia w bezpardonowym pojedynku z magią. Akcja gna przez świat, który nie jest jedynie płaską dekoracją służącą za tło zmagań herosów. Odkrywamy skomplikowany mechanizm z barierami kulturowymi, obsesjami i pragnieniami, który zachowuje prawo do istnienia i funkcjonowania nawet bez galerii pierwszoplanowych postaci.</p>
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
          <div class="col-md-4 col-sm-6 ">
              <figure class="wiersz1">
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#gra">
                  <img src="../img/gra_tron.jpg" alt="Starcie Królów">
                </a>
              </figure>
              <figcaption>"Starcie Królów" <br /> George R.R. Martin</figcaption>
          </div>
          <div class="modal fade" id="gra" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Starcie Królów</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/gra_tron.jpg" alt="Starcie Królów">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">George R.R. Martin</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Zysk i S-ka</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Pieśń Lodu i Ognia </span></h2>
                        <p class="info" onClick="show('a5')">Szczegóły</p>
                        <div class="A" id="a5">
                          <table class="table">
                            <tr>
                              <td>Tytuł orginalny</td>
                              <td>Clash of Kings</td>
                            </tr>
                            <tr>
                              <td>Data wydania</td>
                              <td>27 marca 2012</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>1022</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Żelazny Tron jednoczył Zachodnie Królestwa aż do śmierci króla Roberta. Wdowa jednak zdradziła królewskie ideały, bracia wszczęli wojnę, a Sansa została narzeczoną mordercy ojca, który teraz okrzyknął sie królem. Zresztą w każdym z królestw, od Smoczej Wyspy po Koniec Burzy, dawni wasale Żelaznego Tronu ogłaszają się królami. Pewnego dnia z Cytadeli przylatuje biały kruk, przynosząc zapowiedź końca lata, jakie pamiętali żyjący ludzie. Najgroźniejszym wrogiem dla wszystkich bez wyjątku może okazać się nadciągająca zima...</p>
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
          <div class="col-md-4 col-sm-6 ">
              <figure class="wiersz1">
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#hobbit">
                  <img src="../img/hobbit.jpg" alt="Hobbit">
                </a>
              </figure>
              <figcaption>"Hobbit" <br /> J.R.R. Tolkien</figcaption>
          </div>
          <div class="modal fade" id="hobbit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Hobbit</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/hobbit.jpg" alt="Hobbit">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">J.R.R. Tolkien</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Zysk i S-ka</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a6')">Szczegóły</p>
                        <div class="A" id="a6">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>12 lutego 2018</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>304</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Bilbo Baggins to hobbit, który lubi wygodne, pozbawione niespodzianek życie, rzadko podróżując dalej niż do swojej piwnicy. Jego błogi spokój zostaje jednak zakłócony, gdy pewnego na jego progu pojawia się czarodziej Gandalf z gromadą krasnoludów, by porwać go na prawdziwą przygodę. Wszyscy wyruszają po wielkie skarby strzeżone przez Smauga Wspaniałego, wielkiego i bardzo niebezpiecznego smoka. Bilbo niechętnie dołącza do ich misji, nie zdając sobie sprawy, że w drodze do Samotnej Góry spotka zarówno magiczny pierścień, jak i przerażające stworzenie zwane Gollumem.</p>
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
          <div class="col-md-11  col-sm-12">
            <p class="text-center ml-5 mr-auto" id="copy">Copyright &copy; fabrykaslow.pl 2019</p>
          </div>
          <div class="col-md-1 col-sm-12" id="zegar">
            <form name="clock" onSubmit="0" >
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
