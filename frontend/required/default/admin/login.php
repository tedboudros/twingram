<?php
    if(isset($_POST['submit'])){
        echo "POST REQUEST";
    }
?>
<div id="adminlogin">
    <form action="" method="POST">
        <table>
            <tr><td><center><h2>Hello, Admin!</h2></center></td></tr>
            <tr><td><input class="center" name="username" placeholder="Username: " type="text"></input></td></tr>
            <tr><td><input class="center" name="password" placeholder="Password: " type="password"></input></td></tr>
            <tr><td><hr></td></tr>
            <tr><td><input class="center" name="submit" value="Log In" type="submit"></input></td></tr>
            <tr><td><a>Did you forget your password?</a></td></tr>
        </table>
    </form>
</div>