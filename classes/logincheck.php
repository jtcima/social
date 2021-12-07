<?php

class Login
{
    private $error = "";

    public function check($data)
    {
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);
        
        $query = "select * from users where email = '$email' limit 1";
        
        $db = new DB();
        $result = $db->read($query);

        if($result)
        {
            $row = $result[0];

            if($password == $row['password'])
            {
                //create a session data
                $_SESSION['me_userid'] = $row['userid'];

            }
            else
            {
                $this->error .= "Wrong email or password<br>";
            }
        }
        else
        {
            $this->error .= "No user was found<br>";
        }
        
        return $this->error;
    }

    public function check_login($id)
    {
        if(is_numeric($id))
        {
            $query = "select * from users where userid = '$id' limit 1";
            
            $db = new DB();
            $result = $db->read($query);

            if($result)
            {   
                return $result[0];
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
    }
}

?>