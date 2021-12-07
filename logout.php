<?php

session_start();

if(isset($_SESSION['me_userid']))
{
    $_SESSION['me_userid'] = NULL;
    unset($_SESSION['me_userid']);
}

header("Location: login.php");

die;
?>
