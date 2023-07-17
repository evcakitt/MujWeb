<!DOCTYPE HTML>
<html lang="cs">

<head>
    <meta charset="utf-8">
    <title>formulář pro přihlášení - energetiské léčení Kateřina Novotná</title>
    <meta name="robots" content="noindex,nofollow">
    <link rel="shortcut icon" href="flavico.ico">
    <link rel="stylesheet" type="text/css" href="../styl.css">
</head>
<!-- formular pro prihlaseni do administrativni zony-->

<body class="hlavni">
    <form action="<?php echo $nazev_souboru;
                    echo ".php";
                    ?>" method="POST">
        <div class="prihlasit">
            <div class="stredFormular">

                <div class="prihlas_pismo">Vstup do
                    <div class="prihlas_pismo"> administrativní zony</div>
                    <div class="prihlas_pismo">Kateřiny Novotné</div>

                    <div class="prihlaseni table stredPrihlaseni">
                        <div class="tr">
                            <div class="td okrajPrihlaseni"><input name="login" type="text" size="20" class="prihlas" placeholder="JMÉNO">
                            </div>
                        </div>
                        <div class="tr">
                            <div class="td okrajPrihlaseni"><input name="heslo" type="password" size="20" class="prihlas" placeholder="HESLO"></div>
                        </div>
                        <div class="tr">
                            <div class="td okrajPrihlaseni"><input value="přihlásit" type="submit" class="prihlas"></div>
                        </div>
                    </div>

                    <img src="../img/jjc.gif" height="117" width="125" alt="jing a jang">
                </div>
            </div>
        </div>
    </form>
</body>

</html>