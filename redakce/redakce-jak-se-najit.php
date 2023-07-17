<!DOCTYPE HTML>
<html lang="cs">

<head>
  <meta charset="utf-8">
  <title>Administrativní zóna Kateřiiny Novotné</title>
  <meta name="keywords" content="Terapie, lecba, reiki">
  <meta name="description" content="Administrativní zóna Kateřiny Novotné">
  <link rel="stylesheet" type="text/css" href="../styl.css">
  <link rel="stylesheet" type="text/css" href="redakce.css">
  <link rel="shortcut icon" href="flavico.ico">
  <meta name="robots" content="noindex,nofollow">
</head>

<body>
  <?php include("vrsek_vstup.php"); ?>
  <script src="../ckeditor/ckeditor.js"></script>
  <?php
  /*nazev souboru pro formular v kazdem souboru jiny  */
  /*id pro zapis, ktery radek se ma prepisovat*/
  $id = 20;
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
            $hlaska_duplicita = '<div class="komentar_vlozeni">Text str�nky byl ulo�en.</div>';
            $exist = TRUE;
          } else {
            /*echo '<div class="komentar_vlozeni">Zaznam byl vytvoren, bude vlolen do stranky.</div>';*/
          }
        }
        /* Vlozeni zazanamu to DB  */
        if ($exist == FALSE) {
          $dotaz = "UPDATE obsahy SET obsahy='$obsah' WHERE id='$id'";
          if (mysqli_query($spojeni, $dotaz)) {
            $hlaska = '<div class="komentar_vlozeni">Text stranky byl upraven.</div>';
          } else {
            $hlaska = '<div class="komentar_vlozeni">Text se nepodarilo vlozit.</div>';
          }
        }
        odpoj($spojeni);
      }
    }
    /*kontrola zda je klient prihlasen a pak zobrazeni stranky*/
    if (empty($volej)) {
      $volej = "nic";
    }
    if ($volej != "ano") {
      echo "musíte se přihlásit"; //musite se prihlasit
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
            $hlaska_popis = '<div class="komentar_vlozeni">Popis stranky byl ulozen.</div>';
            $exist1 = TRUE;
          } else {
            /*echo '<div class="komentar_vlozeni">Zaznam byl vytvoren, bude vlozen do stranky.</div>';*/
          }
        }
        /* Vlozeni zaznamu to DB  */
        if ($exist1 == FALSE) {
          $dotaz1 = "UPDATE obsahy SET popis='$popis'  WHERE id='$id'";
          if (mysqli_query($spojeni, $dotaz1)) {
            $hlaska1 = '<div class="komentar_vlozeni">Popis str�nky byl upraven.</div>';
          } else {
            $hlaska1 = '<div class="komentar_vlozeni">Popis str�nky se nepoda�ilo vlo�it.</div>';
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
            $hlaska_popis = '<div class="komentar_vlozeni">Název byl uložen.</div>';

            $exist2 = TRUE;
          } else {
            /*echo '<div class="komentar_vlozeni">Zaznam byl vytvoren, bude vlozen do stranky.</div>';*/
          }
        }
        /* Vloženi zaznamu to DB  */
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
    ?>
    <?php
    if ($volej != "ano") {; //musíte se přihlásit
    } else {
      require "title_a_popis.php";
    }
    ?>
    <!-- KONEC MISTA PRO VKLADNI -->
    <!-- konec section -->
  </div>
  <?php include "../paticka.php"; ?>
  </div>
  <?php
  if (!empty($hlaska1)) {
    echo $hlaska1;
  }
  if (!empty($hlaska_popis)) {
    echo $hlaska_popis;
  }
  ?>
</div>
</body>

</html>