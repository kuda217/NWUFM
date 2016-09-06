<?php

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_passwd'] = "";
$db['db_name'] = "nwufm";

foreach($db as $key => $value){
define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWD, DB_NAME);

if($connection){

  echo "CONNECTION SUCCESSFUL";
} else echo "CONNECTION FAILURE";






 ?>
