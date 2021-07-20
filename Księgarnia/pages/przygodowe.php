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
            <a class="nav-link mx-2" href="fantastyka.php">Fantastyka</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2" href="kryminal.php">Kryminał</a>
          </li>

          <li class="nav-item">
            <a class="nav-link mx-2 active" href="przygodowe.php">Przygodowe</a>
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
            <figure>
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#pi">
                  <img src="../img/pi.jpg" alt="Życie Pi">
              </a>
            </figure>
            <figcaption>"Życie Pi" <br> Yann Martel</figcaption>
          </div>
          <div class="modal fade" id="pi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Życie Pi</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/pi.jpg" alt="Życie Pi">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Yann Martel</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Albatros</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a1')">Szczegóły</p>
                        <div class="A" id="a1">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>9 stycznia 2013</td>
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
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>przygodowe</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Ranna zebra, orangutan, hiena cętkowana, szczur i tygrys bengalski… Taka menażeria to nie najlepsze towarzystwo w dryfującej po oceanie szalupie. Niestety szesnastoletni Pi Patel po zatonięciu japońskiego frachtowca, na pokładzie którego wraz z rodziną i zwierzętami z
                            prowadzonego przez ojca zoo płynie z Indii do nowej ojczyzny, Kanady, nie ma żadnego wpływu na dobór towarzyszy niedoli. Grupa rozbitków, wśród których – poza orangutanem – Pi Patel jest jedynym dwunożnym stworzeniem, szybko się kurczy, aż pozostaje tylko on i tygrys.
                            Odyseja przez Pacyfik staje się walką o życie – z żywiołem, głodem i, przede wszystkim, z olbrzymim kotem, z którym w bezpośredniej konfrontacji chłopiec nie miałby żadnych szans. By utrzymać zwierzę z dala od siebie, musi na niewielkiej powierzchni szalupy oznaczyć swoje terytorium i stać się osobnikiem alfa.</p>
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
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#kiel">
                  <img src="../img/bialykiel.jpg" alt="Biały Kieł">
              </a>
            </figure>
            <figcaption>"Biały Kieł" <br> Jack London</figcaption>
          </div>
          <div class="modal fade" id="kiel" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Biały Kieł</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/bialykiel.jpg" alt="Biały Kieł">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Jack London</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Zielona Sowa</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Arcydzieła literatury dla dzieci i młodzieży</span></h2>
                        <p class="info" onClick="show('a2')">Szczegóły</p>
                        <div class="A" id="a2">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>2010</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>310</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>przygodowe</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Czy dzikie zwierzę może stać się wiernym przyjacielem człowieka? Tak, jeśli człowiek, w którego ręce się dostaje potrafi okazać zwierzęciu miłość i otoczyć je troskliwą opieką.
                             Biały Kieł to historia właśnie o tym, że każde zwierzę potrafi się odwdzięczyć za okazane mu dobro. Był sobie udomowiony wilk, który przywędrował wraz z ludźmi szukającymi
                             złota na północ Stanów Zjednoczonych. Najpierw pracował jako pies pociągowy, zawsze jednak nieco na uboczu, bo psy wyczuwały w nim dzikie pochodzenie. Tak nauczył się życia w samotności.
                              Kiedy trafił do nowego pana, musiał nauczyć się jeszcze czegoś: nienawiści i trudnej sztuki walki o przetrwanie...</p>
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
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#robinson">
                  <img src="../img/crusoe.jpg" alt="Robinson Crusoe">
              </a>
            </figure>
            <figcaption>"Przypadki Robinsona Crusoe" <br>Daniel Defoe </figcaption>
          </div>
          <div class="modal fade" id="robinson" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Przypadki Robinsona Crusoe</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/crusoe.jpg" alt="Robinson Crusoe">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Daniel Defoe</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Wydawnictwo MG</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a3')">Szczegóły</p>
                        <div class="A" id="a3">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>2017</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>310</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>przygodowe</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Książka opisuje dzieje Robinsona Crusoe, syna zamożnego kupca. Robinson nie chce wieść nudnego żywota jak jego ojciec, jako 17-latek ucieka z domu i zaciąga się na kolejne statki.
                            Podczas jednej z wypraw jego statek rozbija się, a Robinson jest jedynym ocalałym. Trafia na bezludną wyspę, gdzie ‒ jak się okaże ‒ spędzi następne dwadzieścia osiem lat.
                            Powoli zagospodarowuje się tam, buduje dom, uprawia zboże, oswaja kozy i papugę, wytwarza naczynia. W przetrwaniu pomagają mu znalezione przedmioty z innego rozbitego statku.
                            Po latach na jego wyspę trafiają ludożercy, a Robinsonowi udaje się ocalić z ich rąk jedną z ofiar. Ocalałego krajowca nazywa Piętaszkiem. Po pewnym czasie do wyspy przybija statek z piracką
                            banderą, którym kierują zbuntowani marynarze. Robinson pomaga kapitanowi odzyskać panowanie nad statkiem i może wrócić do rodzinnej Anglii.</p>
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
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#demony">
                  <img src="../img/demony.jpg" alt="Anioły i demony">
              </a>
            </figure>
            <figcaption>"Anioły i demony" <br>Dan Brown</figcaption>
          </div>
          <div class="modal fade" id="demony" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Anioły i demony</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/demony.jpg" alt="Anioły i demony">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Dan Brown</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Albatros</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Robert Langdon </span></h2>
                        <p class="info" onClick="show('a4')">Szczegóły</p>
                        <div class="A" id="a4">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>30 sierpnia 2011</td>
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
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>przygodowe</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Robert Langdon zostaje pilnie wezwany do położonego koło Genewy centrum badań jądrowych CERN. Jego zadanie – zidentyfikować zagadkowy wzór wypalony na
                            ciele zamordowanego fizyka. Langdon ze zdumieniem stwierdza, że jest to symbol tajemnego bractwa iluminatów – potężnej, aczkolwiek nieistniejącej od czterystu
                            lat organizacji walczącej z Kościołem, do której należały najświetniejsze umysły Europy, jak choćby Galileusz. Jak się okazuje, iluminaci przetrwali w ukryciu do
                            czasów współczesnych i planują straszliwą wendettę- wysadzenie Watykanu przy użyciu antymaterii wykradzionej z genewskiego laboratorium. Langdon i Vittoria Vetra, córka zamordowanego fizyka,
                            mają zaledwie dobę, by odnaleźć utajnioną od XVI wieku siedzibę iluminatów i zapobiec niewyobrażalnej tragedii. </p>
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
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#dzieci">
                  <img src="../img/dzieci_granta.jpg" alt="Dzieci kapitana Granta">
              </a>
            </figure>
            <figcaption>"Dzieci kapitana Granta" <br>Juliusz Verne</figcaption>
          </div>
          <div class="modal fade" id="dzieci" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Dzieci kapitana Granta</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/dzieci_granta.jpg" alt="Dzieci kapitana Granta">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Juliusz Verne</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Volumina.pl</span></h2>
                        <h2 class="about">Cykl: <span class="about2"> Duża trylogia vernowska  </span></h2>
                        <p class="info" onClick="show('a5')">Szczegóły</p>
                        <div class="A" id="a5">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>2015</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>468</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski - tłumaczenie</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>przygodowe</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>„Dzieci kapitana Granta” to pierwsza część dużej trylogii Verne'a. W brzuchu odłowionego rekina zostaje znaleziona butelka z listem. Tekst jest częściowo nieczytelny, ale udaje się określić jego autora. Jest nim Kapitan Grant,
                            którego statek zatonął w trakcie rejsu z Ameryki Południowej. O tym odkryciu dowiadują się syn i córka zaginionego, którzy postanawiają poprosić znalazcę listu o pomoc i
                            wyruszyć w fascynującą oraz pełną przygód podróż, aby odnaleźć swojego ojca.</p>
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
              <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#podroz">
                  <img src="../img/verne_ziemi.jpg" alt="Podróż do wnętrza Ziemia">
              </a>
            </figure>
            <figcaption>"Podróż do wnętrza Ziemi" <br>Juliusz Verne</figcaption>
          </div>
        </div>
        <div class="modal fade" id="podroz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
              <div class="modal-header">
                <h4 class="display-4 ml-2 ">Podróż do wnętrza Ziemi</h3>
                  <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
              </div>
              <div class="modal-body">
                <div class="conteiner">
                  <div class="row">
                    <div class="col-md-4 col-sm-12">
                      <img class="m-auto" src="../img/verne_ziemi.jpg" alt="Podróż do wnętrza Ziemia">
                    </div>
                    <div class="col-md-8 col-sm-12">
                      <h1 class="about display-5">Autor: <span class="about2">Juliusz Verne</span></h1>
                      <h2 class="about">Wydawnictwo: <span class="about2">Zielona Sowa</span></h2>
                      <h2 class="about">Cykl: <span class="about2">Podróże z Verne'em </span></h2>
                      <p class="info" onClick="show('a6')">Szczegóły</p>
                      <div class="A" id="a6">
                        <table class="table">
                          <tr>
                            <td>Data wydania</td>
                            <td>2009</td>
                          </tr>
                          <tr>
                            <td>Typ okładki</td>
                            <td>miekka</td>
                          </tr>
                          <tr>
                            <td>Ilość stron</td>
                            <td>300</td>
                          </tr>
                          <tr>
                            <td>Język</td>
                            <td>Polski - tłumaczenie</td>
                          </tr>
                          <tr>
                            <td>Kategorie</td>
                            <td>przygodowe</td>
                          </tr>
                        </table>
                      </div>
                      <blockquote class="blockquote mt-5">
                        <p>„Ze starej księgi wypadł na ziemię kawałek brudnego i zaplamionego pergaminu...” – to zupełnie niewinne zdarzenie zmieni życie starego profesora Lidenbrocka i jego bratanka.
                           Próba rozszyfrowania informacji zapisanej w starym islandzkim języku zaprowadzi naszych bohaterów w najciekawsze, a zarazem najbardziej mroczne miejsce – do wnętrza Ziemi.</p>
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
