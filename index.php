<!DOCTYPE HTML>
<html lang="cs">

<head>
    <meta http-equiv=Content-Type content="text/html; charset=Utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#94d462">
    <meta name="author" content="Kateřina Novotná">
    <meta property="og:type" content="article">
    <meta property="og:title" content="Jak uchopit svou sílu a žít svůj život">
    <meta property="og:image" content="www.webik.cesta-zpet-k-sobe.9e.cz">
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
    <link rel="shortcut icon" href="flavico.ico">
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>

<body>
    <?php include "hlavicka.php"; ?>
    <?php include "horni_menu.php"; ?>
    <?php include "section.php" ?>
    <div class="article">
        <!-- MISTO PRO VKLADNI -->
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
        <!-- KONEC MISTA PRO VKLADANI -->
        <!-- konec section -->
    </div>
    </div>
    <?php include "paticka.php"; ?>
    </div>
</body>

</html>