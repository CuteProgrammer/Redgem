<?php

class DatabaseCon {
    
    private $connection = null;
    
    public function build ($database = DB_DEFAULT){
        
        $password=DB_PASSWORD;
        	$db=new mysqli("localhost",DB_USER,$password,$database);
          if (mysqli_connect_errno($db)) {
          	echo "Failed to connect to the Database: " . mysqli_connect_error();
          }else{
          	$this->connection = $db;
          }
    }
    
   	public function connect(){
    	$this->build();
        return $this->connection;
    }
    
    public static function get_result ($query) {
    	$fetched = $query->fetch_array();
    	return $fetched['value'];
    }
    
    
}

?>