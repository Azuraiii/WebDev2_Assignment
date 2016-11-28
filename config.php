<?php
//**********************************************
//Step 1 - Connect to MySQL Database
//Step 2 - CREATE A Database
//Step 3 - CREATE A Table
//**********************************************

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "WebDevBlog";

//1.CONNECT TO MYSQL DATABASE
//IF CONNECTION TO DATABASE FAILS, THROW ERROR
$conn = @mysqli_connect($servername,$username.$password) or die("Could not connect to MySQL" . mysqli_connect_error());

//2.CREATE DATABASE
$sqlcreate = "CREATE DATABASE IF NOT EXISTS WebDevBlog";
//ERROR CHECKING FOR CREATING DB
if($conn->query($sqlcreate) === false){
    die ("Error creating database" . $conn->error);
}else{
    echo "Database Created";
}
//CONNECT TO DATABASE
mysqli_select_db($conn,$dbname);


//3.CREATE TABLE
//USERS TABLE
$sqltable = "CREATE TABLE IF NOT EXISTS `users` (
  			`ID` int(11) NOT NULL,
  			`Username` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  			`Password` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL,
  			`Name` text COLLATE utf8_unicode_ci,
  			`Email` varchar(30) COLLATE utf8_unicode_ci DEFAULT NULL
			) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
//ERROR CHECKING FOR CREATING TABLE
if($conn->query($sqltable) === false) {
    die("Error creating table users" . $conn->error);
}else{
    echo "Table Created";
}
//CLOSE CONNECTION
$conn->close();
?>