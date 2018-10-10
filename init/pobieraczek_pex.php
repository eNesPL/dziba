<?php
include 'config/config.php';



$zapytajka_pex = 'select * from '.$pexdb.'.permissions where value = "'.$_SESSION["username"].'"';

$result_pex = mysqli_query($con, $zapytajka_pex);
$pex_perm = mysqli_fetch_array($result_pex);

$zapytajka_in = 'select * from '.$pexdb.'.permissions_inheritance where child = "'.$pex_perm['name'].'"';
$result_in = mysqli_query($con, $zapytajka_in);

$pex_in = mysqli_fetch_array($result_in);


$zapytajka2_pex = 'select * from '.$pexdb.'.permissions where name = "'.$pex_perm['name'].'" and value != "'.$_SESSION["username"].'"';

$result2_pex = mysqli_query($con, $zapytajka2_pex);
$pex_perm2 = mysqli_fetch_array($result2_pex);
$perm_i=$pex_perm2['value'];

$permissie[0]=$pex_in['parent'];
if($pex_perm2['value']!= null){
    $permissie[1]=date("date('Y-m-d H:i:s', $perm_i)");
}
echo($permissie[1]);

echo(json_encode($permissie));