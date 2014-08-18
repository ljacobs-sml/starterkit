<?
//	Redirects
if($pages->find('redirects')):
	$GLOBALS['rdir']						= $pages->find('redirects');
	$GLOBALS['rurl']						= "$_SERVER[REQUEST_URI]";
	foreach($GLOBALS['rdir']->children() as $r):
		$url_c = str::lower($GLOBALS['rurl']);
		$url_i = str::lower($r->url_in());
		$url_o = str::lower($r->url_out());
		$pos = strpos($url_c, $url_i);
		if ($pos !== false): go($url_o); endif;
	endforeach;
endif;
//	Page Slug
$GLOBALS['ptitle']					= $page->title();
$string								= array(' ','&','-');
$replace							= array('_','and','_');
$GLOBALS['pslug']					= str_replace($string,$replace,str::lower($GLOBALS['ptitle']));
?>