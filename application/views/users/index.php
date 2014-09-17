<h3>Here is the list of all users' info</h3>

<?php foreach ($users as $users_item):?>
    <h2><?php echo $users_item['name'] ?></h2>
    <div class="balance">
        <?php echo $users_item['balance'] ?>
    </div>
    <hr>
    
<?php endforeach;
