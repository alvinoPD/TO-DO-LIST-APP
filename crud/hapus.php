<?php
include '../database/config.php';

if(!isset($_GET['id'])){
    die('lewat tombol');
}

$id = $_GET['id'];

$query = mysqli_query($db,"DELETE FROM kegiatan WHERE id='$id'");
if($query){
    header('location: ../mainMenu.php');
}else{
    echo 'gagal';
}
?>