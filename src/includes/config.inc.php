<?
/*
#Includes - Config.php 
#Settings for Powerhouse (RedGem)
*/

# Settings

define ('DEVELOPMENT_MODE',true);

	if(DEVELOPMENT_MODE){
		define ('ROOT','');
		define ('IMG_DIR',ROOT.'/template/img');
		define ('CURRENT_ENVIRONMENT','dev');
	}else{
		define ('ROOT','');
		define ('IMG_DIR',ROOT.'/template/img');
		define ('CURRENT_ENVIRONMENT','live');
	}

define ('DB_HOST','localhost');
define ('DB_USER','');
define ('DB_DEFAULT','');
define ('DB_PASSWORD','');
define ('SITE_TITLE','');
define ('DEFAULT_EMAIL_FROM', '');
define ('DEFAULT_EMAIL_REPLY', '');

#SESSION

define ('DEFAULT_SID_INDEX','user_id');

?>