<?php
$db_name='profile';
$db_host='localhost';
$db_user='root';
$db_password='';


$con = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if (!$con) {
  echo "Database Error";
}

 ?>
