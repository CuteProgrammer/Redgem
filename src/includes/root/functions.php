
<?php
	
	function img ($url,$style=null){

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

	function redirect_view ($where) {
		header("Location:".ROOT.'/'.$where);
	}
	
	function redirect ($where) {
		header("Location:".$where);
	}
		
	function redirect_t ($where,$time){
	?>
		<meta http-equiv="refresh" content="<?echo $time;?>;url='<?echo $where;?>' "/>
	<?
	}
	
	function basic_link ($to,$title) {
		echo '<a href="'.$to.'">'.$title.'</a>';
	
	}
	


?>