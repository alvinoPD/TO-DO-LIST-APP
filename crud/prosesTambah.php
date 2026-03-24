<?php
include "../database/config.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
    $kegiatan = $_POST['kegiatan'];
    $detail = $_POST['detail'];
    $tanggalPengumpulan = $_POST['tanggalPengumpulan'];
    $status = $_POST['status'];

    $query = "INSERT INTO kegiatan (kegiatan, detail,tanggalPengumpulan,status) VALUES ('$kegiatan','$detail','$tanggalPengumpulan', '$status')";
    $sql = mysqli_query($db,$query);

    if($sql){
        echo 'data masuk';
    }else{
        echo 'data gagal masuk';
        die;
    }
}
?>