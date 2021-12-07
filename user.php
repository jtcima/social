<div id="friends">
    <?php 
        $image = "";
        if($friend_row['gender'])
        {
            $image = "./image/soldier.jpg";
        }
    ?>
    <img id="friends_img" src="<?php echo $image; ?>">
    <br>
    <?php echo $friend_row['first_name']." ".$friend_row['last_name']; ?>
</div>