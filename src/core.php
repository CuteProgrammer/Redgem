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

session_start();
if(isset($session_check)){

 if($session_check=='TGP') { 

	if(isset($_SESSION['user_id'])) { 
		$user_id=$_SESSION['user_id']; //The main session id pulled by the user
		$session_started=True;
	}

 }


 if($session_check=='FDL') { 

	if(isset($_SESSION['user_id'])) {
		$user_id=$_SESSION['user_id'];
		$session_started=True;

	}else{

		header("Location:".ROOT."/login?m=mustlogin");
	}
	
	
}elseif($session_check=='TDA') { 


		if(isset($_SESSION['user_id'])) { 
		
		header("Location:".ROOT."/settings");} 


		}
		
}

function img ($url,$style){

?>
<img src="<?echo $url;?>" style="<?echo $style;?>"/>
<?

}


//TEMPLATE WRITER (c) Bennett Gibson 2013-2014


if(!empty($javascript)){foreach($javascript as $value){
?>
<script type="text/javascript" src="<?echo $value; ?>"></script>
<?}}

	# Session Check

	#------------------------------------------------------
	#------------------------------------------------------

	# Write Page Functionality
	if(SITE_CLOSED ==True){
		header("Location:".ROOT."/closed");
	}


# Write Page Functionality

#------------------------------------------------------

# Functions and Frameworks

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

echo '<div class="errorBox">'.$what.'</div>';

}

function errorText ($what) {

echo '<div class="errorText">'.$what.'</div>';

}

function warning ($what) {

echo '<div class="warningBox">'.$what.'</div>';

}


function success ($what) {

echo '<div class="successBox">'.$what.'</div>';

}

function successText ($what){
echo'<div class="successText">'.$what.'</div>';
}


function info ($what) {

echo '<div class="infoBox">'.$what.'</div>';

}


class core {

	public function sendEmail ($to,$subject,$content){
	$to = $to;
	$subject = $subject;
	$message = '<html><body>
					<div style="">
					'.$content.'
					</div>
	</body></html>';
	$headers = "From: " . "noreply@yoursite.com" . "\r\n";
	$headers .= "Reply-To: support@yoursite.com\r\n";
	$headers .= "CC: m\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

		if(mail($to,$subject,$message,$headers)){
		return true;
		}else{
		return false;
		}

	}


	public function redirect_slow ($where,$time){
	?>
		<meta http-equiv="refresh" content="<?echo $time;?>;url='<?echo $where;?>' "/>
	<?
	}
	
	
	public function redirect ($where) {

	header("Location:".$where);
	
	}
	
	public function useClass ($name){
		include_once('library/'.$name.'.php');
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
	<?}} ?>

	<meta name="description" content="blah blah blah">
	<title> <?echo $title;?> | Your Site</title>
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

function db_sync($database='your_default_database') {
	$password=DB_PASSWORD;
	$db=new mysqli("localhost",DB_USER,$password,$database);
	if (mysqli_connect_errno($mysqli)) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }else{
  return $db;
  }
	
}//GET DATABASE INFO AND CONNECTION

function javascript ($script){
?>
<script type="text/javascript">
<?echo $script;?>
</script>
<?
} //DO JAVASCRIPT WITHIN PHP SYNTAX

?>