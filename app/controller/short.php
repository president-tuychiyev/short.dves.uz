<?php

require __DIR__ . '/../config/database.php';

class Short
{

    // connect to database and table 'links'
    private $conn;

    // constructor for database connection
    public function __construct()
    {
        $db = new Database();
        $this->conn = $db->getConnection();
    }

    public function create($data)
    {
        //Get user IP
        if (!empty($_SERVER['HTTP_CLIENT_IP'])):
            $ip = $_SERVER['HTTP_CLIENT_IP'];
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])):
            $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
        else:
            $ip = $_SERVER['REMOTE_ADDR'];
        endif;

        //Select url for checking
        $query = $this->conn->query("SELECT * FROM links where `url` = '{$data['url']}'");
        
        if($query->fetchColumn() > 0):
            //if such an address exists 
            $query = $this->conn->query("SELECT * FROM links where `url` = '{$data['url']}'");
            return $query->fetchObject();
        else:
            //if such an address does not exist

            //random path
            check:
            $randomPath = substr(str_shuffle("0123456789abcdefghijklmnopqrstvwxyzABCDEFGHIJKLMNOPQRSTVWXYZ"), 0, 6);
            $query = $this->conn->query("SELECT * FROM links where `shortUrl` = '{$randomPath}'");
    
            //check random path
            if ($query->fetchColumn() > 0):
                goto check;
            endif;
    
            $this->conn->query("INSERT INTO `links` (`ip`, `url`, `shortUrl`) VALUES ('{$ip}', '{$data['url']}', '{$randomPath}')");
            $select = $this->conn->query("SELECT * FROM links where `id` = '{$this->conn->lastInsertId()}'");
            return $select->fetchObject();
        endif;        
    }

    public function open($url)
    {
         //Select url for checking
        $select = $this->conn->query("SELECT * FROM links where `shortUrl` = '{$url}'");

        if ($select->fetchColumn() > 0):
            $select = $this->conn->query("SELECT * FROM links where `shortUrl` = '{$url}'");
            echo "<script>window.location.replace('{$select->fetchObject()->url}');</script>";
        else:
            echo "<script>window.location.href = window.location.protocol + '//' + window.location.hostname; alert('This url not found')</script>";
        endif;        
    }
}
