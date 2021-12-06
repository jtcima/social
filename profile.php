<?php

    session_start();

    include("classes/connect.php");
    include("classes/logincheck.php");

    //check if user is logged in
    if(isset($_SESSION['me_userid']) && is_numeric($_SESSION['me_userid']))
    {
        $id = $_SESSION['me_userid'];
        $login = new Login();
        $result = $login->check_login($id);

        if($result)
        {
            //retrive user data
        }
        else
        {
            header("Location: login.php");
            die;
        }
    }
    else
    {
        header("Location: login.php");
        die;
    }

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
                <img src="ai2.jpg" style="width: 60px; height: 50px; float: right;">
            </div>
        </div>
        <!--cover area-->
        <div style="width: 800px; margin:auto;min-height: 400px;">
            <div style="background-color: white; text-align: center; color: #405d9b">

                <img src="ai3.jpg" style="width:100%;">
                <img id="profile_pic" src="ai2.jpg">

                <br>

                <div id="menu_button">Timeline</div>  
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

                        <div id="friends">
                            <img id="friends_img" src="user1.jpg">
                            <br>
                            1st user
                        </div>

                        <div id="friends">
                            <img id="friends_img" src="user2.jpg">
                            <br>
                            2nd user
                        </div>

                        <div id="friends">
                            <img id="friends_img" src="user3.jpg">
                            <br>
                            3rd user
                        </div>

                        <div id="friends">
                            <img id="friends_img" src="user4.jpg">
                            <br>
                            4th user
                        </div>
                    </div>

                    

                </div>

                <!--posts area-->
                <div style="min-height: 400px; flex:2.5; padding: 20px; padding-right: 0px;">
                    <div style="border: solid thin #aaa; padding: 10px; background-color: white">
                        <textarea placeholder="What's on your mind?"></textarea>
                        <input id="post_button" type="submit" value="Post">
                        <br>
                    </div>
                    <!--posts-->
                    <div id ="post_bar">
                        <!--post 1-->
                        <div id="post">
                            <div>
                                <img src="user1.jpg" style="width: 75px; margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #5d9b;">user1</div>
                                hgfjshgjksdhgjkshgjksdhgjkdshg ghdjghjdskgh ghjskdhgjksdhgsd ghjdskg dsghdjskghsd jkgdsh gjkds hgjdskhgjskdhgjkdgh hjfdkhfkjds fhjdhfjkdshfks hfjdkshfdjksf fdjsk
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999">April 23 2021</span>
                            </div>
                        </div>

                        <!--post 2-->
                        <div id="post">
                            <div>
                                <img src="user2.jpg" style="width: 75px; margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #5d9b;">user2</div>
                                hgfjshgjksdhgjkshgjksdhgjkdshg ghdjghjdskgh ghjskdhgjksdhgsd ghjdskg dsghdjskghsd jkgdsh gjkds hgjdskhgjskdhgjkdgh hjfdkhfkjds fhjdhfjkdshfks hfjdkshfdjksf fdjsk
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999">April 23 2021</span>
                            </div>
                        </div>

                        <!--post 3-->
                        <div id="post">
                            <div>
                                <img src="user3.jpg" style="width: 75px; margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #5d9b;">user3</div>
                                hgfjshgjksdhgjkshgjksdhgjkdshg ghdjghjdskgh ghjskdhgjksdhgsd ghjdskg dsghdjskghsd jkgdsh gjkds hgjdskhgjskdhgjkdgh hjfdkhfkjds fhjdhfjkdshfks hfjdkshfdjksf fdjsk
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999">April 23 2021</span>
                            </div>
                        </div>

                        <!--post 4-->
                        <div id="post">
                            <div>
                                <img src="user4.jpg" style="width: 75px; margin-right: 4px;">
                            </div>
                            <div>
                                <div style="font-weight: bold; color: #5d9b;">user4</div>
                                hgfjshgjksdhgjkshgjksdhgjkdshg ghdjghjdskgh ghjskdhgjksdhgsd ghjdskg dsghdjskghsd jkgdsh gjkds hgjdskhgjskdhgjkdgh hjfdkhfkjds fhjdhfjkdshfks hfjdkshfdjksf fdjsk
                                <br><br>
                                <a href="">Like</a> . <a href="">Comment</a> . <span style="color: #999">April 23 2021</span>
                            </div>
                        </div>
                    
                    </div>
                </div>
            </div>

        </div>
    </body>


</html>