<?
ob_start();
ini_set('display_errors', '1');
include_once'core.php';
$core=new core();
$core->coreSL('open','default','Welcome');
?>
	<div id="inner" style="margin-top:10px;">
		...	
	</div>
<?
$core->templateEnd('default');
ob_end_flush();
?>