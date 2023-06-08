<?php
class database {
    protected $con;

    function __construct(){
       $this->con = mysqli_connect("localhost", "root", "", "ba215_db");

       return $this->con;
    }
}