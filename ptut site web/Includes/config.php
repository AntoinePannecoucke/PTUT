<?php session_start();
include "passwd.php";
$dbh = new PDO($dsn,$user,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
