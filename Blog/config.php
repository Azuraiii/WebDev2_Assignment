<?php
/**
 * Created by PhpStorm.
 * User: azkei
 * Date: 01/12/2016
 * Time: 13:30
 */$servername = "localhost";
$usernameDB = "root";
$passwordDB = "";
$dbname = "webdevblog";

//1.CONNECT TO MYSQL DATABASE
//IF CONNECTION TO DATABASE FAILS, THROW ERROR
$conn = @mysqli_connect($servername,$usernameDB,$passwordDB,$dbname) or die("Could not connect to MySQL" . mysqli_connect_error());
?>