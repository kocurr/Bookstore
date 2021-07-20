<?php
  require_once "connect.php";

  $polaczenie = @new mysqli($host, $db_user, $db_password, $db_name);
  if($polaczenie -> connect_errno!=0)
  {
      echo"Error: ".$polaczenie -> connect_errno;
  }
  else {
    $sql1 = "SELECT * FROM ksiazki WHERE id=1";
    $rezultat = @$polaczenie-> query($sql1);

    $wiersz = $rezultat->fetch_assoc();

    $tytul1 = $wiersz['tytul'];
    $autor1 = $wiersz['autor'];
    $wydaw1 = $wiersz['wydawnictwo'];
    $cykl1 = $wiersz['cykl'];
    $typ_okladki1 = $wiersz['typ_okladki'];
    $data1 = $wiersz['data_wydania'];
    $strony1 = $wiersz['ilosc_stron'];
    $jezyk1 = $wiersz['jezyk'];

    $sql2 = "SELECT * FROM ksiazki WHERE id=2";
    $rezultat2 = @$polaczenie-> query($sql2);

    $wiersz = $rezultat2->fetch_assoc();

    $tytul2 = $wiersz['tytul'];
    $autor2 = $wiersz['autor'];
    $wydaw2 = $wiersz['wydawnictwo'];
    $cykl2 = $wiersz['cykl'];
    $typ_okladki2 = $wiersz['typ_okladki'];
    $data2 = $wiersz['data_wydania'];
    $strony2 = $wiersz['ilosc_stron'];
    $jezyk2 = $wiersz['jezyk'];

    $sql3 = "SELECT * FROM ksiazki WHERE id=3";
    $rezultat3 = @$polaczenie-> query($sql3);

    $wiersz = $rezultat3->fetch_assoc();

    $tytul3 = $wiersz['tytul'];
    $autor3 = $wiersz['autor'];
    $wydaw3 = $wiersz['wydawnictwo'];
    $cykl3 = $wiersz['cykl'];
    $typ_okladki3 = $wiersz['typ_okladki'];
    $data3 = $wiersz['data_wydania'];
    $strony3 = $wiersz['ilosc_stron'];
    $jezyk3 = $wiersz['jezyk'];


    $sql4 = "SELECT * FROM ksiazki WHERE id=4";
    $rezultat4 = @$polaczenie-> query($sql4);

    $wiersz = $rezultat4->fetch_assoc();

    $tytul4 = $wiersz['tytul'];
    $autor4 = $wiersz['autor'];
    $wydaw4 = $wiersz['wydawnictwo'];
    $cykl4 = $wiersz['cykl'];
    $typ_okladki4 = $wiersz['typ_okladki'];
    $data4 = $wiersz['data_wydania'];
    $strony4 = $wiersz['ilosc_stron'];
    $jezyk4 = $wiersz['jezyk'];


  }
?>
