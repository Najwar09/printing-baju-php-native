<?php
$host          ="localhost";
$user          ="root";
$pass          ="";
$db            ="lepu";

$connection       = mysqli_connect($host,$user,$pass,$db);
if(!$connection){
    die("gagal koneksi");
}