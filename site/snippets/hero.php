<? if($content->files()->findBy('name','background')) $bg = $content->files()->findBy('name','background'); ?>

<div am-Grid="full" class="<? echo $slug . ' cf' ?>" <? if(isset($bg)) echo 'style="background-image: url('.$bg->url().');' ?>">
<?
$spanCount = 0;

echo '<div am-Row="normal" class="cf">';

foreach($content->children()->visible() as $a):


	if($a->template() == '_section_column'):

		$currentSpan = html($a->span());
		if(($spanCount+(int)$currentSpan) <= 16):
			$spanCount = $spanCount + (int)$currentSpan;
				echo '<div am-Col="' . $currentSpan . '">';
				if($content->span()=='table') echo '<div class="wrap ' . $a->valign() . '">';
					echo kirbytext($a->copy());
				if($content->span()=='table') echo '</div>';
				echo '</div>';
		else:
			echo '</div>';
			echo '<div am-Row="normal" class="cf">';
			$spanCount = 0 + (int)$currentSpan;
				echo '<div am-Col="' . $currentSpan . '">';
				if($content->span()=='table') echo '<div class="wrap ' . $a->valign() . '">';
					echo kirbytext($a->copy());
				if($content->span()=='table') echo '</div>';
				echo '</div>';
		endif;

	endif;
endforeach;

echo '</div>';
?>

</div>