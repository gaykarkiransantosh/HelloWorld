<?php


// define (DB_USER, "admin");
// define (DB_PASSWORD," ");
// define (DB_DATABASE, "bajirao_shop");
// define (DB_HOST, "localhost");


// $mysqli = new mysqli(DB_HOST, DB_PASSWORD, DB_DATABASE);
$dbhost = "localhost";
 $dbuser = "root";
 $dbpass = "";
 $db = "bajirao_shop";
 $mysqli = new mysqli($dbhost, $dbuser, $dbpass,$db) 

?>