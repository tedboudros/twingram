<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto" rel="stylesheet">	
	<link href="<?php echo FRONTEND_DIR; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo FRONTEND_DIR; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/tracking.js"></script>
	<title><?php echo $site['site-title']; ?></title>
</head>
<body>
	<header>
		<div id="site-title">
		<?php if ($site['iflogo'] == 1){ ?>
			<img style="padding: 0;" src="<?php echo IMAGE_DIR . $site['site-name']; ?>"></img>
		<?php }else{ ?>
			<span ><h1><?php echo $site['site-name']; ?></h1></span>
		<?php } ?>
		</div>

		<div id="headerRight">
			<form action="" method="POST">
				<input type="text" placeholder="Username" name="username" class="loginInput"></input>
				<input type="password" placeholder="Password" name="password" class="loginInput"></input>
				<input type="submit" value="Login" name="submit" class="loginInput"></input>
			</form>
		</div>
	</header>
	<div id="content">
	<div id="contentspace"></div>

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