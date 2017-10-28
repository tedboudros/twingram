<form action="" method="POST">
    <div class="row settingsrow">
        <div class="col" align="center">
            <h3>Site Name:</h3>
            <input type="text" name="site-name" value="<?php echo $site['site-name']; ?>"></input>
        </div>
    </div>
    <div class="row settingsrow">
        <div class="col" align="center">
            <h3>Site Image:</h3>
            <input type="text" name="site-image" value="<?php echo $site['site-image']; ?>"></input>
        </div>
    </div>
    <div class="row settingsrow">
        <div class="col" align="center">
            <input type="submit" name="setting_submit" value="Save changes"></input>
        </div>
    </div>
</form>
