<!-- zacatek stred_vstup.php kontrola zda je uživatel přihlášen-->
<?php
$soubor = $_SERVER['SCRIPT_NAME'];
$nazev_souboru = pathinfo($soubor, PATHINFO_FILENAME);
$nahled = substr($nazev_souboru, 8);

$uzivatel = $_POST['login'];
$heslo = $_POST['heslo'];
$session = $_SESSION['prihlas'];

/*  echo "<br>login je: " .$uzivatel;
     echo "<br>heslo je: " .$heslo;
     echo "<br>session je:" .$session; 
     echo "<br>";    */

if ($_SESSION['prihlas'] != $uzivatel_ok) {
  require "formular.php";
} else {
  $volej = "ano";
  echo '<div class="hore"> uživatel ' . $_SESSION['prihlas'] . ' je přihlášený; <a href="odhlas.php">odhlásit</a>&nbsp;</div>';
};
?>
<!-- konec stred_vstup.php-->