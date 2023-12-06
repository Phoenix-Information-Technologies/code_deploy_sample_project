<?php 

// live server in infinity free

$sName = "sql313.infinityfree.com";
$uName = "if0_35534489";
$pass = "gMAuLtMo5BBSz5c";
$db_name = "if0_35534489_myfirsthosting";

// local server
// $sName = "localhost";
// $uName = "root";
// $pass = "";
// $db_name = "core_php_server_deploy";

try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}