<?php 
// /**
// Configuration for database connection
//  */

 $host = "localhost";
 $username = "root";
 $password = "3210";
 $dbname = "test1";
 $dsn = "mysql:host=$host; dbname=$dbname";
 $option = array(
     PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
 );