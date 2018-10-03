<?php
include 'config/config.php';


$zapytajka_authme = 'select * from '.$authmedb.'.authme where username = "'.$_SESSION["username"].'"';

$result_authme = mysqli_query($con, $zapytajka_authme);
$authme = mysqli_fetch_array($result_authme);
