<?php
include 'config/config.php';
include 'init/session.php';
include 'init/pobieraczek_pex.php';

$tre=$_POST["wpis"];
$ran=$pex_in['parent'];
$na=$_SESSION['realname'];
$da="now()";
$zapka_wpis = 'INSERT INTO '.$newsdb.'.news (`id`, `autor`, `ranga`, `tresc`, `data`) VALUES (NULL,"'.$na.'","'.$ran.'","'.$tre.'",NOW())';
if($pex_in['parent'] == "HeadAdmin" || $pex_in['parent'] == "Technik") {
   $wyslij=mysqli_query($con, $zapka_wpis);
}
header('Location: index.php');
