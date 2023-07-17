<?php

/* Funkce pro pripojeni k DB */
function pripoj()
{
  $spojeni = new mysqli("localhost", "uzikvatel", "heslo", "nazevDatabze");
  if ($spojeni) {
    echo ""; //pripojeno
  } else {
    echo ""; //nepripojeno
  }
  return $spojeni;
}

/* Funkce pro kodovani znaku */
function kodovani($spojeni)
{
  mysqli_query($spojeni, "SET NAMES utf8");
}

/* Funkce pro odpojeni od DB */
function odpoj($spojeni)
{
  if (mysqli_close($spojeni)) {
    echo "";  //odpojeno
  } else {
    echo "";  //Odpojeni se nezdarilo
  }
}
?>
