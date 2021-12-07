<?php

    session_start();
    include("classes/connect.php");
    include("classes/logincheck.php");
    include("classes/userdata.php");
    include("classes/post.php");

    $login = new Login();
    $user_data = $login->check_login($_SESSION['me_userid']);

    //posting starts here
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        $post = new Post();
        $result = $post->create_post($_SESSION['me_userid'], $_POST);

        if($result == "")
        {
            header("Location: profile.php");
            die;
        }
    }
    //collect posts
    $post = new Post();
    $posts = $post->get_posts($_SESSION['me_userid']);

    //collect friends
    $user = new Userdata();
    $friends = $user->get_friends($_SESSION['me_userid']);
?>

<!DOCTYPE html>
<html>
    <head>
        <title> Profile | ME</title>
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

        #profile_pic
        {
            width: 150px;
            margin-top: -60px;
            border-radius: 50%;
            border: solid 2px white;

        }

        #menu_button
        {
            width: 100px;
            display: inline-block;
            margin: 2px;
        }

        #friends_img
        {
            width: 75px;
            float: left;
            margin: 8px;          
        }

        #friends_bar
        {
            background-color: white;
            min-height: 400px;
            margin-top: 20px;
            color: #aaa;
            padding: 8px;
        }

        #friends
        {
            clear: both;
            font-size: 12px;
            font-weight: bold;
            color: #405d9b;
        }

        textarea
        {
            width: 100%;
            border: none;
            font-family: tahoma;
            font-size: 14px;
            height: 60px;
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
            width: 50px;
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
        <!--top bar-->
        <div id="blue_bar">
            <div style="width: 800px; margin: auto; font-size: 30px;">
                 <div style="display:inline-block; width:50px;margin:auto;">ME</div> &nbsp &nbsp <input type="text" id="search_box" placeholder="Search for people">
                 <a href="logout.php"> <span style="font-size: 11px; float: right; margin: 10px; border-radius:2px; color:#d9dfeb;padding:2px;">Logout</span> </a>
                 <img src="ai2.jpg" style="width: 60px; height: 50px; float: right;">
                
            </div>
        </div>
        <!--cover area-->
        <div style="width: 800px; margin:auto;min-height: 400px;">
            <div style="background-color: white; text-align: center; color: #405d9b">

                <img src="ai3.jpg" style="width:100%;">
                <img id="profile_pic" src="ai2.jpg">

                <br>
                    <div style="font-size: 20px; color: black;"> <?php echo $user_data['first_name']." ".$user_data['last_name'] ?> </div>
                <br>
                <a href="index.php"><div id="menu_button">Timeline</div></a> 
                <div id="menu_button">About</div>   
                <div id="menu_button">Friends</div>   
                <div id="menu_button">Photos</div>   
                <div id="menu_button">Settings</div>

            </div>
            <!--below cover area-->
            <div style="display: flex;">
                <!--friends area-->
                <div style="min-height: 400px; flex:1;">
                    <div id="friends_bar">
                        Friends<br>

                        <?php
                            if($friends)
                            {
                                foreach ($friends as $friend_row) 
                                {
                                    include("user.php");
                                }
                            }
                        ?>
                    </div>
                </div>

                <!--posts area-->
                <div style="min-height: 400px; flex:2.5; padding: 20px; padding-right: 0px;">
                    <div style="border: solid thin #aaa; padding: 10px; background-color: white">
                        <form method="post">
                            <textarea name="post" placeholder="What's on your mind?"></textarea>
                            <input id="post_button" type="submit" value="Post">
                            <br>
                        </form>
                    </div>
                    <!--posts-->
                    <div id ="post_bar">
                        <?php
                            if($posts)
                            {
                                foreach ($posts as $row) 
                                {
                                    $user = new Userdata();
                                    $row_user = $user->get_user($row['userid']);
                                    include("post.php");
                                }
                            }
                        ?>
                    </div>
                </div>
            </div>

        </div>
    </body>


</html>