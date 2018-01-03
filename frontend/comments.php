
<?php
session_start();
require '../engine/db/mysqli.php';
require '../engine/db/config.php';
require '../engine/db/getDB.php';
require '../config.php';
if($_POST['security_key'] == $_SESSION['security_key']){
    foreach(getComments($_POST['post_id']) as $comment){ ?>
        <div class="comment">
            <?php $user = getUserFromID($comment['userid']); ?>
            <img class="commentUserImage" src='<?php echo IMAGE_DIR . $user["image"]; ?>'></img>
            <span class="commentUser"><?php echo $user["username"]; ?></span> says: 
            <span class="commentText"><?php echo $comment['text']; ?></span>
        </div>
<?php }} ?>