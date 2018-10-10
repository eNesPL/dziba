<?php
include 'config/config.php';


$zapytajka_chat = 'select * from '.$chatdb.'.wiadomosci';

$result_chat = mysqli_query($con, $zapytajka_chat);
$licz_c = 0;
while ($row = mysqli_fetch_array($result_chat)) {
    $chat_a[$licz_c] = $row['autor'];
    $chat_t[$licz_c] = $row['tresc'];
    $chat_i[$licz_c] = $row['id'];
    $chat_d[$licz_c] = $row['data'];
    $licz_c++;
}