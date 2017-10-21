<head>
	<link href="<?php echo FRONTEND_DIR; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo FRONTEND_DIR; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/tracking.js"></script>
	<title><?php echo $site['site-title']; ?></title>
	<script>
		$(document).ready(function () {
			$(".headerButton[title=Logout]").click(function () { //To logout
				$.ajax({
						type: "POST",
						url: "<?php echo ENGINE_DIR; ?>destroysession.php"
					})
					.done(function (msg) {
						var string = window.location.href;
						window.location.replace("/admin");
					});
			});
		});
	</script>
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
		<?php if(isset($_SESSION['admin']['displayName'])){ ?>
		<div id="headerRight">
			<div class="headerButton">
				<img class="userPhoto" src="<?php echo IMAGE_DIR . "profile.png"; ?>"></img>
				<span class="headerText"><?php echo $_SESSION['admin']['displayName']; ?></span>
			</div>
			<button class="headerButton" data-toggle="tooltip" title="Logout" data-original-title="Logout">
				<span class="headerText">Logout</span><i class="fa fa-arrow-circle-right"></i>
			</button>
		</div>
		<?php } ?> 
	</header>
	<div id="content">
	<div id="contentspace"></div>
	