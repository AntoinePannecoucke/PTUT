<?php session_start();
$dsn = 'mysql:dbname=ptut;host=151.80.36.218';
$user = 'beacon';
$password = 'LR;%tbSY7x';
$dbh = new PDO($dsn,$user,$password,[PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

	/*$dsn = 'mysql:dbname=ptut;host=151.80.36.218';
    $user = 'beacon';
    $password = 'LR;%tbSY7x';*/