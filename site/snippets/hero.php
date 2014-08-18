<?
$bg=""; $bg_url=""; $ftimg=""; $ftimg_url="";
if($content->hasImages()): foreach($content->images() as $image): 
	if($image->name()=="background"): 
		$bg				= "true"; 
		$bg_url			= $image->url(); 
	elseif($image->name()=="feature"):
		$ftimg			= "true";
		$ftimg_url		= $image->url();
	endif;
endforeach; endif;
?>	
<div class="grid full cf <? echo $slug ?>" <? if($bg=="true"): ?>style="background-image:url(<? echo $bg_url ?>);"<? endif ?>>
<div class="row">
	<div class="block sixteen">
		<div class="content <? echo h($content->layout()) ?>">
			<? if($bg=="true" || $ftimg=="true"): ?>
			<div class="image">
				<? if($bg=="true"): ?><img src="<? echo $bg_url ?>" style="visibility:hidden;" /><? endif ?>
				<? if($ftimg=="true"): ?><img src="<? echo $ftimg_url ?>" /><? endif ?>
			</div>
			<? endif ?>			
			<? if($content->copy()): ?>
			<div class="copy">
				<? echo kirbytext($content->copy()) ?>
			</div>
			<? endif ?>
		</div>
	</div>
</div>
</div>