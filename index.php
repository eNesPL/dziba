<HTML>
<link rel="stylesheet" type="text/css" href="panel.css">
<meta http-equiv="refresh" content="5">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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
    echo('</div></a>');
    echo('<a href=""><div id="bloczek">Mapa');
    echo('</div></a>');
    echo('<a href=""><div id="bloczek">Regulamin');
    echo('</div></a>');
    echo('<a href=""><div id="bloczek">Administracja');
    echo('</div></a>');
    echo('<a href=""><div id="bloczek">Kontakt');
    echo('</div></a>');
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
    echo('<div>');


}

?>
</HTML>
