<?
/*
# Core.php
# All frameworks and settings for the Redgem Framework
# VERSION 1.6 (c) 2013 Bennett Gibson
*/

#------------------------------------------------------

require_once'includes/config.inc.php';
require_once'includes/root/functions.r';

# Session Check 

//----------------
//COMBINATIONS ARE:
## FDL (False or no session, Direct Login)
## TGP (True or session started, Get Permissions)
## TDA (True or session started, Direct Account)  
//----------------


//main class Core

class Core {

	function __construct (){
		//nothing in here yet
	}

	public function session_lock ($checkfor) {
		require_once('../library/class.Router.php');
		$router=new Router(CURRENT_ENVIRONMENT);
		session_start();
		if(isset($checkfor)){

		 if($checkfor=='permissions.get') { 

			if(isset($_SESSION[DEFAULT_SESSION_ID_INDICE])) { 
				$user_id=$_SESSION[DEFAULT_SESSION_ID_INDICE]; //The main session id pulled by the user
				$session_started=True;
			}

		 }


		 if($checkfor=='restrict.session') { 

			if(isset($_SESSION[DEFAULT_SESSION_ID_INDICE])) {
				$user_id=$_SESSION['user_id'];
				$session_started=True;

			}else{
				$router->sdirect('forcelogin');
			}
			
			
		}elseif($checkfor=='passed.session') { 


				if(isset($_SESSION[DEFAULT_SESSION_ID_INDICE])) { 
			
					$router->sdirect('loggedin');
				}
				
		}
	
	}
	
	function img ($url,$style){

		?>
		<img src="<?echo $url;?>" style="<?echo $style;?>"/>
		<?

	}

	
	function sLink ($url,$text) {
		?>
		<a href="<?echo ROOT."/".$url;?>"><?echo $text;?></a>
		<?
	}

	function aLink ($url,$text) {
		?>
		<a href="<?echo $url;?>"><?echo $text;?></a>
		<?
	}

	function error ($what) {

		echo '<div class="error">'.$what.'</div>';

	}


	function warning ($what) {

		echo '<div class="warning">'.$what.'</div>';

	}


	function success ($what) {

		echo '<div class="success">'.$what.'</div>';

	}

	public function redirect ($where) {
		$path=$this->env_path;
		header("Location:".$path.$where);
	}
	
	public function redirect_slow ($where,$time){
	?>
		<meta http-equiv="refresh" content="<?echo $time;?>;url='<?echo $where;?>' "/>
	<?
	}

	//Use templateStart to pull in a layout by name, use layout end to pull in an ending layout
	public function templateStart ($layout_name,$title) {
		if($layout_name!==""){
			fetchLayoutEnd($layout_name,$title);	
		}else{
			echo'You did not select a layout.';
		}

	}


	public function templateEnd ($layout_name) {
		fetchLayoutEnd($layout_name);

	}

}
?>