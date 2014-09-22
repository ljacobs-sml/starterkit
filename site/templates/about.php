<? snippet('header') ?>
<? foreach($page->children()->visible() as $section):
	$sectionTitle = $section->title();
	$string       = array(' ','&','-');
	$replace      = array('_','and','_');
	$sectionSlug  = str_replace($string,$replace,str::lower($sectionTitle));
	$sectionArray = array('content'=>$section,'title'=>$section->title(),'slug'=>$section->slug(),'parent_title'=>$page->title(),'parent_slug'=>$page->slug());
?>

<? // Template Specific Blocks
if($section->template()     == '_submenu'):	snippet('submenu',	$sectionArray);
elseif($section->template() == '_hero'):	snippet('hero',		$sectionArray);
elseif($section->template() == '_section'):	snippet('section',	$sectionArray);
else:
?>

<? endif ?>
<? endforeach // $section ?>

<? if($page->copy()): ?>
<div am-Grid="normal" id="pageContent" class="cf">
	<div am-Row="normal" class="cf">
		<div am-Col="sixteen">
			<? echo kirbytext($page->copy()) ?>
		</div>
	</div>
</div>
<? endif ?>

<? snippet('footer') ?>