<?php
$host = "ec2-54-228-243-238.eu-west-1.compute.amazonaws.com";
$user = "diadldlkicwrrr";
$password = "629b14b92503e6c97b3b8474057f9279c63381222333b848ca2cc51cb56ead52";
$dbname = "d2ph88enfggjhe";
$port = "5432";
try{
  //Set DSN data source name
    $dsn = "pgsql:host=" . $host . ";port=" . $port .";dbname=" . $dbname . ";user=" . $user . ";password=" . $password . ";";
  //create a pdo instance
  $pdo = new PDO($dsn, $user, $password);
  $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
  $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,false);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
  ?>