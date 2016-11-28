<?php require 'config.php'; ?>

<?php
//if the form has been submitted then the field values
//are placed into the following variables
//used to check if all the required fields have been validated and filled in before submitting
$isOkay = 1;
$usernameErr = $passwordErr = $nameErr = $emailErr = "";
$username = $password = $name = $email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

    //checks the username field
    if(empty($_POST["username"])){
        $isOkay = 0;
        $usernameErr = "username is required";
    }
    else{
        $isOkay = 1;
        $username = test_input($_POST["username"]);
    }

    //checks the password field
    if(empty($_POST["password"])){
        $isOkay = 0;
        $passwordErr = "password is required";
    }
    else{
        $isOkay = 1;
        $password = test_input($_POST["password"]);
    }

    //checks the users name entered
    if(empty($_POST["name"])){
        $isOkay = 0;
        $nameErr = "name is required";
    }
    else{
        $isOkay = 1;
        $name = test_input($_POST["name"]);
    }

    //checks the email entered
    if(empty($_POST["email"])){
        $isOkay = 0;
        $emailErr = "email is required";
    }
    else{
        $isOkay = 1;
        $email = test_input($_POST["email"]);

        //checks if email is valid
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $isOkay = 0;
            $emailErr = "Invalid email format";
        }
        if($isOkay === 1){
            // a session is started for the user
            session_start();

            //write a query to insert the values into the user table
            $sql = $conn->query("INSERT INTO users(Username, Password, Name, Email)
				values('{$username}', '{$password}', '{$name}', '{$email}')") or die("data insert failed");

            header('LOCATION: login.php');
        }
    }
}

//checks the input and trims any unneccesary characters
function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<html>
<body>
<?php


?>
<h1>Registration Page</h1>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    Username: <input type="text" name="username" id="username">
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>
    Password: <input type="password" name="password" id="password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>
    Name: <input type="text" name="name" id="name">
    <span class="error">* <?php echo $nameErr;?></span>
    <br><br>
    Email: <input type="text" name="email" id="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="submit">
</form>
<?php
?>
</body>
</html>
