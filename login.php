<?php

session_start();

    include("classes/connect.php");
    include("classes/logincheck.php");

    $email = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $login = new Login();
        $result = $login->check($_POST);
        if($result)
        {
            echo "<div style='text-align: center; font-size: 12px; color:red;'>";
            echo $result;
            echo "</div>";
        }
        else
        {
            header("Location: profile.php");
            die;
        }

        $email = $_POST['email'];
        
    }

    
?>
<html>
    <head>

        <title>ME | Log in</title>

    </head>

    <style> 
        #bar
        {
            height:100px; 
            background-color: rgb(59,89,152); 
            color: #d9dfeb;
            padding: 4px;
        }

        #signup_button
        {
            background-color: #42b72a;
            width: 70px;
            text-align: center;
            padding: 4px;
            border-radius: 4px;
            float: left;
            margin: auto;
        }

        #login_bar
        {
            background-color: white; 
            width: 800px; 
            margin: auto; 
            margin-top: 50px;
            padding:10px;
            padding-top: 50px;
            text-align: center;
            font-weight: bold;
        }

        #text
        {
            height: 40px;
            width: 300px;
            border-radius: 4px;
            border: solid 1px #ccc;
            padding: 4px;
            font-size: 14px;
        }

        #button
        {
            width: 300px;
            height: 40px;
            border-radius: 4px;
            border: none;
            background-color: rgb(59,89,152);
            color: white;
            font-weight: bold;
        }

        
    </style>

    <body style="font-family: tahoma; background-color: #e9ebee;">

        <div id="bar">
            <div style="font-size: 40px;padding-top:8px;">ME  </div> 
            <div id="signup_button">Sign up</div>
            
        </div>

        <div id="login_bar">

            <form method="post"> 
                Log in to ME<br><br>

                <input value="<?php echo $email?>" name="email" type="text" id="text" placeholder="Email"><br><br>
                <input name="password" type="password" id="text" placeholder="Password"><br><br>
                <input type="submit" id="button" value="Log in">
            </form>
        </div>

    </body>

</html>