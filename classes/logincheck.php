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
}

?>