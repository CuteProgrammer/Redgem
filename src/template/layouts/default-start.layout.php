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