<!DOCTYPE html>
<?php
require_once ('config.php');

/**
 * Created by PhpStorm.
 * User: azkei
 * Date: 01/12/2016
 * Time: 15:22
 */

    $username = $password = "";
    $usernameErr = $passwordErr = "";
    $twofieldserror = "";

    $submit = 0;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {

        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $username)) {
            $usernameErr = "Only letters and white space allowed";
        } else {
            $username = test_input($_POST["username"]);
            $submit += 1;
        }
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z ]*$/", $password)) {
            $passwordErr = "Only letters and white space allowed";
        } else {
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
                        window.location.href='index.php';
                        </SCRIPT>");
        }
        mysqli_close($conn);
    } else {
        $twofieldserror = "You need to fill out those 2 fields";
    }

    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dylan Butler</title>
        
        
        <!-- BOOTSTRAP LINKS -->
        
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://github.com/lipis/bootstrap-social/blob/gh-pages/bootstrap-social.css">
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style>
            .error {color: #FF0000;}
        </style>
        <!-- JavaScript -->
        <script src="js/Javascript.js"></script>
        
        <link rel="stylesheet" type="text/css" href="css/style1.css"/>
    </head>
    
    <body>
    	<!-- Overlay div -->
    	<div class="overlay" id ="overlay" style="display:none" onclick="hideOverlay()"></div>
    	
    	<!-- Registration Box/ Login Box -->
    	<div id='expt_lightbox' class='expt_lightbox' style="display:none">
    	<img id="whiteX_lightbox" src="img/whiteX.png" onclick="hideOverlay()">
    		<div class="formInput">
    			<h2>Sign up</h2>

    			<hr align="center" width="50%">
                <form method="POST" action="index.php">
                        <input class="input_box" type="text" name="username" id="username" placeholder="Enter your username"">
                        <span class="error">* <?php echo $usernameErr;?></span>
                        <br><br>
                        <input class="input_box" type="password" name="password" id="password" placeholder="Enter your password">
                        <span class="error">* <?php echo $passwordErr;?></span>
                        <br><br>
                    <span class="error">* <?php echo $twofieldserror;?></span>
                    <div class="submitWrapper">
                        <button class="form_button" type ="submit" name="register" value="Register">Register</button>
                        <hr align="center" width="50%">
                        <span class="form_link"><a href="">Already signed up? Login here!</a></span>
                    </div>
                </form>
            </div>

    		
        </div>
    	
        <nav class="navbar navbar-custom navbar-fixed-top" id="navbar">
          <div class="container-fluid">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
              </button>
                	<ul class="nav navbar-nav navbar-left">
                		<li><a class="navbar-brand" href="#"><img src="img/logo.png" height="80" width="80"></a></li>
                		<li>My Web Dev Blog</li>
                	</ul>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li><a href="#" onclick="showOverlay()">Sign up</a></li>
                <li><a href="#" onclick="showOverlay()">Login</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#"><img src="img/search.png" height="80" width = "80"></a></li>
              </ul>
            </div>
          </div>
        </nav>
        <!--END HEADER-->
        
        <!--Slides START-->
        <!--Home-->
        <div class="container-fluid bg-1 text-center" id="header">
            
            <h1>Web Development Blog</h1>
            <hr align="center" width="50%">
            
            <span><img src="img/prompt.png"/></span>
            
        </div>
        <!--END SLIDE 1-->
        
        <!--About me-->
        <div id=slide_2 class="container">
            <h2 class="section_name">BLOG POSTS GO HERE</h2>
            <div class="container">
            <p>Proin at diam mollis, bibendum quam sed, gravida orci. 
            Proin viverra a enim eu aliquam. Nullam fermentum mauris eu efficitur luctus. Quisque 
            tincidunt est ut magna rutrum euismod. Donec eget aliquam libero. Praesent nibh magna, sodales id pharetra
             ornare, feugiat id enim. Aenean varius quam vel magna condimentum, a gravida nulla tincidunt. 
             Nulla non est est. Fusce vel lacus varius, tincidunt ipsum eu, rutrum nisi. Proin faucibus tincidunt 
             dictum. Nunc in purus non ante convallis facilisis nec at ante. Proin laoreet sit amet lectus id bibendum.
             Nulla et elit in est egestas dignissim. Vestibulum vehicula rhoncus tortor et pretium.</p>
            </div>
            
        </div>
        
        <footer id=footer>
        </footer>
    </body>
    
</html>
