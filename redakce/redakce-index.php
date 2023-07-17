<!DOCTYPE HTML>
<html lang="cs-cz">

<head>
  <meta charset="utf-8">
  <title>Administrativní zóna Kateřiny Novotná</title>
  <meta name="keywords" content="Terapie, léčení, reiki">
  <meta name="description" content="Administartivní zona k webu Kateřiny Novotné">
  <link rel="stylesheet" type="text/css" href="../styl.css">
  <link rel="stylesheet" type="text/css" href="redakce.css">
  <link rel="shortcut icon" href="flavico.ico">
  <meta name="robots" content="noindex,nofollow">
  <meta name="theme-color" content="#94d462">
  <meta name="author" content="Kateřina Novotná">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Jak uchopit svou sílu a žít svůj život">
  <meta property="og:image" content="http://cesta-k-sobe.euweb.cz/img/katerina_novotna_terapie.PNG">
</head>

<body>
  <?php include("vrsek_vstup.php"); ?>
  <script src="../ckeditor/ckeditor.js"></script>
  <?php
  /*nazev souboru pro formular v kadem souboru jiny v  stred_vstup.php */
  /*id pro zapis, ktere radek se ma prepisovat*/
  $id = 14;
  include("stred_vstup.php");
  include "funkce.php";
  include "hlavickar.php";
  include "horni_menur.php";
  include "sectionr.php" ?>
  <div class="sectionr">
    <!-- MISTO PRO VKLADANI -->
    <?php
    /* Kontrola formulare */
    $id_exist = FALSE;
    $chyba = FALSE;
    if (isset($_POST['editor1'])) {
      $obsah = $_POST['editor1'];
      /* Pripojeni k DB, pokud neni chyba */
      if ($chyba == FALSE) {
        $spojeni = pripoj();
        kodovani($spojeni);
        /* Kontrola, zda zaznam jiz v DB existuje */
        $exist = FALSE;
        $dotaz = "SELECT * FROM obsahy 
                      WHERE obsahy='$obsah' 
                      ";
        if ($data = mysqli_query($spojeni, $dotaz)) {
          $radek = mysqli_fetch_array($data);
          if ($radek != NULL) {
            $hlaska_duplicita = '<div class="komentar_vlozeni">Text stranky byl uložen.</div>';

            $exist = TRUE;
          } else {
            echo '<div class="komentar_vlozeni">Zaznam byl vytvořen, bude vložen do stránky.</div>';
          }
        }
        /* Vlozeni radky to DB  */
        if ($exist == FALSE) {
          $dotaz = "UPDATE obsahy SET obsahy='$obsah' WHERE id='$id'";
          if (mysqli_query($spojeni, $dotaz)) {
            $hlaska = '<div class="komentar_vlozeni">Text stránky byl upraven.</div>';
          } else {
            $hlaska = '<div class="komentar_vlozeni">Text se nepodařilo vložit.</div>';
          }
        }
        odpoj($spojeni);
      }
    }
    /*kontrola zda je klient prihlaen a pak zobrazeni stranky*/
    if (empty($volej)) {
      $volej = "nic";
    }
    if ($volej != "ano") {
      echo ''; //musite se prihlasit
    } else {
      require "editor_uvod.php";
    }
    if (!empty($hlaska)) {
      echo "$hlaska";
    }
    if (!empty($hlaska_duplicita)) {
      echo "$hlaska_duplicita";
    }
    $chyba1 = FALSE;

    if (isset($_POST['popis']) and isset($_POST['title'])) {
      $popis = $_POST['popis'];
      $title = $_POST['title'];
      /* Pripojeni k DB, pokud neni chyba */
      if ($chyba1 == FALSE) {
        $spojeni = pripoj();
        kodovani($spojeni);
        /* Kontrola, zda zaznam jiz v DB existuje */
        $exist1 = FALSE;
        $dotaz1 = "SELECT * FROM obsahy 
                      WHERE popis='$popis'  
                      ";
        if ($data1 = mysqli_query($spojeni, $dotaz1)) {
          $radek1 = mysqli_fetch_array($data1);
          if ($radek1 != NULL) {
            $hlaska_popis = '<div class="komentar_vlozeni">Popis stránky byl uložen.</div>';

            $exist1 = TRUE;
          } else {
            echo '<div class="komentar_vlozeni">Záznam byl vytvořen, bude vložen do stránky.</div>';
          }
        }
        /* Vvlozeni zaáznamu do  to DB  */
        if ($exist1 == FALSE) {
          $dotaz1 = "UPDATE obsahy SET popis='$popis'  WHERE id='$id'";
          if (mysqli_query($spojeni, $dotaz1)) {
            $hlaska1 = '<div class="komentar_vlozeni">Popis stránky byl upraven.</div>';
          } else {
            $hlaska1 = '<div class="komentar_vlozeni">Popis stránky se nepodařilo vložit.</div>';
          }
        }
        /* Kontrola, zda zaznam jiz v DB existuje */
        $exist2 = FALSE;
        $dotaz2 = "SELECT * FROM obsahy 
                      WHERE title='$title'  
                      ";
        if ($data2 = mysqli_query($spojeni, $dotaz2)) {
          $radek2 = mysqli_fetch_array($data2);
          if ($radek2 != NULL) {
            $hlaska_popis = '<div class="komentar_vlozeni">Nazev byl ulozen.</div>';

            $exist2 = TRUE;
          } else {
            '<div class="komentar_vlozeni">Zaznam byl vytvoren, bude vlozen do stranky.</div>';
          }
        }
        /* Vlozeni zaznamy to DB  */
        if ($exist2 == FALSE) {
          $dotaz2 = "UPDATE obsahy SET title='$title'  WHERE id='$id'";
          if (mysqli_query($spojeni, $dotaz2)) {
            $hlaska1 = '<div class="komentar_vlozeni">Název byl upraven.</div>';
          } else {
            $hlaska1 = '<div class="komentar_vlozeni">Název se nepodařilo vložit.</div>';
          }
        }
        odpoj($spojeni);
      }
    }
    if ($volej != "ano") {;
      echo "musíte se přihlásit"; //musute se prihlasit
    } else {
      require "title_a_popis.php";
    }
    ?>
    <!-- KONEC MISTA PRO VKLADANI -->
    <!-- konec section -->
  </div>
  <?php include "../paticka.php"; ?>
  </div>
  <!-- KONEC MISTA PRO VKLADANI -->
  <?php
  if (!empty($hlaska1)) {
    echo $hlaska1;
  }
  if (!empty($hlaska_popis)) {
    echo $hlaska_popis;
  }
  ?>

</body>

</html>