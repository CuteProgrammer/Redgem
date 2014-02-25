<?php

class DatabaseCon {
    
    private $connection;
    
    function __construct ($database){
        
        $password=DB_PASSWORD;
        	$db=new mysqli("localhost",DB_USER,$password,$database);
        	if (mysqli_connect_errno($db)) {
          echo "Failed to connect to the Database: " . mysqli_connect_error();
          }else{
          $this->connection=$db;
          }
    }
    
    function connect(){
        return $this->connection;
    }
    
    
}

?>