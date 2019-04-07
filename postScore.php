<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

// $dsn = "pgsql:"
// . "host=ec2-54-197-232-203.compute-1.amazonaws.com;"
// . "dbname=d29chcvsqfn3rt;"
// . "user=mzczddtnpbehwl;"
// . "port=5432;"
// . "sslmode=require;"
// . "password=df9a4cf4f89c91788a80ba46ca2906d73a2f005fe212d060202db05396d5439b";
// $db = new PDO($dsn);

saveScores();

function saveScores()
{

$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];

$dbconn3 = pg_connect("host=ec2-54-197-232-203.compute-1.amazonaws.com dbname=d29chcvsqfn3rt user=mzczddtnpbehwl password=df9a4cf4f89c91788a80ba46ca2906d73a2f005fe212d060202db05396d5439b") or die("Can't connect to database" . pg_last_error());
    
$sql = pg_query($dbconn3, "INSERT INTO question_scores1 (q1,q2,q3,q4) 
VALUES('$q1', '$q2', '$q3', '$q4')");

}

?>