<?php
$host = "ec2-54-235-108-217.compute-1.amazonaws.com";
$port = "5432";
$dbname = "d2jvsd4pie8alk";
$user = "ckvlodsvxsuksj";
$password = "5b71dc390f762ec961ef323207f14eb49ee5ce0fcbdf970edd8ea735d4fa7e8b"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
