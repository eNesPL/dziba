<?php
include 'config/config.php';


$zapytajka_bany = 'select * from '.$banydb.'.bans where name = "'.$_SESSION["username"].'"';

$result_bany = mysqli_query($con, $zapytajka_bany);
$bany = mysqli_fetch_array($result_bany);
