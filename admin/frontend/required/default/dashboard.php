<?php 

    $dashboard = dashboard();

?>
<div id="dashboardcontainer">
    <div class="dashboardItem">
    <center><h2>Total Posts:</h2></center>
    <center><b><h1><?php echo $dashboard['posts'] ?></h1></b></center>
    </div>

    <div class="dashboardItem">
    <center><h2>Total Users:</h2></center>
    <center><b><h1><?php echo $dashboard['users'] ?></h1></b></center>
    </div>

    <div class="dashboardItem">
    <center><h2>Total Comments:</h2></center>
    <center><b><h1><?php echo $dashboard['comments'] ?></h1></b></center>
    </div>
</div>
