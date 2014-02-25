<?
include'core.php';$core=new core();$core->session('restrict.session');
$stylesheet=array('interface.css');$core->templateStart('basic','My Page',$stylesheet);
?>
	<div id="inner" style="margin-top:10px;">
	</div>
<?
$core->templateEnd('basic');
?>