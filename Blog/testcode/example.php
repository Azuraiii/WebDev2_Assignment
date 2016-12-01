//THIS CODE IS FOR TEST PURPOSES

<!DOCTYPE html>
<html>
<head>
    Inserting
</head>

<style>
    .error {color: #FF0000;}
</style>
<body>
<form method="POST" action="insert.php">
    <input class="input_box" type="text" name="username" id="username" placeholder="Enter your username"">
    <span class="error">* <?php echo $usernameErr;?></span>
    <br><br>

    <input class="input_box" type="password" name="password" id="password" placeholder="Enter your password">
    <span class="error">* <?php echo $passwordErr;?></span>
    <br><br>

        <button type ="submit" name="register" value="Register">Register</button>

</form>
</body>
</html>