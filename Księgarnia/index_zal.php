<?php
  session_start();
  if(!isset($_SESSION['zalogowany']))
  {
    header('Location:index.php');
    exit();
  }
  require_once "pages/php/zapytania.php";
?>
<!doctype html>
<html lang="pl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/efekt_ksiazek.css">
  <title>Fabryka Książek</title>
</head>

<body onscroll="myFunction()">
  <header class="navbar-fixed-top" id="nav1">
    <nav class="navbar navbar-dark bg-dark py-4 navbar-expand-lg ">
      <a class="navbar-brand" href="index.php" id="brand"><img src="img/icon.png" width="40" height="40" alt="ikona" class="d-inline-block mx-3" /> Fabryka Książek</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainmenu">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse mr-auto" id="mainmenu">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link mx-2 active" href="index.php">Start</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="pages/fantastyka.php">Fantastyka</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="pages/kryminal.php">Kryminał</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="pages/przygodowe.php">Przygodowe</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="pages/sportowe.php">Sportowe</a>
          </li>
        </ul>
        <div id="user">
          <?php
            echo "<p> Witaj ".$_SESSION['user'].'.<a href="pages/php/logout.php" id="logout"> Wyloguj się</a></p>';
           ?>
        </div>
      </div>

    </nav>

  </header>
  <main>
    <section class="books">
      <div class="container">
        <header>
          <h1 class="display-2">Nowości</h1>
          <blockquote class="blockquote">
            <h3 class="display-5">Oto kilka naciekawszych nowości w naszym wydawnictwie.<br />
              Zaparaszamy do zapoznania się z fabułą książek już niedługo w sprzedaży!! </h3>
          </blockquote>
        </header>

        <div class="row">

          <div class="col-md-5 offset-md-1">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#virion">
                <img src="img/virioncz3.jpg" alt="Virion" />
              </a>
              <figcaption>"<?php echo $tytul1; ?>" <br /> <?php echo $autor1 ;?></figcaption>
            </figure>
          </div>

          <div class="modal fade" id="virion" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Imperium Achai Virion | Adept</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="img/virioncz3.jpg" alt="Virion">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2"><?php echo $autor1; ?></span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2"><?php echo $wydaw1;?></span></h2>
                        <h2 class="about">Cykl: <span class="about2"><?php echo $cykl1; ?></span></h2>
                        <p class="info" onClick="show('a1')">Szczegóły</p>
                        <div class="A" id="a1">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td><?php echo $data1; ?></td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td><?php echo $typ_okladki1; ?></td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td><?php echo $strony1; ?></td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td><?php echo $jezyk1; ?></td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5 text-justify">
                          <p>"Jesteś taki sam jak ona. Kompletnie nieprzewidywalny". Virion po raz kolejny staje twarzą w twarz z przeznaczeniem. Przeznaczenie, w osobie Horecha, nie poderżnęło mu jednak gardła, a jedynie zażądało wódki.
                            Stary Szermierz Natchniony zobaczył w młodym uciekinierze coś, co wyrwało go z pijackiego marazmu. To samo zobaczył w przebudzonej Niki.
                            Droga młodego Viriona do zostania "Tym Virionem" właśnie się rozpoczęła. Taida, Luna, Anai, Kila - żadne z nich nie przeczuwa, że wszystkie ich plany, wszelkie zaszczyty i poniżenia jakie teraz są ich udziałem, zostaną
                            obrócone w proch.
                            Z taką samą łatwością, z jaką Szermierz Natchniony strząśnie z ostrza kroplę krwi.
                            Ich krwi.Zawsze spodziewaj się niespodziewanego. Tylko wtedy masz szansę przeżyć. Niewielką, ale jednak szansę.</p>
                          <footer class="blockquote-footer">źródło fabrykaslow.pl</footer>
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


          <div class="col-md-5 offset-md-1">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#zly_las">
                <img src="img/zly_las.jpg" alt="Zły las" />
              </a>
              <figcaption>"<?php echo $tytul2; ?>" <br /> <?php echo $autor2; ?></figcaption>
            </figure>
          </div>

          <div class="modal fade" id="zly_las" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-4 "><?php echo $tytul2; ?></h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="img/zly_las.jpg" alt="Zły Las">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2"><?php echo $autor2; ?></span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2"><?php echo $wydaw2; ?></span></h2>
                        <h2 class="about">Cykl: <span class="about2"><?php echo $cykl2; ?></span></h2>
                        <p class="info" onClick="show('a2')">Szczegóły</p>
                        <div class="A" id="a2">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td><?php echo $data2; ?></td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td><?php echo $typ_okladki2; ?></td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td><?php echo $strony2; ?></td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td><?php echo $jezyk2; ?></td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>fantastyka</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5 text-justify">
                          <p>Cztery historie, cztery fascynujące podróże w głąb czasu i wyobraźni. Coś czai się w ciemności. Czeka się na właściwy moment, aby gdy ten nadejdzie, uderzyć z właściwą
                            sobie mocą i mroczną desperacją. Na tę chwilę czekało od milleniów, lat, miesięcy...
                            Każdy może zostać ukarany. Robert Storm za uczciwość, Wnuk za winy dziada, Wojskowy Instytut Antropologii Historycznej za walkę o przetrwanie ludzkości...
                            W tych historiach dzieją się rzeczy niemożliwe, a nastrój narastającego zagrożenia otacza czytelnika niczym zamykająca się pułapka. Dodajcie do tego masę historycznych smaczków i ciekawostek
                            a otrzymacie opowiadania w najlepszym, niepowtarzalnym stylu Andrzeja Pilipiuka.</p>
                          <footer class="blockquote-footer">źródło fabrykaslow.pl</footer>
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


          <div class="col-md-5 offset-md-1 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#pacjentka">
                <img src="img/pacjentka.jpg" alt="Pacjentka" />
              </a>
              <figcaption>"<?php echo "$tytul3"; ?>" <br /> <?php echo $autor3; ?> </figcaption>
            </figure>
          </div>
          <div class="modal fade" id="pacjentka" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-4 "><?php echo $autor3; ?></h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="img/pacjentka.jpg" alt="Pacjentka">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2"><?php echo $autor3; ?></span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2"><?php echo $wydaw3; ?></span></h2>
                        <h2 class="about">Cykl: <span class="about2"><?php echo $cykl3; ?></span></h2>
                        <p class="info" onClick="show('a3')">Szczegóły</p>
                        <div class="A" id="a3">
                          <table class="table">
                            <tr>
                              <td>Tytuł orginalny</td>
                              <td>Silent Patient</td>
                            </tr>
                            <tr>
                              <td>Data wydania</td>
                              <td><?php echo $data3; ?></td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td><?php echo $typ_okladki3; ?></td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td><?php echo $strony3; ?></td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td><?php echo $jezyk3; ?></td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminal</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5 text-justify">
                          <p>Ceniona malarka i fotografka mody Alicia Berenson wiedzie życie, jakiego każdy mógłby jej pozazdrościć. Do czasu.
                            Pewnego wieczoru jej mąż Gabriel wraca do domu, zaś Alicia strzela mu w głowę pięć razy, zabijając go na miejscu. Od tego momentu kobieta przestaje mówić.
                            Nikt poza nią nie wie, co wydarzyło się tamtej nocy. Ostatecznie trafia do zamkniętego ośrodka psychiatrycznego Grove.
                            Po sześciu latach w tymże ośrodku rozpoczyna pracę psychoterapeuta Theo Faber, zafascynowany postacią Alicii i jej historią. Theo robi wszystko, co w jego mocy, aby dotrzeć
                            do pacjentki i sprawić, żeby się przed nim otworzyła, a także aby rozwikłać zagadkę śmierci Gabriela. Poznając pacjentkę, psychoterapeuta nieoczekiwanie odnajduje coraz
                            więcej podobieństw w ich losach, począwszy od traumatycznego dzieciństwa. Dokąd zaprowadzą go te rozmowy i co się stanie, jeśli Alicia wreszcie zacznie mówić? </p>
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
          <div class="col-md-5 offset-md-1 col-sm-6">
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#nieodgadniona">
                <img src="img/nieodgadniona.jpg" alt="Nieodgadniona" />
              </a>
              <figcaption><?php echo "$tytul4"; ?> <br /> <?php echo $autor4; ?> </figcaption>
            </figure>
          </div>
          <div class="modal fade" id="nieodgadniona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-4 ">Nieodgadniona</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="img/nieodgadniona.jpg" alt="Nieodgadniona">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Remigiusz Mróz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Filia</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Damian Werner</span></h2>
                        <p class="info" onClick="show('a4')">Szczegóły</p>
                        <div class="A" id="a4">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>30 stycznia 2019</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>400</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminał</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5 text-justify">
                          <p>Rok po ucieczce od męża Kasandra Reimann prowadzi spokojne, ustatkowane życie za granicą. Jest przekonana, że udało jej się zostawić wszystko za sobą – także konsekwencje tego, co zrobiła, by ratować siebie i dziecko.
                             Do czasu. Pewnego dnia jej syn nie wraca do domu po wizycie u kolegi, a jedyny ślad prowadzi do Opola. Zrozpaczona matka zrobi wszystko, by odnaleźć dziecko, nawet jeśli będzie oznaczało to ponowne spotkanie z człowiekiem, którego życie zniszczyła.
                             Damian Werner tymczasem wprowadza się do nowego mieszkania, wciąż starając się zapomnieć o wszystkim, co spotkało go rok temu. Przeglądając jednak rzeczy zostawione przez poprzedniego właściciela,
                             trafia na starą kasetę VHS, która rzuca nowe światło na jego przeszłość…
                           </p>
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
  <script type="text/javascript" src="js/show.js"></script>
  <script type="text/javascript" src="js/zegarek.js"></script>
  <script type="text/javascript" src="js/stickymenu.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
