<HTML>
<link rel="stylesheet" type="text/css" href="panel.css">
<meta http-equiv="refresh" content="5">

<?php
include 'config/config.php';
include 'init/session.php';
include 'init/pobieraczek_news.php';


if(!isset($_SESSION['zalogowany'])){

    echo('<form action="logowanie.php" method="POST">') ;
    echo('<div id="paczka">');
    echo('<input id="loginl" type="text" name="loginl" placeholder="Login"/>');
    echo('<input id="haslol" type="password" name="haslol" placeholder="Password"/>');
    echo('<button id="zaloguj" name="logowanie">Zaloguj</button>');
    echo('</form>');

    if(isset($_SESSION["error"])){
       echo('<div id="error">');
        echo($_SESSION["error"]);
        echo('</div>');
    }
    echo('</div>');




    echo('<div id="newsy">');

    //post

    for($counter = $licz-1; $counter!=0; $counter--){
        echo('<div id="post">');
        echo('<div id="napis2">');
        echo($ranga[$counter] . " " . $autor[$counter] . " " . $data[$counter]);
        echo('</div>');

        echo("<div id='tresc'>");
        echo($tresc[$counter]);
        echo('</div>');
        echo('</div>');
    }
    //koniec

    echo('</div>');

    echo('<div id="menu">');
    echo('<a href=""><div id="bloczek">Sklep');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Mapa');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Regulamin');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Administracja');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Kontakt');
    echo('</div>');
    echo('<div>');

   //echo('<iframe src="https://craftserve.pl/s/614998/map?widget"/>');



}else{
    include 'init/pobieraczek_pex.php';






    echo('<div id="newsy">');

    //post

    for($counter = $licz-1; $counter!=0; $counter--){
        echo('<div id="post">');
        echo('<div id="napis2">');
        echo($ranga[$counter] . " " . $autor[$counter] . " " . $data[$counter]);
        echo('</div>');

        echo("<div id='tresc'>");
        echo($tresc[$counter]);
        echo('</div>');
        echo('</div>');
    }
    //koniec

    echo('</div>');

    echo('<div id="menu2">');
    echo('<a href=""><div id="bloczek">Sklep</a>');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Mapa</a>');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Regulamin</a>');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Administracja</a>');
    echo('</div>');
    echo('<a href=""><div id="bloczek">Kontakt</a>');
    echo('</div>');
    if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik") {
        echo('<a href=""><div id="bloczek">Panel Admina</a>');
        echo('</div>');
        echo('<a href=""><div id="bloczek">Konsola</a>');
        echo('</div>');
    }
    echo('<div>');


}

?>
</HTML>
