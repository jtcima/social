<div id="post">
    <div>
        <?php 
            $image = "";
            if($row_user['gender'])
            {
                $image = "./image/soldier.jpg";
            }
        ?>
        <img src="<?php echo $image; ?>" style="width: 75px; margin-right: 4px;">
    </div>
    <div>
        <div style="font-weight: bold; color: #5d9b;"><?php echo $row_user['first_name']." ".$row_user['last_name']; ?></div>
        <?php echo $row['post']; ?>
        <br><br>
        <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999"><?php echo $row['date']; ?></span>
    </div>
</div>
