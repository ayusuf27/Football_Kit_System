<?php
// used to connect to the database
$host = "localhost";
$Database = "Football_Kit_System";
$username = "root";
$password = "";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$Database}", $username, $password);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: " . $exception->getMessage();
}
?>