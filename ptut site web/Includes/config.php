<?php session_start();
$dsn = 'sqlite:../data.db';
$user = 'null';
$password = 'null';
$dbh = new PDO($dsn,$user,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	/*$dsn = 'mysql:dbname=p1926774;host=127.0.0.1';
    $user = 'p1926774';
    $password = '11926774';*/