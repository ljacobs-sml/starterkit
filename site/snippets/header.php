<? snippet('var') ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<title><? echo html($site->title()) ?> | <? echo html($page->title()) ?></title>
<meta name="description" content="<? echo html($site->description()) ?>" />
<?
echo js(array(
'assets/js/jquery.1.11.1.min.js',
'assets/js/jquery.mobile-1.4.2.min.js',
'assets/js/jquery.ui-1.10.4.min.js',
'assets/js/jquery.bxslider.js',
'assets/js/jquery.equalheights.js',
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
));
$cssURI='assets/css/'.$page->template().'.css';
$cssRoot=c::get('root').'/'.$cssURI;
if(file_exists($cssRoot)) echo css($cssURI);
?>
</head>
<body>

<header class="grid full cf">
<div class="row">
	<div class="block fluid">
		<h1 class="logo"><a href="<? echo url() ?>"><img src="<? echo url('assets/images/logo.png') ?>" alt="<? echo html($site->title()) ?>" /></a></h1>
		<h6 class="slogan"><? echo html($site->slogan()) ?></h6>
		<? snippet('menu') ?>
	</div>
</header>