<?php
class Signup
{
    private $error = "";

    
    public function evaluate($data)
    {
        foreach ($data as $key => $value) 
        {
            if(empty($value))
            {
                $this->error .= "$key is empty!<br>";
            }

            if($key == "email")
            {
                if(!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$value))
                {
                    $this->error .= "Invalid email address!<br>";
                }
            }

            if($key == "first_name")
            {
                $chars = str_split($value);
                foreach($chars as $char)
                {
                    if(is_numeric($char))
                    {
                        $this->error .= "Invalid first name!<br>";
                        break;
                    }
                }
                
            }

            if($key == "last_name")
            {
                $chars = str_split($value);
                foreach($chars as $char)
                {
                    if(is_numeric($char))
                    {
                        $this->error .= "Invalid last name!<br>";
                        break;
                    }
                }
            }    
        }

        if(strcmp($data['password'], $data['password2']) !== 0)
        {
            $this->error .= "Password does not match! Please re-enter password!<br>";
        }

        if($this->error == "")
        {
            //no error
            $this->create_user($data);
        }

        return $this->error;
    }

    public function create_user($data)
    {
        $first_name = ucfirst(addslashes($data['first_name']));
        $last_name = ucfirst(addslashes($data['last_name']));
        $gender = $data['gender'];
        $email = addslashes($data['email']);
        $password = addslashes($data['password']);

        //create these
        $url_address = strtolower($first_name) . "." . strtolower($last_name);
        $userid = $this->create_userid();
        
        $query = "insert into users 
        (userid, first_name, last_name, gender, email, password, url_address)
        values 
        ('$userid', '$first_name', '$last_name', '$gender', '$email', '$password', '$url_address')";
        
        $db = new DB();
        $db->save($query);
    }

    private function create_userid()
    {
        $length = rand(4,19);
        $number = "";
        for ($i=0; $i < $length; $i++) 
        { 
            $new_rand = rand(0,9);
            $number = $number . $new_rand;    
        }

        return $number;
    }

}

?>