<?php 

$sName = "202.29.229.253";
$uName = "it65309010106";
$pass = "it65309010106";
$db_name = "it65309010106";


try {
    $conn = new PDO("mysql:host=$sName;dbname=$db_name", 
                    $uName, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  echo "Connection failed : ". $e->getMessage();
}