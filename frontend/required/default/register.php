<div id="register">
    <center><h1>Register now!</h1></center>
    <form action="" method="POST">
        <h3>Email:</h3>
        <input type="text" name="email"></input>
        <h3>Password:</h3>
        <input type="password" name="password"></input>
        <h3>Re-Password:</h3>
        <input type="password" name="repassword"></input>
        <h3>Username:</h3>
        <input type="text" name="username"></input>
        <br/>
        <input type="submit" value="Register" name="submit_register"></input>
    </form>
</div>
<?php

if(isset($_POST['submit_register'])){
    echo registerUser($_POST['email'],$_POST['password'],$_POST['repassword'],$_POST['username']);
}