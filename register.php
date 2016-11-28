<?php
/**
 * Created by PhpStorm.
 * User: azkei
 * Date: 28/11/2016
 * Time: 20:32
 */
//**********************************************
//Step 1: CREATE REGISTER FORM FIELDS
//Step 2: TAKE FORM FIELDS FROM USER AND POST TO DATABASE TABLE
//Step 3: INFORM USER THAT THEIR ACCOUNT HAS BEEN CREATED
//Step 4: FORM VALIDATION
//**********************************************

require_once("config.php");
session_start();

//STEP 2:
$sqlinsert = "INSERT INTO users(username,password,name,email) VALUES ('$username','$password','$name','$email')";
$result = mysqli_query($conn,$sqlinsert)
?>

<!DOCTYPE_HTML>
<html>
    <title>Register Page</title>
</html>

<div>
    //Step1: TAKES INPUT FROM USER
    <form method = "post" action ="register.php">
        <input type="text" name="username" placeholder = "Username"> <br>
        <input type="password" name="password" placeholder = "Password"> <br>
        <input type="text" name="name" placeholder = "Name"> <br>
        <input type="text" name="email" placeholder = "E-Mail"> <br>
    </form>
</div>