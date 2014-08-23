<!DOCTYPE html>
	<html>
	<head>
		<meta name="description" content="">
		<meta name="keywords" content="">
		<meta name="author" content="">
		<meta charset="UTF-8">
	<?if(!empty($stylesheet)){
		foreach($stylesheet as $value){
			echo '<link rel="stylesheet" href="<?echo ROOT;?>/template/css/<?echo $value; ?>" type="text/css"/>';
		}
	} ?>
	<title> <?=$title;?> | <?=SITE_TITLE;?></title>
		<link rel="stylesheet" href="<?=ROOT?>/template/css/template.css" type="text/css"/>
		<script src="<?=ROOT?>/scripts/jquery.js" type="text/javascript"></script>
	</head>
	<body>
		<header>
			<div class="wrapper">
				<div id="header-container" class="float-container">
					<div id="left-side" class="lfloat">
						<?img("../img/redgem.png");?>
					</div>
					<div id="right-side" class="rfloat">
						
						<h3>Site Name</h3>
						
					</div>
					
					<!-- this is the header -->
				</div>
			</div>
		</header>
	<content>
	<div class="wrapper">