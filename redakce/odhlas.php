<?php
session_start();
$_SESSION['prihlas'] = "";
header('Location:redakce-index.php');//odhlaseni
