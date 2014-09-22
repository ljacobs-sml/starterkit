<div am-Grid="<? echo  $content->span() ?>" class="<? echo $slug . ' cf' ?>">
<?
$spanCount = 0;

echo '<div am-Row="normal" class="cf">';

foreach($content->children()->visible() as $a):

	if($a->files()->findBy('name','background')) $bg = $a->files()->findBy('name','background');

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