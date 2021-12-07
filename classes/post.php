<?php

class Post
{
    private $error = "";

    public function create_post($userid, $data)
    {
        if(!empty($data['post']))
        {
            $post = addslashes($data['post']);
            $postid = $this->create_postid();
            
            $query = "insert into posts (userid, postid, post) values ('$userid', '$postid', '$post')";

            $db = new DB();
            $result = $db->save($query);
            if(!result)
            {
                $this->error = "Something went wrong! <br>";
                echo "<div style='text-align: center; font-size: 12px; color:red;'>";
                echo $this->error;
                echo "</div>";
            }
        }
        else
        {
            $this->error = "Empty Post <br>";
            echo "<div style='text-align: center; font-size: 12px; color:red;'>";
            echo $this->error;
            echo "</div>";
        }

        return $this->error;
    }

    public function get_posts($userid)
    {
        $query = "select * from posts where userid = '$userid' order by id desc limit 10";

        $db = new DB();
        $result = $db->read($query);

        if($result)
        {
            return $result;
        }
        else
        {
            return false;
        }
    }

    private function create_postid()
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