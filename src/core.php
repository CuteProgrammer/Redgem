<?
/*
# Core.php
# All frameworks and settings for the Powerhouse Framework
# VERSION 1.5 (c) 2013 Bennett Gibson
*/

#------------------------------------------------------

require_once'includes/config.inc.php';

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

	public function session ($checkfor) {
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

	public function sendEmail ($to,$subject,$content){
	$to = $to;
	$subject = $subject;
	$message = '<html><body>
					<div style="">
					'.$content.'
					</div>
	</body></html>';
	$headers = "From: " . DEFAULT_EMAIL_FROM . "\r\n";
	$headers .= "Reply-To: " .DEFAULT_EMAIL_FROM ."\r\n";
	$headers .= "CC: m\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if(mail($to,$subject,$message,$headers)){
			return true;
		}else{
			return false;
		}

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


	public function import ($name){
		include_once('library/'.$name.'.php');
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

	public function templateStart ($template,$title,$stylesheet) {

		if($template=="basic") {
	?>

	<!DOCTYPE html>
	<html>
	<head>
	<?if(!empty($stylesheet)){foreach($stylesheet as $value){
	?>
	<link rel="stylesheet" href="<?echo ROOT;?>/template/css/<?echo $value; ?>" type="text/css"/>
	<?
			include'../includes/root/html_header.r';
	}} ?>
		<?
			include'../includes/root/html_meta.r';
		?>
	<title> <?=$title;?> | <?=SITE_TITLE;?></title>
	</head>
	<body>
		<header>
			<div id="wrapper">
			<?
			require_once 'template/header.php';
			?>
			</div>
		</header>
	<content>
	<div id="wrapper">
	<?
	}else{
	echo'You did not select a template.';
	}

}


	public function TemplateEnd ($template) {

		if($template=="basic"){
			?>
			</div>
			</content>
				<footer>
					<div id="wrapper">
					<?	
					include 'template/footer.php';
					?>
					</div>
				</footer>
			</body>
			</html>
			<?
		}

	}

}
?>