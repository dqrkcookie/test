<?php

try{
  $host = "localhost";
  $username = "root";
  $password = "";
  $dbname = "ticket_concern";
  $port = 3306;

  $dsn = "mysql:host=" . $host . ";port=" . $port . ";dbname=" . $dbname;

  $pdo = new PDO($dsn, $username, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

//   echo "Connected to database successfully!";

  if(!$pdo){
    die("Database close!");
  }
}catch(PDOException $e){
  erro_log("Error occured: " . $e->getMessage());
  die();
}

?>