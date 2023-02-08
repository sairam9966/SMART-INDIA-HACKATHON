<?php 

$server = "localhost";
$dbUsername = "root";
$dbPassword = "";
$db = "sih";

$con = mysqli_connect($server,$dbUsername,$dbPassword,$db);

if(!$con){
    die("Error ! ".mysqli_connect_error());
}
