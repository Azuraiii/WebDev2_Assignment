<?php
//THIS CODE IS FOR TEST PURPOSES


require_once('config.php');

/**
 * Created by PhpStorm.
 * User: azkei
 * Date: 01/12/2016
 * Time: 15:22
 */

$username = $password = "";
$usernameErr = $passwordErr = "";
$wofieldserror = "";

$submit = 0;

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {

        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/",$username)) {
            $usernameErr = "Only letters and white space allowed";
        }else{
            $username = test_input($_POST["username"]);
            $submit+= 1;
        }
    }

    if(empty($_POST["password"])){
        $passwordErr = "Password is required";
    }else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $password)) {
            $passwordErr = "Only letters and white space allowed";
        }else{
            $password = test_input($_POST["password"]);
            $submit += 1;
        }
    }

        if ($submit == 2) {
            $sql = "INSERT INTO users(Username,Password) VALUES('$username','$password')";

            if (!mysqli_query($conn, $sql)) {
                echo 'Not Inserted';
            } else {
                echo("<SCRIPT LANGUAGE='JavaScript'>
					window.alert('Account created successfully')
					window.location.href='../index.php';
					</SCRIPT>");
            }
            mysqli_close($conn);
        } else {
            $twofieldserror= "You need to fill out those 2 fields";
        }

        function test_input($data)
        {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
?>