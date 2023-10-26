<!DOCTYPE HTML>
<html lang="cs">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="theme-color" content="#94d462">
  <meta name="author" content="Kateřina Novotná">
  <meta property="og:type" content="article">
  <meta property="og:title" content="Jak uchopit svou sílu a žít svůj život">
  <meta property="og:image" content="http://cesta-k-sobe.euweb.cz/img/katerina_novotna_terapie.PNG">
  <!-- Twitter Card data -->
  <meta content="summary" name="twitter:card">
  <!-- Open Graph data -->
  <meta content="Cesta zpět k sobě" property="og:site_name">
  <meta content="Cesta zpět k sobě" property="og:title">
  <title><?php
          $id = "19";
          include "redakce/funkce.php";
          /* Pripojeni k DB, pokud neni chyba*/
          $spojeni = pripoj();
          kodovani($spojeni);
          $dotaz6 = "SELECT * FROM obsahy 
                      WHERE id='$id'";
          if ($data1 = mysqli_query($spojeni, $dotaz6)) {
            echo ""; //dotaz odeslan
            //fetch array precte prvni zaznam v databazi
            while ($radek1 = mysqli_fetch_array($data1)) {
              echo "$radek1[2]";
            }
            odpoj($spojeni);
          }
          ?></title>
  <meta name="keywords" content="Terapie, léčení, terapeut, vyhoření, ">
  <meta name="description" content="<?php
                                    /* Pripojeni k DB, pokud neni chyba*/
                                    $spojeni = pripoj();
                                    kodovani($spojeni);
                                    $dotaz6 = "SELECT * FROM obsahy 
                      WHERE id='$id'";
                                    if ($data1 = mysqli_query($spojeni, $dotaz6)) {
                                      echo ""; //dotaz odeslan
                                      //fetch array precte prvni zaznam v databazi
                                      while ($radek1 = mysqli_fetch_array($data1)) {
                                        echo "$radek1[3]";
                                      }
                                      odpoj($spojeni);
                                    }
                                    ?>">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
  <?php include "hlavicka.php"; ?>
  <?php include "horni_menu.php"; ?>
  <?php include "section.php" ?>
    <!-- text vložený z databáze -->
  <div class="article">
    <?php
    /* Pripojeni k DB, pokud neni chyba*/
    $spojeni = pripoj();
    kodovani($spojeni);
    $dotaz4 = "SELECT * FROM obsahy 
                      WHERE id='$id'";
    if ($data = mysqli_query($spojeni, $dotaz4)) {
      echo ""; //dotaz odeslan
      //fetch array precte prvni zaznam v databazi
      while ($radek = mysqli_fetch_array($data)) {
        echo "$radek[1]";
      }
      odpoj($spojeni);
    }
    ?>

    <?php

    /*
 *  _____ _______         _                      _
 * |_   _|__   __|       | |                    | |
 *   | |    | |_ __   ___| |___      _____  _ __| | __  ___ ____
 *   | |    | | '_ \ / _ \ __\ \ /\ / / _ \| '__| |/ / / __|_  /
 *  _| |_   | | | | |  __/ |_ \ V  V / (_) | |  |   < | (__ / /
 * |_____|  |_|_| |_|\___|\__| \_/\_/ \___/|_|  |_|\_(_)___/___|
 *                   ___
 *                  |  _|___ ___ ___
 *                  |  _|  _| -_| -_|  LICENCE
 *                  |_| |_| |___|___|
 *
 *    REKVALIFIKAČNÍ KURZY  <>  PROGRAMOVÁNÍ  <>  IT KARIÉRA
 *
 * Tento zdrojový kód pochází z IT kurzů na WWW.ITNETWORK.CZ
 *
 * Můžete ho upravovat a používat jak chcete, musíte však zmínit
 * odkaz na http://www.itnetwork.cz
 */


    $vypis = '';
    mb_internal_encoding("UTF-8");
    if ($_POST) { //co se odesílá//
      if (
        isset($_POST['name']) && $_POST['name'] &&
        isset($_POST['email']) && $_POST['email'] &&
        isset($_POST['message']) && $_POST['message'] &&
        isset($_POST['spam']) && $_POST['spam'] == 2
      ) {
        $header = 'From:' . $_POST['email'];
        $header = "\nMIME-Version: 1.0\n";
        $header = "Content-Type: text/html; charset=\"utf-8\"\n";
        $to = 'svobodovaevca@gmail.com';
        $subject = 'Nová zpráva formluář Napište mi Kateřina Novotná';
        $textOfMessage = 'Zpráva od ' . $_POST["name"] . $_POST["email"] . '<br>' . $_POST["message"];
        $uspech = mb_send_mail($to, $subject, $textOfMessage, $header);
        if ($uspech) {
          $vypis = 'Vaše zpráva byla úspěšně odeslána.';
        } else
          $vypis = 'Váš email se nepodařilo odeslat.';
      } else
        $vypis = 'Formulář je chybně vyplněný';
    }


    if ($vypis)
      echo ('<H3>' . $vypis . '</H3>');


    ?>
    
    <!-- konec textu vloženého z databáze-->
     <!-- formulář - k odeslání -->
      <div>
        <form method="POST">
          <div>
            <label for="name">Jméno a příjmení *</label>
          </div>
          <div> <input name="name" type="text" id="name" maxlength="50"></div>

          <div><label for="email">Váš email*</label></div>
          <div><input name="email" type="email" id="email" placeholder="@" value="@" maxlength="50"></div>
          <div>
            <label for="spam">Nejsem robot 1+1 je... *</label>
          </div>
          <div><input name="spam" type="text" id="spam" maxlength="1"></div>
          <div>
            <label for="text1">Váš vzkaz *</label>
          </div>
          <div><textarea name="message" class="napis" id="text1"></textarea></div>
          <div>
            <button type="submit" class="odeslani-formulare">Odeslat</button>
          </div>
        </form>
      </div>
    <!-- Konec formuláře -->
    </section>
  
    <!-- konec obsahu section -->
    
  </div>
    <!-- konec divu article -->
  </div>
  <?php include "paticka.php"; ?>
    <!-- konec divu hlavní -->
  </div>

</body>

</html>
