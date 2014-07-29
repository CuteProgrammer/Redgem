
<?
	
	function fetchLayoutStart($layout,$title) {
		$this_title=$title;
		include_once($layout.'_start.layout.php');
	}
	
	function fetchLayoutEnd($layout) {
		include_once($layout.'_end.layout.php');
	}


?>