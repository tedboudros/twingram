<head>
	<link href="https://fonts.googleapis.com/css?family=Cabin|Dosis|Roboto" rel="stylesheet">
	<link href="<?php echo FRONTEND_DIR; ?>required/stylesheet/style.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo FRONTEND_DIR; ?>required/scripts/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/jquery.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/javascript.js"></script>
	<script src="<?php echo FRONTEND_DIR; ?>required/scripts/tracking.js"></script>
	<title><?php echo $site['site-title']; ?></title>
	<script>


		$(window).scroll(function() {    
			var scroll = $(window).scrollTop();    
			if (scroll > 80) {
				$("header").addClass("headerScrolled");
			}else{
				$("header").removeClass("headerScrolled");
			}
		});

		$(document).ready(function () {
			$(".headerButton[title=Logout]").click(function () { //To logout
				$.ajax({
						type: "POST",
						url: "<?php echo ENGINE_DIR; ?>destroysession.php"
					})
					.done(function (msg) {
						var string = window.location.href;
						if(string.includes("/admin")){
							window.location.replace("/admin");
						}else{
							window.location.replace("/");
						}
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
		<div id="search">
			<input type="text" placeholder="Search" id="searchInput"></input>
		</div>
		<div id="headerRight">
			<div class="headerButton">
				<img class="userPhoto" src="<?php echo IMAGE_DIR . $_SESSION['image']; ?>"></img>
				<span class="headerText"><?php echo $_SESSION['displayname']; ?></span>
			</div>
			<button class="headerButton" data-toggle="tooltip" title="Logout" data-original-title="Logout">
				<i class="fa fa-bars"></i>
			</button>
		</div>
	</header>
	<div id="container">
	<div id="content">