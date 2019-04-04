<?php
$host = "ec2-54-197-232-203.compute-1.amazonaws.com";
$user = "mzczddtnpbehwl";
$password = "df9a4cf4f89c91788a80ba46ca2906d73a2f005fe212d060202db05396d5439b";
$dbname = "d29chcvsqfn3rt";
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