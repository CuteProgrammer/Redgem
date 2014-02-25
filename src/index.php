<?
$title="Your Page Title (Goes on top)";
$session_check="TGP";
include'core.php';$core=new core();
$stylesheet=array('interface.css');$core->templateStart('basic',$title,$stylesheet);
?>
	<div id="inner" style="margin-top:10px;">
	</div>
<?
$core->templateEnd('basic');
?>