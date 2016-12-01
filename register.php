<!DOCTYPE html>


<html xmlns:width="http://www.w3.org/1999/xhtml" xmlns:width="http://www.w3.org/1999/xhtml"
      xmlns:width="http://www.w3.org/1999/xhtml">

    <head>
        <h1>Registration Form</h1>
    </head>

    <body>
        <div id = "wrapper">
            <form name = "vForm" action="index.php" method="POST" onsubmit="return Validate()" >
                <div>
                    <input type="text" name="username" placeholder="Username" class ="textInput" id = "username">
                    <div id="username_error" class="val_error"></div>
                </div>

                <div>
                    <input type="password" name="password" placeholder="Password" class ="textInput" id = "password">
                </div>

                <div>
                    <input type="password" name="password_confirmation"  placeholder="Password Confirmation" class ="textInput">
                    <div id="password_error" class="val_error"></div>
                </div>

                <div>
                    <input type="text" name="name" placeholder="Name" class ="textInput" id = "name">
                    <div id="name_error" class="val_error"></div>
                </div>

                <div>
                    <input type="text" name="email" placeholder="Email" class ="textInput" id = "email">
                    <div id="""email_error" class="val_error"></div>
                </div>

                <div>
                    <input type="submit" class="btn" name="register" value="Register">
                </div>
            </form>
        </div>
    </body>
</html>

<!-- add javascript here -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js">
    // GETTING ALL INPUT TEXT FIELDS
    var username = document.forms["vForm"]["username"];
    var email = document.forms["vForm"]["email"];
    var password = document.forms["vForm"]["password"];
    var password_confirmation = document.forms["vForm"]["password_confirmation"];
    var name = document.forms["vForm"]["name"];

    // GETTING ALL ERROR OBJECTS
    var username_error = document.getElementById("username_error");
    var name_error = document.getElementById("name_error");
    var email_error = document.getElementById("email_error");
    var password_error = document.getElementById("password_error");

    // SETTING ALL EVENT LISTENERS
    username.addEventListener("blur", usernameVerify, true);
    name.addEventListener("blur", nameVerify, true);
    email.addEventListener("blur", emailVerify, true);

    function Validate(){
        // VALIDATE USERNAME
        if(username.value == ""){
            name_error.textContent = "Username is required";
            username.style.border = "1px solid red";
            username.focus();
            return false;
        }
        //VALIDATE NAME
        if(name.value == ""){
            name_error.textContent = "Name is required";
            name.style.border = "1px solid red";
            name.focus();
            return false;
        }
        // VALIDATE EMAIL
        if(email.value == ""){
            email_error.textContent = "Email is required";
            email.style.border = "1px solid red";
            email.focus();
            return false;
        }
        // VALIDATE PASSWORD
        if (password.value != password_confirmation.value) {
            password_error.textContent = "The two passwords do not match";
            password.style.border = "1px solid red";
            password_confirmation.style.border = "1px solid red";
            password.focus();
            return false;
        }
        // PASSWORD REQUIRED
        if (password.value == "" || password_confirmation.value == "") {
            password_error.textContent = "Password required";
            password.style.border = "1px solid red";
            password_confirmation.style.border = "1px solid red";
            password.focus();
            return false;
        }
    }
    // ADD EVENT LISTENERS
    function nameVerify(){
        if (name.value != "") {
            name_error.innerHTML = "";
            username.style.border = "1px solid #110E0F";
            return true;
        }
    }
    function usernameVerify(){
        if (username.value != "") {
            username_error.innerHTML = "";
            username.style.border = "1px solid #110E0F";
            return true;
        }
    }
    function emailVerify(){
        if (email.value != "") {
            email_error.innerHTML = "";
            email.style.border = "1px solid #110E0F";
            return true;
        }
    }

    $("vForm").submit(function(event)){
        event.preventDefault();
        var $form = $(this),
            url = $form.attr('action');

        var posting = $.post(url,{
            username: $('#username').val(),
            password: $('#password').val(),
            name: $('#name').val(),
            email: $('#email').val()
        });

        posting.done(function(data){
            alert('Success');
        })
    }
</script>

<style>
    #wrapper{
    width: 35%;
    margin: 50px auto;
    padding: 20px;
    background: #EFFFE0;
    }

    form{
    width: 50%;
    margin: 100px auto;

    }
    form div{
    margin: 3px auto;
    }
    .textInput{
    margin-top: 2px;
    height: 28px;
    border: 1px solid #5E6E66;
    font-size: 16px;
    padding: 1px;
    width: 100%;

    }
    .btn{
    padding: 7px;
    width: 100%;
    }
    .val_error{
    color: #FF1F1F;
    }
</style>
