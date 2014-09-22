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
					// Nested Grids
					foreach($a->children()->visible() as $b):
						echo '<div am-Grid="' . $b->span() . '" class="'. $b->slug() .' cf">';
						$subSpanCount = 0;
						echo '<div am-Row class="cf">';
						foreach($b->children()->visible() as $c):
						if($c->template() == '_section_column'):
							$subCurrentSpan = html($c->span());
							if(($subSpanCount+(int)$subCurrentSpan) <= 16):
								$subSpanCount = $subSpanCount + (int)$subCurrentSpan;
									echo '<div am-Col="' . $subCurrentSpan . '">';
									if($b->span()=='table') echo '<div class="wrap ' . $c->valign() . '">';
										echo kirbytext($c->copy());
									if($b->span()=='table') echo '</div>';
									echo '</div>';
							else:
								echo '</div>';
								echo '<div am-Row class="cf">';
								$subSpanCount = 0 + (int)$subCurrentSpan;
									echo '<div am-Col="' . $subCurrentSpan . '">';
									if($b->span()=='table') echo '<div class="wrap ' . $c->valign() . '">';
										echo kirbytext($c->copy());
									if($b->span()=='table') echo '</div>';
									echo '</div>';
							endif;
						endif;
						endforeach;
					endforeach;
					// End Nested Grids
				if($content->span()=='table') echo '</div>';
				echo '</div>';
		else:
			echo '</div>';
			echo '<div am-Row="normal" class="cf">';
			$spanCount = 0 + (int)$currentSpan;
				echo '<div am-Col="' . $currentSpan . '">';
				if($content->span()=='table') echo '<div class="wrap ' . $a->valign() . '">';
					echo kirbytext($a->copy());
					// Nested Grids
					foreach($a->children()->visible() as $b):
						echo '<div am-Grid="' . $b->span() . '" class="'. $b->slug() .' cf">';
						$subSpanCount = 0;
						echo '<div am-Row class="cf">';
						foreach($b->children()->visible() as $c):
						if($c->template() == '_section_column'):
							$subCurrentSpan = html($c->span());
							if(($subSpanCount+(int)$subCurrentSpan) <= 16):
								$subSpanCount = $subSpanCount + (int)$subCurrentSpan;
									echo '<div am-Col="' . $subCurrentSpan . '">';
									if($b->span()=='table') echo '<div class="wrap ' . $c->valign() . '">';
										echo kirbytext($c->copy());
									if($b->span()=='table') echo '</div>';
									echo '</div>';
							else:
								echo '</div>';
								echo '<div am-Row class="cf">';
								$subSpanCount = 0 + (int)$subCurrentSpan;
									echo '<div am-Col="' . $subCurrentSpan . '">';
									if($b->span()=='table') echo '<div class="wrap ' . $c->valign() . '">';
										echo kirbytext($c->copy());
									if($b->span()=='table') echo '</div>';
									echo '</div>';
							endif;
						endif;
						endforeach;
					endforeach;
					echo '</div>';
					echo '</div>';
					// End Nested Grids
				if($content->span()=='table') echo '</div>';
				echo '</div>';
		endif;
	endif;
endforeach;

echo '</div>';
?>

</div>