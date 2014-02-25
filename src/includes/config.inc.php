<?
/*
#Includes - Config.php 
#Settings for Powerhouse (RedGem)
*/

# Settings

define ('SITE_TESTING',False);

	if(SITE_TESTING){
		define ('ROOT','http://testingenv.yoursitehere.com');
		define ('CURRENT_ENVIRONMENT','dev');
	}else{
		define ('ROOT','http://yoursitehere.com'); 
		define ('CURRENT_ENVIRONMENT','live');
	}

define ('SITE_CLOSED',false);

define ('DB_HOST','localhost');
define ('DB_USER',' not set ');
define ('DB_PASSWORD',' not set ');
define ('SITE_TITLE',' not set ');
define ('DEFAULT_EMAIL_FROM', 'noreply@yoursite.com');

#SESSION

define ('DEFAULT_SESSION_ID_INDICE','user_id');

?>