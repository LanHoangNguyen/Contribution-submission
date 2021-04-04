<?php
$db = parse_url( getenv("DATABASE_URL") );
$host = $db["host"];
$port = $db["port"];
$dbname = ltrim($db["path"], "/");
$user = $db["user"];
$password = $db["pass"]"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
