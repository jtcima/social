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
            min-height: 400px;
            margin-top: 20px;
            color: #405d9b;
            padding: 8px;
            text-align: center;
            font-size: 20px;
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
                <img src="AI.jpg" style="width: 60px; height: 50px; float: right;">
            </div>
        </div>
        <!--cover area-->
        <div style="width: 800px; margin:auto;min-height: 400px;">
            
            <!--below cover area-->
            <div style="display: flex;">
                <!--friends area-->
                <div style="min-height: 400px; flex:1;">
                    <div id="friends_bar">
                        <img src="ai2.jpg" id="profile_pic"><br>
                        User ai
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