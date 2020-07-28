<?php
 require_once('dbconnect.php');
 $city_id = $_POST['city_id'];

$query = "SELECT * FROM zipcode WHERE city_id=$city_id";
$zip_info = mysqli_query($connect_db, $query);
foreach($zip_info as $zip){
  echo"<option value=".$zip['zip_code'].">".$zip['zip_code']."</optipn>";
}
