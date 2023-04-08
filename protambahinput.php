<?php
include "config.php";

if(isset($_POST['submit'])){
    $hari = $_POST['hari'];
    $tgl = $_POST['tgl'];
    $jam = $_POST['jam'];
    $nm = $_POST['nm'];
    $kelas = $_POST['kelas'];
    $lab = $_POST['lab'];
    $nmr = $_POST['nmr'];
    $kondisi = $_POST['kondisi'];
    $ket = $_POST['ket'];
}

$sql = "INSERT INTO tb_input (hari, tgl, jam, nm, kelas, lab, nmr, kondisi,ket) 
        VALUES  ('$hari','$tgl','$jam','$nm','$kelas','$lab','$nmr','$kondisi','$ket')";
$query = mysqli_query($db, $sql);
if($query){
    header('location: splash.php');
}
?>