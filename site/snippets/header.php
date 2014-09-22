<? snippet('var') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><? echo html($site->title()) ?> | <? echo html($page->title()) ?></title>
<meta name="author" content="<? echo html($site->meta_author()) ?>" />
<meta name="description" content="<? echo html($site->meta_description()) ?>" />
<meta name="keywords" content="<? echo html($site->meta_keywords()) ?>" />
<?
echo js(array(
	'assets/js/jquery.1.11.1.min.js',
	'assets/js/jquery.ui-1.10.4.min.js',
));
echo '<script> $(document).bind("mobileinit", function () {$.mobile.ajaxEnabled = false;});</script>';
echo js(array(
	'assets/js/jquery.mobile-1.4.2.min.js',
	'assets/js/jquery.bxslider.js',
	'assets/js/jquery.imageScroll.min.js',
	//'assets/js/jquery.stellar.min.js',
	'assets/js/jquery.visible.min.js',
	'assets/js/modernizr.custom-2.8.2.js',
	'assets/js/smart-submit.js',
));
echo css(array(
	'assets/css/jquery.mobile.structure-1.4.2.css',
	'assets/css/grid.css',
	'assets/css/general.css',
	'assets/css/general-typography.css',
	'assets/css/general-styles.css',
	'@auto',
));
?>
</head>
<body>

<header am-Grid="full" class="cf">
<div am-Row="full">
	<div am-Col="auto">
		<h1 class="logo"><a href="<? echo url() ?>"><img src="<? echo url('assets/images/logo.png') ?>" alt="<? echo html($site->title()) ?>" /></a></h1>
		<h6 class="slogan"><? echo html($site->slogan()) ?></h6>
		<? snippet('menu') ?>
	</div>
</div>
</header>
