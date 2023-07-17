<!-- zacatek title_a_popisky.php vstupní pole pro vyplnění title a názvu stránky-->
<form action="<?php echo $nazev_souboru . ".php"; ?>" method="POST">
  <div class="table table_title">
    <div class="tr">
      <div class=" td vpravo">Název:</div>
      <div class="td">
        <input name="title" class="sirka_input" value="<?php
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
                                                        ?>">
      </div>
    </div>
    <div class="tr">
      <div class=" td vpravo">Popis stranky:</div>
      <div>
        <textarea name="popis" class="sirka_input2"><?php
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
                                                    ?></textarea>
        <button type="submit" name="uloz_popis" value="ulozit" class="odeslani_okraj">uložit</button>
      </div>
    </div>
  </div>
</form>
<!-- konec title_a_popisky.php vstupní pole pro vyplnění title a názvu stránky-->