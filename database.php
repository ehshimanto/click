<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "click";

$connect = mysqli_connect($db_host,$db_user,$db_pass,$db_name) ;

if(!$connect){
  echo "database connection Failed";
}

?>