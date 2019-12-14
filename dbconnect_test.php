<?php
$dbhost = "ustom-mysql.gamification.svc.cluster.local";
$dbport = 3306;
$dbuser = "xxuser";
$dbpwd = "welcome1";
$dbname = "sampledb";

$connection = new mysqli($dbhost, $dbuser, $dbpwd, $dbname);
if ($connection->connect_errno) {
    printf("Connect failed: %s\n", $mysqli->connect_error);
    exit();
} else {
    printf("Connected to the database");
}
$connection->close();
?>
