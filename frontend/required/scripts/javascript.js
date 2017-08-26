$(document).ready(function () {
    $(".headerButton[title=Logout]").click(function () {
        $.ajax({
                type: "POST",
                url: "<?php echo ENGINE_DIR; ?>destroysession.php"
            })
            .done(function (msg) {
                alert("Data Saved: " + msg);
            });
    });
});