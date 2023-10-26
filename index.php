<!DOCTYPE HTML>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#94d462">
    <meta name="author" content="Eva Svobodová">
    <meta content="svobodovaevca@gmail.com" name="AuthorMail">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Jak uchopit svou sílu a žít svůj život">
    <meta property="og:image" content="http://cesta-k-sobe.euweb.cz/img/katerina_novotna_terapie.PNG">
    <!-- Twitter Card data -->
    <meta content="summary" name="twitter:card">
    <!-- Open Graph data -->
    <meta content="Cesta zpět k sobě" property="og:site_name">
    <meta content="Cesta zpět k sobě" property="og:title">
    <title><?php
            $id = "14";
            include "redakce/funkce.php";
            /* Pripojeni k DB, pokud neni chyba*/
            $spojeni = pripoj();
            kodovani($spojeni);
            $dotaz6 = "SELECT * FROM obsahy 
                      WHERE id='$id'";
            if ($data1 = mysqli_query($spojeni, $dotaz6)) {
                echo ""; //dotaz odeslan
                //fetch array recte prvni zaznam v databazi
                while ($radek1 = mysqli_fetch_array($data1)) {
                    echo "$radek1[2]";
                }
                odpoj($spojeni);
            }
            ?>
    </title>
    <meta name="keywords" content="Terapie, energetické léčení, reiki, individuální terapie, léčitelka, léčení, vyhoření, životní síla, úzkosti, strachy, deprese, Pocity selhání, traumata, zdravotní problémy, vztahové problémy">
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
    <div class="article">
        <!-- text vložený z databaze -->
        <?php
        /* Přrpojeni k DB, pokud neni chyba*/
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

        <!-- konec textu vloženého z databáze -->
        <!-- konec obsahu stránky -->
    </div>
    </div>

    <?php include "paticka.php"; ?>
    </div>
</body>

</html>
