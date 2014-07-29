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
	</head>
	<body>
		<header>
			<div id="wrapper">
				<div id="header-container">
					<?img('THIS IMG URL WILL PULL AN IMG TO DISPLAY ON THE TOP OF ALL YOUR PAGES');?>
					
					<!-- this is the header -->
				</div>
			</div>
		</header>
	<content>
	<div id="wrapper">