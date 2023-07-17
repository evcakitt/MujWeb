<!-- zacatek editor_uvod.php -->
<?php
$pripona = ".php";

echo '<form method="POST" action="';
echo $nazev_souboru;
echo $pripona;
echo '" class="zarovnani_editoru">
		  <button type="submit" name="odeslat" class="button">&nbsp;uložit&nbsp;</button>
      <a href="../';
echo $nahled;
echo '.php" target="blank" class="tlacitko_nahled">&nbsp; náhled &nbsp; </a>

                 <textarea name="editor1">';



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



echo '</textarea>
      	<script>
				CKEDITOR.replace( "editor1" );
			</script>
		
		<p>
      
			 
      <button type="submit" name="odeslat" class="button">&nbsp;uložit&nbsp;</button>
		  <a href="../';
echo $nahled;
echo '.php" target="blank" class="tlacitko_nahled">&nbsp; náhled &nbsp; </a>

    </p>
	</form>';



?>

<script>
  <!--
  var neco;
  neco = document.getElementById("menu").offsetHeight;
  document.write(neco);
  //
  -->
</script>
<!-- konec editor_uvod.php -->