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
            margin-top: -200px;
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
                <div style="min-height: 400px; flex:2.5;">
                
                </div>
            </div>

        </div>
    </body>


</html>