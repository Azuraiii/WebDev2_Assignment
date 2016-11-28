<!DOCTYPE_HTML>
<html>

<head>

    <title>Log in</title>
</head>

<body>

    <div>
        <ul>
            <li><a href="login.php"></a>Login</li>
            <li><a href="register.php"></a>Register</li>
        </ul>
    </div>

    <div>
        <h1>Please Login</h1>
        <form method = "post">
            <input type = "text" name="username" placeholder="Username"> <br>
            <input type = "password" name="password" placeholder="Password"> <br>
            <input type = "submit" name = "submit" value = "Login"?


        </form>
    </div>

</body>



<?php
/**
 * Created by PhpStorm.
 * User: azkei
 * Date: 07/11/2016
 * Time: 21:10
 */

require_once("config.php");
session_start();
echo mysqli_connect_error();

/*if(isset($_POST['submit'])){

    $username = mysql_real_escape_string($_POST['Username']);
    $password = mysql_real_escape_string($_POST['Password']);

    //sql and query for login
    $sql = "SELECT * FROM WebDevBlog WHERE Username LIKE '$username' AND Password LIKE '$password'";
    $result = mysqli_query($conn, $sql);

    //if user successfully logs in go to profile page
    if ($result->num_rows == 1) {
        //change to index
        $_SESSION['foundUsername'] = $username;
        header('Location: profile.php');

    } else {
        echo "Login error.</a>";
    }

}
mysqli_close($conn);*/

?>

</html>