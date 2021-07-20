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
        alt="ikona" class="d-inline-block mx-3" /> Fabryka Książek</a>

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
            <a class="nav-link mx-2 active" href="kryminal.php">Kryminał</a>
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
                  <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#hashtag">
                      <img src="../img/hashtag.jpg" alt="Hashtag">
                  </a>
              </figure>
              <figcaption>"Hashtag" <br /> Remigiusz Mróz</figcaption>
          </div>
          <div class="modal fade" id="hashtag" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Hashtag</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/hashtag.jpg" alt="Hashtag">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Remigiusz Mróz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Czwarta Strona</span></h2>
                        <h2 class="about">Cykl: <span class="about2">brak</span></h2>
                        <p class="info" onClick="show('a1')">Szczegóły</p>
                        <div class="A" id="a1">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>18 lipca 2018</td>
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
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5">
                          <p>Jedna przesyłka zmieniła jej życie." Twoja paczka już na ciebie czeka!" – brzmiała wiadomość, która wydawała się zwykłą pomyłką. Tesa nie spodziewała się żadnej przesyłki,
                             niczego nie zamawiała w sieci – a nawet gdyby to zrobiła, z pewnością nie wybrałaby dostawy do paczkomatu. Jeśli nie musiała, nie wychodziła z domu.
                             Postanowiła jednak sprawdzić tajemniczą przesyłkę – i okazało się to największym błędem, jaki kiedykolwiek popełniła. Wpadła bowiem w spiralę zdarzeń, która miała zupełnie odmienić jej życie…
                             Gdy Tesa na nowo odkrywa swoją przeszłość, przez media społecznościowe przetacza się nowy trend. Kolejni internauci zamieszczają wpisy z hashtagiem #apsyda. I nie byłoby w tym nic dziwnego,
                             gdyby nie fakt, że osoby te od lat uznawane były za zaginione…</p>
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
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#nieodnaleziona">
                  <img src="../img/nieodnaleziona.jpg" alt="Nieodnaleziona">
                </a>
              </figure>
              <figcaption>"Nieodnaleziona" <br /> Remigiusz Mróz</figcaption>
          </div>
          <div class="modal fade" id="nieodnaleziona" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Nieodnaleziona</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/nieodnaleziona.jpg" alt="nieodnaleziona">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Remigiusz Mróz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Filia</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Damian Werner </span></h2>
                        <p class="info" onClick="show('a2')">Szczegóły</p>
                        <div class="A" id="a2">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>31 stycznia 2018</td>
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
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5">
                          <p>Pierwszy polski thriller psychologiczny na miarę największych światowych bestsellerów! Gdybym oświadczył jej się chwilę wcześniej,
                             nigdy by do tego nie doszło. Nie napadnięto by nas, ja nie trafiłbym do szpitala, a ona nie zniknęłaby na zawsze z mojego życia. Dziesięć lat po zaginięciu narzeczonej, Damian Werner jest pewien,
                             że nigdy więcej jej nie zobaczy. Pewnego dnia trafia jednak niespodziewanie na ślad ukochanej – ktoś zamieszcza jej zdjęcie na jednym z profili spotted, szukając dziewczyny. Werner jest gotów przyjąć,
                             że to przypadkowe podobieństwo, spotter wgrywa jednak drugie zdjęcie. Zdjęcie, które zrobił jej sam Werner na kilka dni przed zaginięciem – i którego nikomu od tamtej pory nie pokazał.</p>
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
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#wotum">
                  <img src="../img/nieufnosc.jpg" alt="Wotum Nieufności">
                </a>
              </figure>
              <figcaption>"Wotum Nieufności" <br /> Remigiusz Mróz</figcaption>
          </div>
          <div class="modal fade" id="wotum" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Wotum nieufności</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/nieufnosc.jpg" alt="Wotum Nieufności">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Remigiusz Mróz</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Filia</span></h2>
                        <h2 class="about">Cykl: <span class="about2">W kręgach władzy  </span></h2>
                        <p class="info" onClick="show('a3')">Szczegóły</p>
                        <div class="A" id="a3">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>11 stycznia 2017</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>624</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>

                        <blockquote class="blockquote mt-5">
                          <p>Marszałek sejmu, Daria Seyda, budzi się w pokoju hotelowym, nie pamiętając, jak się w nim znalazła ani co się z nią działo przez ostatnich dziesięć godzin. Jest przekonana, że stała się ofiarą manipulacji,
                             ale nie wie, kto ani dlaczego może za nią stać. Tymczasem Patryk Hauer, wschodząca gwiazda prawicy, podczas prac komisji śledczej odkrywa polityczny spisek sięgający najistotniejszych osób w kręgach władzy.
                             Seyda i Hauer znajdują się po przeciwnych stronach sceny politycznej. Dzieli ich wszystko, ale połączy jedna sprawa…</p>
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
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#dom">
                  <img src="../img/dom_czwarty.jpg" alt="Dom Czwarty">
                </a>
              </figure>
              <figcaption>"Dom czwarty" <br /> Katarzyna Puzyńska</figcaption>
          </div>
          <div class="modal fade" id="dom" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Dom czwarty</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/dom_czwarty.jpg" alt="Dom czwarty">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Katarzyna Puzyńska</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Prószyński i S-ka</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Lipowo</span></h2>
                        <p class="info" onClick="show('a4')">Szczegóły</p>
                        <div class="A" id="a4">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>8 listopada 2016</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>576</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Była policjantka Klementyna Kopp po czterdziestu latach wraca w rodzinne strony. Na prośbę matki ma przyjrzeć się sprawie pewnego morderstwa. W drodze na miejsce znika bez śladu.
                            Mieszkańcy Złocin zgodnie twierdzą, że nigdy nie dotarła do miasteczka, ale aspirant Daniel Podgórski wkrótce odkrywa, że musiało być inaczej. Dlaczego wszyscy kłamią? Co tak naprawdę przydarzyło
                            się Klementynie? Kto maluje tajemnicze graffiti z czarną szubienicą i podrzuca martwe ptaki? Jaki ma z tym wszystkim związek okrutna egzekucja dokonana nad jeziorem Bachotek w październiku 1939 roku?</p>
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
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#motylek">
                  <img src="../img/motylek.jpg" alt="Motylek">
                </a>
              </figure>
              <figcaption>"Motylek" <br /> Katarzyna Puzyńska</figcaption>
          </div>
          <div class="modal fade" id="motylek" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Motylek</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/motylek.jpg" alt="Motylek">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Katarzyna Puzyńska</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Prószyński i S-ka</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Lipowo</span></h2>
                        <p class="info" onClick="show('a5')">Szczegóły</p>
                        <div class="A" id="a5">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>6 lutego 2014</td>
                            </tr>
                            <tr>
                              <td>Typ okładki</td>
                              <td>miekka</td>
                            </tr>
                            <tr>
                              <td>Ilość stron</td>
                              <td>608</td>
                            </tr>
                            <tr>
                              <td>Język</td>
                              <td>Polski</td>
                            </tr>
                            <tr>
                              <td>Kategorie</td>
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Doskonale skonstruowany kryminał, gęsta atmosfera małej społeczności i zagadki z przeszłości, które nigdy nie miały ujrzeć światła dziennego. W mroźny zimowy poranek na skraju mazurskiej wsi
                             zostaje znalezione ciało zakonnicy. Początkowo wydaje się, że kobietę potrącił samochód. Szybko okazuje się jednak, że ktoś ją zabił i potem upozorował wypadek. Kilka dni później ginie kolejna osoba.
                             Ofiary nie wydają się być ze sobą w żaden sposób związane. Zaczyna się wyścig z czasem. Policja musi odnaleźć mordercę, zanim zginą następne kobiety. Śledztwo ujawnia tajemnice mrocznej
                             przeszłości zakonnicy, przy okazji odkrywając też mniejsze lub większe przewiny mieszkańców sielskiej – tylko na pozór – miejscowości.</p>
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
                <a href="#" class="link slide-fade left" data-toggle="modal" data-target="#rodzanice">
                  <img src="../img/rodzanice.jpg" alt="Rodzanice">
                </a>
              </figure>
              <figcaption>"Rodzanice" <br /> Katarzyna Puzyńska</figcaption>
          </div>
          <div class="modal fade" id="rodzanice" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-xl">
              <div class="modal-content">
                <div class="modal-header">
                  <h4 class="display-4 ml-2 ">Rodzanice</h3>
                    <button type="button" class="close" data-dismiss="modal"><span class="iks" aria-hidden="true">&times;</span><span class="sr-only">Zamknij</span></button>
                </div>
                <div class="modal-body">
                  <div class="conteiner">
                    <div class="row">
                      <div class="col-md-4 col-sm-12">
                        <img class="m-auto" src="../img/rodzanice.jpg" alt="Rodzanice">
                      </div>
                      <div class="col-md-8 col-sm-12">
                        <h1 class="about display-5">Autor: <span class="about2">Katarzyna Puzyńska</span></h1>
                        <h2 class="about">Wydawnictwo: <span class="about2">Prószyński i S-ka</span></h2>
                        <h2 class="about">Cykl: <span class="about2">Lipowo</span></h2>
                        <p class="info" onClick="show('a6')">Szczegóły</p>
                        <div class="A" id="a6">
                          <table class="table">
                            <tr>
                              <td>Data wydania</td>
                              <td>29 stycznia 2019</td>
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
                              <td>kryminał, thriller</td>
                            </tr>
                          </table>
                        </div>
                        <blockquote class="blockquote mt-5">
                          <p>Zbliża się krwawy superksiężyc. Mieszkańcy maleńkich Rodzanic boją się, że ta niezwykła pełnia uwolni z dawna uśpionego demona. Tymczasem na zamarzniętym,
                             smaganym zimowym wichrem jeziorze znaleziono ciało zamordowanej dziewczyny. Jest przykryta kocem. Gdyby nie to, że jakieś zwierzę poszarpało jej rękę, wyglądałaby, jakby spokojnie spała.
                             Dlaczego odpowiedzi warto szukać w szklanej kuli? Ile prawdy jest w anonimie zapowiadającym śmierć wszystkich mieszkańców Lipowa? I kto tak naprawdę czai się w ciemności?</p>
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
