<?php
$hostname = "localhost";    //kosong
$username = "root";         //bawaan
$password = "";             //kosongin
$database = "baguli";       //nama database yang digunakan

$connect = new mysqli($hostname, $username, $password, $database);
if ($connect->connect_error) {
    die("error : " . $connect->connect_error);
}
