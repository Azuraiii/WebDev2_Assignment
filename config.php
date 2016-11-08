<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "sticky_notes";

$conn = @mysqli_connect($servername,$username.$password,$dbname) or die("Could not connect to MySQL" . mysqli_connect_error());

?>