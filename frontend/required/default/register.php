<div id="register">
    <center><h1>Register now!</h1></center>
    <form action="" method="POST">
        <h3>Email:</h3>
        <input type="text" name="register_email"></input>
        <h3>Password:</h3>
        <input type="password" name="register_password"></input>
        <h3>Re-Password:</h3>
        <input type="password" name="register_repassword"></input>
        <h3>Username:</h3>
        <input type="text" name="register_username"></input>
        <br/>
        <input type="submit" value="Register" name="register_submit"></input>
    </form>
</div>
<?php

if(isset($_POST['register_submit'])){
    echo registerUser($_POST['register_email'],$_POST['register_password'],$_POST['register_repassword'],$_POST['register_username']);
}