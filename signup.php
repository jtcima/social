<!DOCTYPE html>
<html>
    <head>

        <title>ME | Sign up</title>

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
            float: right;
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
            <div style="font-size: 40px;">ME</div> 
            <div id="signup_button">Log in</div>
        </div>

        <div id="login_bar">
            Sign up to ME<br><br>

            <input type="text" id="text" placeholder="First name"><br><br>
            <input type="text" id="text" placeholder="Last name"><br><br>
            <span style="font-weight: normal">Gender: </span><br> 
            <select id="text">
                <option> </option>
                <option>Male</option>
                <option>Female</option>
                <option>It's a secret:)</option>
            </select>
            <br><br>
            <input type="text" id="text" placeholder="Email"><br><br>

            <input type="password" id="text" placeholder="Password"><br><br>
            <input type="password" id="text" placeholder="Retype Password"><br><br>
            <input type="submit" id="button" value="Sign up"><br><br>
        </div>

    </body>

</html>