<?php
$db = parse_url( getenv("DATABASE_URL") );
$host = $db["host"]
$port = "5433";
$dbname = "postgres";
$user = "postgres";
$password = "postgres"; 
$connection_string = "host={$host} port={$port} dbname={$dbname} user={$user} password={$password} ";
$dbconn = pg_connect($connection_string);
?>
