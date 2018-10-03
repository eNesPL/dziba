<?php
include 'config/config.php';
include 'init/session.php';
include 'init/pobieraczek_news.php';
include 'init/pobieraczek_pex.php';
include 'init/pobieraczek_authme.php';
include 'init/pobieraczek_bany.php';


echo('<div id="panel_zalogowany">');
echo('<div id="skin"><img src="https://minotar.net/body/'.$_SESSION['username'].'"');
echo("</div>");
echo("</div>");
echo('<div id="dane">');
echo('<div id="tekst">');
echo("Data rejestracji: ".date('Y-m-d H:i:s', $authme['regdate']/1000));
echo('</div>');
echo('<div id="tekst">');
echo("Ostatnio zalogowany: ".date('Y-m-d H:i:s',$authme['lastlogin']/1000));
echo('</div>');
echo('<div id="tekst">');
echo("Ranga: ".$pex_in['parent']);
echo('</div>');
if($pex_perm2['value']!= null) {
    echo('<div id="tekst">');
    echo("Wygasa: " . date('Y-m-d H:i:s', $pex_perm2['value']));
    echo('</div>');
}
if($bany['expires']!= null) {
    echo('<div id="tekst">');
    if($bany['expires']!=0) {
        echo("Ban Wygasa: " . date('Y-m-d H:i:s', $bany['expires'] / 1000));
    }
    else{
        echo("Ban Wygasa: Nigdy");
    }
    echo('</div>');
}
echo('</div>');
echo('<div id="przyciski">');

echo('<a href="http://craftserve.pl/s/614998/shop"><div id="sklep">Sklep</div></a>');
echo('</div>');

echo('<a href="wyloguj.php"><div id="wyloguj">Wyloguj</div></a>');
echo('</div>');

echo('</div>');

if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik"){

    echo('<form id="wpisz" action="wpisz.php" method="post">');
    echo('<textarea name="wpis" id="wpis" cols="50" rows="5"></textarea>');
    echo('<button id="wpiser">wyślij</button>');
}