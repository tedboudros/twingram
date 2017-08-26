
<div id="adminlogin">
    <form action="" method="POST">
        <table>
            <tr><td><center><h2>Hello, Admin!</h2></center></td></tr>
            <tr><td><input class="center" name="username" placeholder="Username: " type="text"></input></td></tr>
            <tr><td><input class="center" name="password" placeholder="Password: " type="password"></input></td></tr>
            <?php
    if(isset($_POST['submit'])){
        $login = loginAdmin($_POST['username'], $_POST['password']);
        if($login == 0){
            unset($login);
            ?>
                  <tr><td><center><h5>The username or the password is wrong!</h5></center></td></tr>
             <?php
        }else{
            $_SESSION = array_merge($_SESSION, $login);
        }
    }
            ?>
            <tr><td><hr></td></tr>
            <tr><td><input class="center" name="submit" value="Log In" type="submit"></input></td></tr>
            <tr><td><a>Did you forget your password?</a></td></tr>
        </table>
    </form>
</div>