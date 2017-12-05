<!DOCTYPE html>
<?php
session_start();
$stage;
if(!isset($_POST['stage'])){
    $_SESSION['stage'] = 1;
}else{
    $_SESSION['stage'] += 1;
}
$stage = $_SESSION['stage'];
$_POST['stage'] = "";
?>
<head>
    <title>Installer - Twingram</title>
    <style>
        .h1, .h2, .h3, .h4, .h5, .h6, h1, h2, h3, h4, h5, h6 {
            font-family: inherit;
            font-weight: 400;
            line-height: 1.1;
            color: inherit;
        }
        html {
            height: 100%;
            font-family: sans-serif;
        }
        #logo {
            margin: 20px;
            margin-top: 80px;
            height: 130px;
            width: 130px;
        }

        input[type=submit]{
            background-color: #03f;
            color: #fff;
            border: 0;
            border-radius: 3px;
            font-size: 13px;
            outline: none;
            height: 40px;
            width: 380px;
        }
        label {
            width: 50px;
            height: 40px;
            display: inline-block;
            padding: 10px;
            margin: 5px;
            padding-left: 0;
        }
        input[type=text], input[type=password]{
            background-color: #555;
            color: #fff;
            border: 1px solid #777;
            font-size: 13px;
            border-radius: 3px;
            outline: none;
            transition: 0.2s;
            height: 20px;
            width: 230px;
            display: block;
            float: right;
            padding: 10px;
        }

        input[type=text]:hover, input[type=password]:hover{
            border: 1px solid #aaa;
        }

        input[type=text]:focus, input[type=password]:focus{
            border: 1px solid #03f;
        }
        body{
            color: #fff;
            background-color: #222;
        }
        #button > input, #button > label{
            display: inline-block;
        }
        .button{
            position: relative;
            max-width: 380px;
            height: 20px;
            overflow: none;
            outline: none;
            padding: 10px;
            display: block;
            margin: 20px auto;
        }
        #pane{
            width: 550px;
            display: block;
            position: relative;
            margin: 0px auto;
            background: #2f2f2f;
            box-shadow: 0px 0px 3px #111;
            border-radius: 3px;
            padding: 20px;
        }
        hr {
            border: 0; 
            height: 1px; 
            background-image: -webkit-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -moz-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -ms-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0);
            background-image: -o-linear-gradient(left, #f0f0f0, #8c8b8b, #f0f0f0); 
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<center><img id="logo" src="../image/logo_white.png"></img></center>
<div id="pane">
<h2>Welcome - Step <?php echo $stage; ?> of 3</h2>
    <hr></hr>
        <?php
        if($stage == "1"){
            include_once 'stages/config.php';
        }else if($stage == "2"){
            include_once 'stages/writesql.php';
            include_once "../engine/db/config.php";
            include_once 'stages/sql.php';
        }else if($stage == "3"){
            include_once "../engine/db/config.php";
            include_once 'stages/admin.php';
        }?>

    <form action="" method="POST">
            <?php if($stage=='1'){ ?>

                <div class="button">
                    <label for="host">Host: </label>
                    <input name="host" type="text">
                </div>
                <div class="button">
                    <label for="username">Username: </label>
                    <input name="username" type="text">
                </div>
                <div class="button">
                    <label for="password">Password: </label>
                    <input name="password" type="text">
                </div>
                <div class="button">
                    <label for="db">Database: </label>
                    <input name="db" type="text">
                </div>
                <div class="button">
                    <label for="port">Port: </label>
                    <input name="port" value="3306" type="text">
                </div>

            <?php }else if($stage==2){ ?>
                <div class="button">
                    <label for="admin_username">Admin Username: </label>
                    <input name="admin_username" type="text">
                </div>
                <div class="button">
                    <label for="admin_password">Admin Password: </label>
                    <input name="admin_password" type="text">
                </div>
                <div class="button">
                    <label for="admin_repassword">Re-Password: </label>
                    <input name="admin_repassword" type="text">
                </div>
                <div class="button">
                    <label for="admin_displayname">Admin Display Name: </label>
                    <input name="admin_displayname" type="text">
                </div>
            <?php } ?>
        <div class='button'>
            <input name="stage" value="<?php
                if($stage == 3){
                    echo "Finish";
                }else{
                    echo "Next";
                }
                ?>" type="submit">
        </div>
    </form>
</div>
</body>
<?php 

if ($stage==4){
    header("location: /");
}

?>