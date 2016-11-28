<?php
//**********************************************
//Step 1 - Connect to MySQL Database
//Step 2 - CREATE A Database
//Step 3 - CREATE A Table
//**********************************************

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "WebDevBlog";

//1.CONNECT TO MYSQL DATABASE
//IF CONNECTION TO DATABASE FAILS, THROW ERROR
$conn = @mysqli_connect($servername,$usernameDB,$passwordDB) or die("Could not connect to MySQL" . mysqli_connect_error());

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
  			`ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  			`Username` varchar(30) NOT NULL,
  			`Password` varchar(30) NOT NULL,
  			`Name` text NOT NULL,
  			`Email` varchar(30) NOT NULL
			)";
//ERROR CHECKING FOR CREATING TABLE
if($conn->query($sqltable) === false) {
    die("Error creating table users" . $conn->error);
}else{
    echo "Table Created";
}
//CLOSE CONNECTION
$conn->close();
?>