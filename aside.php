<div class="aside">
  <div class="kurziva">„Zamiluj se</div>
  <div class="kurziva">do sebe, do života,</div>
  <div class="kurziva">a pak do koho chceš”</div>
  <div>Frida Kahlo</div>
    <H1>
    Denní karta síly
      </H1>
      <?php 
      $pondeli1 = "pondeli";
      $utery1 = "utery";
      $streda1 = "streda";
      $ctvrtek1 = "ctvrtek";
      $patek1 = "patek";
      $sobota1 = "sobota";
      $nedele1 = "nedele";
      $dayInWeek = date('N', Time()); 
      ?>
      <div class="kartaSily"><img src="img/<?php
       if ($dayInWeek == 1) {echo $pondeli1;}
    if ($dayInWeek == 2) {
  echo $utery1;
}
if ($dayInWeek == 3) {
  echo $streda1;
}
if ($dayInWeek == 4) {
  echo $ctvrtek1;
}
if ($dayInWeek == 5) {
  echo $patek1;
}
if ($dayInWeek == 6) {
  echo $sobota1;
}
if ($dayInWeek == 7) {
  echo $nedele1;
}?>.jpg" alt="karta síly pondělí" width="200" height="133">
<?php 
$pondeli = "Miluji se <br>a ctím samu sebe";
$utery = "Miluji seba a svou jedinečnost";
$streda = "Vážím si sebe a jednám se sebou s úctou";
$ctvrtek = "Cítím klid a mír, který je ve mě";
$patek = "S láskou měním sebe i svůj život";
$sobota = "Každý neúspěch měním na příležitost";
$nedele = "Mám se ráda taková jaké jsem";    
if ($dayInWeek == 1) {
    echo $pondeli;
}
if ($dayInWeek == 2) {
  echo $utery;
}
if ($dayInWeek == 3) {
  echo $streda;
}
if ($dayInWeek == 4) {
  echo $ctvrtek;
}
if ($dayInWeek == 5) {
  echo $patek;
}
if ($dayInWeek == 6) {
  echo $sobota;
}
if ($dayInWeek == 7) {
  echo $nedele;
}
?>
      </div> 
    <h2>Hlavní témata</h2>
  <ul class="akce">
    <li><a href="uzdraveni.php#intuice">Intuice</a></li>
    <li><a href="uzdraveni.php">Energetické léčení</a></li>
    <li><a href="uzdraveni.php#sebeucta">Sebeúcta</a></li>
    <li><a href="jak-se-najit.php#vernost">Věrnost sobě</a></li>
    <li><a href="osamelost.php#vyhoreni">Vyhoření</a></li>
  </ul>
  <?php
  /* Připojení k DB, pokud není chyba*/
  $spojeni = pripoj();
  kodovani($spojeni);
  $dotaz6 = "SELECT * FROM obsahy 
                      WHERE id='$id'";
  if ($data1 = mysqli_query($spojeni, $dotaz6)) {
    echo ""; //dotaz odeslán
    //fetch array přečte první zaznam v databazi
    while ($radek1 = mysqli_fetch_array($data1)) {
      echo "$radek1[4]";
    }
    odpoj($spojeni);
  }
  ?>
</div>
<!-- konec divu aside -->