<? snippet('header') ?>
<? foreach($page->children()->visible() as $section):
	$sectionTitle = $section->title();
	$string       = array(' ','&','-');
	$replace      = array('_','and','_');
	$sectionSlug  = str_replace($string,$replace,str::lower($sectionTitle));
	$sectionArray = array('content'=>$section,'title'=>$section->title(),'slug'=>$section->slug(),'parent_title'=>$page->title(),'parent_slug'=>$page->slug());
?>

<? // Template Specific Blocks
if($section->intendedTemplate()     == '_submenu'):	snippet('submenu',	$sectionArray);
elseif($section->intendedTemplate() == '_hero'):	snippet('hero',		$sectionArray);
elseif($section->intendedTemplate() == '_section'):	snippet('section',	$sectionArray);
else:
?>

<? endif ?>
<? endforeach // $section ?>

<? snippet('footer') ?>