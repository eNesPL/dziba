<?php
include 'config/config.php';

$zapytajka_news = 'select * from '.$newsdb.'.news';

$licz = 1;
$result_news = mysqli_query($con, $zapytajka_news);
while ($row = mysqli_fetch_array($result_news)) {
    $autor[$licz] = $row['autor'];
    $tresc[$licz] = $row['tresc'];
    $ranga[$licz] = $row['ranga'];
    $data[$licz] = $row['data'];
    $id[$licz] = $row['id'];
    $licz++;
}
