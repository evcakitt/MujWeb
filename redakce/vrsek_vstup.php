<!-- zacatek vrstek_vstup.php nastavení hesla-->
<?php
session_start();
//zadani hesla pro prihlseni

if (empty($_SESSION['prihlas'])) {
    $_SESSION['prihlas'] = "nic";
}

if (empty($_POST['login'])) {
    $_POST['login'] = "nic";
}
if (empty($_POST['heslo'])) {
    $_POST['heslo'] = "nic";
}

$heslo_ok = "********";
$uzivatel_ok = "Katerina";
if ($_POST['login'] == $uzivatel_ok and $_POST['heslo'] == $heslo_ok) {
    $_SESSION['prihlas'] = $uzivatel_ok;
} else {
    // Neúspěšné přihlášení
    //echo '<script>alert("Chybné uživatelské jméno nebo heslo.")</script>';
}
?>
<!-- konec vrstek_vstup.php nastavení hesla-->
