<?php
$id = $_POST['country_id'];
require_once('dbconnect.php');

$query = "SELECT * FROM cities WHERE country_id=$id ORDER BY name";
$result= mysqli_query($connect_db, $query);
foreach($result as $city_info){
  echo"<option value=".$city_info['id'].">".$city_info['name']."</optipn>";
}

?>
