<!DOCTYPE html>
<?php
session_start();
$stage;
if($_POST['stage'] == ""){
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
        body{
            color: #fff;
        }
        input[type=submit]{
            width: 300px;
            height: 40px;
            background-color: #ccc;
            border-radius: 3px;
            border: 0;
            color: #03f;
            margin: 20px auto;
            display: block;
        }
        input[type=text]{
            width: 280px;
            height: 20px;
            background-color: #ccc;
            border-radius: 3px;
            border: 0;
            color: #000;
            display: block;
            padding: 10px;
            margin: 20px auto;
        }
        input{
            overflow: none;
            outline: none;
        }
        #button{
            position: relative;
        }
        #pane{
            width: 500px;
            display: block;
            position: relative;
            margin: 100px auto;
            background: #333;
            box-shadow: 0px 0px 3px black;
            border-radius: 3px;
            padding: 20px;
        }
    </style>
</head>
<body>
<div id="pane">
<center><h1>TwinGram - Installer</h1></center>
        <?php
        if($stage == "1"){
            include_once 'stages/config.php';
        }else if($stage == "2"){
            include_once 'stages/writesql.php';
            include_once "../engine/db/config.php";
            include_once 'stages/sql.php';
        }else if($stage == "3"){
            include_once 'stages/admin.php';
        }?>
    <form action="" method="POST">
            <?php if($stage=='1'){ ?>
                <input placeholder="Host:" name="host" type="text">
                <input placeholder="Username:" name="username" type="text">
                <input placeholder="Password:" name="password" type="text">
                <input placeholder="Database:"name="db" type="text">
                <input placeholder="Port:"name="port" value="3306" type="text">
            <?php } ?>
        <div id='button'>
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

