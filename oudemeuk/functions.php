<?php

//Database connection
function ConnectDB(){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "rijschool-heerhugowaard";

  try{
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $conn;
  }
  catch(PDOExeption $e)
  {
    echo "Connection failed: " . $e->getMessage();
  }
}

//Zet de gegevens in de $sql insert query naar de database
function SQLExec($sql){
  $conn=ConnectDB();
  try{
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    return true;
  }
  catch(PDOExeption $e){
    echo "Quiry failed: " . $e->getMessage();
  }
  $conn = null;
}

//Het neemt de tabel die is aangegeven in $sql om naar een twee dimensionale array
function SQL2Array($sql){
  $conn=ConnectDB();
  try {
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    return $stmt;
  }
  catch(PDOException $e){
    echo "Query failed: " . $e->getMessage();
  }
  $conn = null;
}
 ?>
