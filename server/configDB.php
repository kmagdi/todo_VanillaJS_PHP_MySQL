<?php
include 'environment.php';
$host = isset($_ENV['MYSQL_HOST']) ? $_ENV['MYSQL_HOST'] : 'localhost';
$db_name =isset($_ENV['MYSQL_DATABASE']) ? $_ENV['MYSQL_DATABASE'] : 'todo';
$db_username = isset($_ENV['MYSQL_USERNAME']) ? $_ENV['MYSQL_USERNAME'] : 'root'; 
$db_password = isset($_ENV['MYSQL_PASSWORD']) ? $_ENV['MYSQL_PASSWORD'] : ''; 
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC];

echo 'ellenőrzés adatbázisnév:'.$db_name;

try{
    $db = new PDO("mysql:host=$host;dbname=$db_name; charset=utf8",$db_username,$db_password,$options);
}catch(PDOException $e)	{
      echo "!!! az adatbazis kapcsolodas sikertelen !!!";
    exit;
}		

?>