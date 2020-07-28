<?php
$server = "localhost";
$user = "root";
$password = "";
$database = "ccs";

$connect_db = mysqli_connect($server, $user, $password, $database);

if(!$connect_db){
  die("Connection failed : ".mysqli_connect_error());
}
