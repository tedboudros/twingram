<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto" rel="stylesheet">
	<link href="<?php echo FRONTEND_DIR; ?>required/stylesheet/bootstrap.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo FRONTEND_DIR; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo FRONTEND_DIR; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/tracking.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/popper.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/popper-utils.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/bootstrap.min.js"></script>
	<title><?php echo $site['site-name']; ?></title>
</head>
<body>

	<nav class="fixed-top">
		<a id="title" class="navbar-brand" style="padding: 0; background-image: url(<?php echo IMAGE_DIR . $site['site-image']; ?>);"></a>
		<div id="headerRight" style="margin: 9px;" class="pull-right d-inline-block">
			<form action="" method="POST">
				<input type="text" placeholder="Username" name="username" class="loginInput"></input>
				<input type="password" placeholder="Password" name="password" class="loginInput"></input>
				<input type="submit" value="Login" name="submit" class="loginInput"></input>
			</form>
		</div>
	</nav>
	<div class="container mainContent">
	<div class="content">

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