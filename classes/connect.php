<?php


class DB
{
    private $host = "localhost";
    private $username = "jt";
    private $password = "password";
    private $db = "me_db";
    
    function connect()
    {
        $connection =mysqli_connect($this->host, $this->username, $this->password, $this->db);
        return $connection;
    }

    function read($query)
    {
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if(!$result)
        {
            return false;
        }
        $data = false;
        while($row = mysqli_fetch_assoc($result))
        {
            $data[] = $row;
        }

        return $data;
    }

    function save($query)
    {   
        $conn = $this->connect();
        $result = mysqli_query($conn,$query);

        if(!$result)
        {
            return false;
        }

        return true;
    }

}

?>