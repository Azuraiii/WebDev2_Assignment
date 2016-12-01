<?php
//**********************************************
//Step 1 - Connect to MySQL Database
//Step 2 - CREATE A Database
//Step 3 - CREATE A Table
//**********************************************

$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "webdevblog";

//1.CONNECT TO MYSQL DATABASE
//IF CONNECTION TO DATABASE FAILS, THROW ERROR
$conn = @mysqli_connect($servername,$usernameDB,$passwordDB,db) or die("Could not connect to MySQL" . mysqli_connect_error());

////2.CREATE DATABASE
//$sqlcreate = "CREATE DATABASE IF NOT EXISTS WebDevBlog";
////ERROR CHECKING FOR CREATING DB
//if($conn->query($sqlcreate) === false){
//    die ("Error creating database" . $conn->error);
//}else{
//    echo "Database Created";
//}
//CONNECT TO DATABASE
mysqli_select_db($conn,$dbname);

//
////3.CREATE TABLE
////USERS TABLE
//$sqltable1 = "CREATE TABLE IF NOT EXISTS `users` (
//  			`ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//  			`Username` varchar(30) NOT NULL,
//  			`Password` varchar(30) NOT NULL
//			)";
////ERROR CHECKING FOR CREATING TABLE
//if($conn->query($sqltable1) === false) {
//    die("Error creating table users" . $conn->error);
//}else{
//    echo "Table Created";
//}

////BLOGTABLE
//$sqltable2 = "CREATE TABLE IF NOT EXISTS `blogpost`(
//              `ID` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
//              `Post_Title` VARCHAR(30) NOT NULL,
//              `Image_Path` VARCHAR(30) NOT NULL,
//              `Author`  VARCHAR(30) NOT NULL,
//              `Post_Date` DATE NOT NULL,
//              `Post_Content` VARCHAR(300) NOT NULL,
//              `Views` int(15) NOT NULL,
//              `Likes`
//              )";
//
//if($conn->query($sqltable2) === false) {
//    die("Error creating table users" . $conn->error);
//}else{
//    echo "Table Created";
//}

?>