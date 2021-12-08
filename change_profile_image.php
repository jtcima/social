<?php

    session_start();

    include("classes/connect.php");
    include("classes/logincheck.php");
    include("classes/userdata.php");
    include("classes/post.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['me_userid']);

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        
        if(isset($_FILES['file']['name']) && $_FILES['file']['name'] != "")
        {
            $filename = "uploads/".$_FILES['file']['name'];
            move_uploaded_file($_FILES['file']['tmp_name'], $filename);

            if(file_exists($filename))
            {
                $userid = $user_data['userid'];
                $query = "update users set profile_image = '$filename' where userid = $userid limit 1";
                $db = new DB();
                $db->save($query);

                header("Location: profile.php");
                die;
            }

        }
        else
        {
            echo "<div style='text-align: center; font-size: 12px; color:red;'>";
            echo "Please upload a valid image";
            echo "</div>";
        }
        
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <title> Change Profile Image | ME</title>
    </head>

    <style>

        #blue_bar
        {
            height: 50px;
            background-color: #405d9b;
            color: #d9dfeb;
        }

        #search_box
        {
            width: 400px;
            height: 20px;
            border-radius: 5px;
            border: none;
            padding: 4px;
            font-size: 14px;
            background-image: url(search.png);
            background-repeat: no-repeat;
            background-position: right;
        }

        #post_button
        {
            float: right;
            background-color: #405d9b;
            border:none;
            color: white;
            padding: 4px;
            font-size: 14px;
            border-radius: 2px;
        }

        #post_bar
        {
            margin-top:20px;
            background-color: white;
            padding:10px;
        }

        #post
        {
            padding: 4px;
            font-size: 13px;
            display: flex;
            margin-bottom: 20px;
        }
    </style>

    <body style="font-family: tahoma; background-color: #d8d8e4;">
        <br>
        <?php include("header.php"); ?>
        <!--cover area-->
        <div style="width: 800px; margin:auto;min-height: 400px;">
            
            <!--below cover area-->
            <div style="display: flex;">

                <!--posts area-->
                <div style="min-height: 400px; flex:2.5; padding: 20px; padding-right: 0px;">
                    <div>Please upload your profile image</div>
                    <form method="post" enctype="multipart/form-data">
                        <div style="border: solid thin #aaa; padding: 10px; background-color: white">
                            <input type="file" name="file">
                            <input id="post_button" type="submit" value="Upload">
                            <br>
                        </div>
                    </form>
                   
                </div>
            </div>

        </div>
    </body>


</html>