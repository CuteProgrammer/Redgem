<?
/*
#Includes - Config.php 
#Settings for Powerhouse (RedGem)
*/

# Settings

define (SITE_TESTING,False);

	if(SITE_TESTING){
		define (ROOT,'http://testingenv.yoursitehere.com'); 
	}else{
		define (ROOT,'http://yoursitehere.com'); 
	}

define (SITE_CLOSED,false);

define (DB_USER,' not set ');
define (DB_PASSWORD,' not set ');


?>