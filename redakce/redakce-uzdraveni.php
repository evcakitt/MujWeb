<!DOCTYPE HTML>
<html lang="cs">

<head>
  <meta charset="utf-8">
  <title>Administrativní zóna Kateřiny Novotné - Uzdravení</title>
  <meta name="keywords" content="Terapie, léčení">
  <meta name="description" content="Energetické léčení, administrativní zónai">
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
  $id = 16;
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
                      WHERE obsah='$obsah' 
                      ";
        if ($data = mysqli_query($spojeni, $dotaz)) {
          $radek = mysqli_fetch_array($data);
          if ($radek != NULL) {
            $hlaska_duplicita = '<div class="komentar_vlozeni">Text stranky byl ulozen.</div>';
            $exist = TRUE;
          } else {
            /*echo '<div class="komentar_vlozeni">Zaznam byl vytvozen, bude vlozen do stranky.</div>';*/
          }
        }
        /* Vlozeni klienta to DB  */
        if ($exist == FALSE) {
          $dotaz = "UPDATE obsahy SET obsah='$obsah' WHERE id='$id'";
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
    if ($volej != "ano") {
      echo "musíte se přihlásit"; //musite se prihlasit
    } else {
      require "title_a_popis.php";
    }
    ?>
    <!-- KONEC MISTA PRO VKLADANI -->
    <!-- konec section -->
  </div>

  </div>
  <?php include "../paticka.php"; ?>
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