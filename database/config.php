<?php
$server = "localhost";
$name = "root";
$password = "";
$database = "todolist";

$db = mysqli_connect($server,$name,$password,$database);

if($db==TRUE){
    
}else{
    echo "database gagal connect";
    die;
}
?>