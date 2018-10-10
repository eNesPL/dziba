<html>

<link rel="stylesheet" type="text/css" href="panel.css">


<?php
include 'config/config.php';
include 'init/session.php';
include 'init/pobieraczek_news.php';
include 'init/pobieraczek_pex.php';
include 'init/pobieraczek_authme.php';
include 'init/pobieraczek_bany.php';
include 'init/pobieraczek_wiadomosci.php';


echo('<div id="menu2">');
echo('<a href="http://craftserve.pl/s/614998/shop"><div id="bloczek">Sklep');
echo('</div></a>');
echo('<a href="http://kwadratowedoliny.csrv.pl:8123/"><div id="bloczek">Mapa');
echo('</div></a>');
echo('<a href="/regulamin.php"><div id="bloczek">Regulamin');
echo('</div></a>');
echo('<a href=""><div id="bloczek">Administracja');
echo('</div></a>');
echo('<a href=""><div id="bloczek">Kontakt');
echo('</div></a>');
if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik" || $pex_in['parent'] == "Admin") {
    echo('<a href=""><div id="bloczek">Panel Admina');
    echo('</div></a>');
    echo('<a href=""><div id="bloczek">Konsola');
    echo('</div></a>');
}
echo('</div>');

if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik" || $pex_in['parent'] == "Admin"){

    echo('<form id="wpisz" action="wpisz.php" method="post">');
    echo('<textarea name="wpis" id="wpis" cols="50" rows="5"></textarea>');
    echo('<button id="wpiser">wyślij</button>');
    echo('</form>');
}

if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik" || $pex_in['parent'] == "Admin"){

    echo('<div id="chat">');
    for($counter = $licz_c-1; $counter>$licz_c-10 ; $counter--){

        echo('<div id="chat_autor">'.$chat_a[$counter].'</div>');
        echo('<div id="chat_tresc">'.$chat_t[$counter].'</div>');
        echo('<div id="chat_data">'.$chat_d[$counter].'</div>');
    }


    echo('</div>');


}



?></html>