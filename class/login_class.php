<?php
include "database_class.php";
class login extends database{
    function __construct()
    {
        parent::__construct();
    }

    function login($data)
    {
        $qry = mysqli_query($this->con, "SELECT * FROM users 
        WHERE username = '".$data['username']."' AND password = '".$data['password']."'");
        $data = mysqli_fetch_assoc($qry);

        return $data;
    }
}