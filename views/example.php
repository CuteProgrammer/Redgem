<?include'../core.php';$stylesheet=array("interface.css");$core=new core();$core->templateStart('basic','This is the title',$stylesheet);
?><div id="inner">Hi, my name is Charlie, and this is my example page. Enjoy.</div><?$core->templateEnd('basic');?>