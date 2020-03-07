<?php

class Model
{
    var $servername = "localhost";
    var $username = "root";
    var $password = "";
    var $database = "pract_db";
    public $mysqli;

// Create connection

    function __construct(){
        $this->mysqli = mysqli_connect($this->servername, $this->username, $this->password, $this->database);
    
    }

    // метод выборки данных
    public function get_data()
    {
        // todo
    }
    public function delete($arg)
    {
        
    }
    public function update($arg){
        
    }
    public function get_page($arg){
        
    }
    public function get_page_comms($arg){
        
    }
}