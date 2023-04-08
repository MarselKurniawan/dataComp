<?php

$server = "localhost";
$user = "root";
$pw = "";
$database = "data_komputer";

$db = mysqli_connect($server, $user, $pw, $database);

if(!$db){
    die ("Tidak Bisa menyambung Keserver");
}
?>