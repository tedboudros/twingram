<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto|Open+Sans" rel="stylesheet">
	<link href="<?php echo HTTP_FRONTEND; ?>required/stylesheet/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo HTTP_FRONTEND_ADMIN; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo HTTP_FRONTEND; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/tracking.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/popper.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/popper-utils.js"></script>
	<script src="<?php echo HTTP_FRONTEND; ?>required/scripts/bootstrap.min.js"></script>
	<title><?php echo $site['site-name']; ?></title>
</head>
<body>
<center><img style="margin-bottom: -70px; margin-top: 50px; width: 200px; height: 200px;" src="<?php echo IMAGE_DIR; ?>logo_white.png"></img></center>
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
            $_SESSION['admin'] = $login;
            header("location: /admin");
        }
    }
            ?>
            <tr><td><input class="center" name="submit" value="Log In" type="submit"></input></td></tr>
            <tr><td><center><a>Did you forget your password?</a></center></td></tr>
        </table>
    </form>
</div>