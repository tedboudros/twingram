<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto" rel="stylesheet">
	<link href="<?php echo HTTP_FRONTEND; ?>required/stylesheet/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo HTTP_FRONTEND; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
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

<div id="masterContainer">
		<div id="logindiv">
			<form action="" method="POST">
				<a style='background-image: url("<?php echo IMAGE_DIR; ?>logo.png");' class="logo"></a>
				<span>Username:</span><input id="username" name="username" type="text"></input>
				</br>
				<span>Password:</span><input name="password" id="password" type="password"></input>
				</br>
				<input id="loginBtn" value="Login" type="submit" name="submit"></input>
			</form>
		</div>
		
		<span  id="about">twingram© - 2017 - theodoreboudros</span>
		
</div>

	<?php if(isset($_POST['submit'])){
        $login = loginUser($_POST['username'], $_POST['password']);
        if($login == 0){   
            unset($login);
            ?>
                  <tr><td><center><h5>The username or the password is wrong!</h5></center></td></tr>
             <?php
        }else{
            $_SESSION = array_merge($_SESSION, $login);
            header("location: /");
        }
    }