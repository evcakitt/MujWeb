 <!-- zacatek hlavickyr.php redakce-->
 <div class="hlavni">
   <!-- hlavicka -->
   <div class="header">
     <a href="redakce_index.php">
     </a>
     <div class="nadpis_zona">Administrativní zóna</div>
     <div class="nadpis_zona1"><br><br><?php
                                        $pole = explode("_", $nahled);
                                        foreach ($pole as $cast) {
                                          echo "$cast<br>";
                                        }
                                        ?></div>
   </div>
   <!-- konec hlavickyr redakce-->