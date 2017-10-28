<div class="row">
    <table class="table table-striped admintable" cellspacing=0>
        <thead>
            <tr><th>ID: </th><th>Title: </th><th>Text: </th><th>ID Of the user: </th><th>Creation Date: </th></tr>
        </thead>
        <tbody>
            <?php foreach($db['posts'] as $user){ ?>

                <tr><td><?php echo $user['id']; ?></td><td><?php echo $user['title']; ?></td><td><?php echo $user['text']; ?></td><td><?php echo $user['userid']; ?></td><td><?php echo $user['date']; ?></td></tr>

            <?php } ?>
        </tbody>
    </table>
</div>