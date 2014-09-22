<? snippet('header') ?>
<? foreach($page->children()->visible() as $section):
	$sectionTitle	= $section->title();
	$string			= array(' ','&','-');
	$replace		= array('_','and','_');
	$sectionSlug	= str_replace($string,$replace,str::lower($sectionTitle));
	$sectionArray	= array('content'=>$section,'ptitle'=>$GLOBALS['ptitle'],'pslug'=>$GLOBALS['pslug'],'title'=>$sectionTitle,'slug'=>$sectionSlug);
?>

<? // Template Specific Blocks
if($section->template() == '_submenu'):		snippet('submenu',	$sectionArray);
elseif($section->template() == '_hero'):	snippet('hero',		$sectionArray);
elseif($section->template() == '_section'):	snippet('section',	$sectionArray);
else:
?>

<? endif ?>
<? endforeach // $section ?>
<? snippet('footer') ?>