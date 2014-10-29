<?
echo '<div am-Grid="' . $content->span() . '" class="cf">' . "\n";
foreach($content->children()->visible() as $row):

	// Column Driven
	if($row->span() == "auto"):

		$spanCount = 0;
		echo '<div am-Row="fluid" class="cf">' . "\n";

		foreach($row->children()->visible() as $col):
			$currentSpan = html($col->span());
			if(($spanCount+(int)$currentSpan) <= 16):
				$spanCount = $spanCount + (int)$currentSpan;
				echo '<div am-Col="' . $currentSpan . '">' . "\n";
				echo kirbytext($col->copy()) . "\n";
				// Nested Grid
				foreach($col->children()->visible() as $grid):
					if($grid->span() == 'table'): $span = 'table nested'; else: $span = 'nested'; endif;
					echo '<div am-Grid="' . $span . '">' . "\n";
					foreach($grid->children()->visible() as $row):

						// Nested - Column Driven
						if($row->span() == "auto"):
							$spanCountNest = 0;
							echo '<div am-Row="fluid" class="cf">' . "\n";
							foreach($row->children()->visible() as $col):
								$currentSpanNest = html($col->span());
								if(($spanCountNest+(int)$currentSpanNest) <= 16):
									$spanCountNest = $spanCountNest + (int)$currentSpanNest;
									echo '<div am-Col="' . $currentSpanNest . '">' . "\n";
									echo kirbytext($col->copy()) . "\n";
									echo '</div>' . "\n";
								else:
									$spanCountNest = 0 + (int)$currentSpanNest;
									echo '</div>' . "\n";
									echo '<div am-Row="fluid" class="cf">' . "\n";
									echo '<div am-Col="' . $currentSpanNest . '">' . "\n";
									echo kirbytext($col->copy()) . "\n";
									echo '</div>' . "\n";
								endif;
							endforeach;
 						// Nested - Row Driven
						else:
							echo '<div am-Row="' . $row->span() . 'col">' . "\n";
							foreach($row->children()->visible() as $col):
								if($grid->span() == 'table'): $valign = $col->valign(); else: $valign = null; endif;
								echo '<div am-Col="' . $valign .'">' . "\n";
								echo kirbytext($col->copy()) . "\n";
								echo '</div>' . "\n";												// [am-Grid="nested"] [am-Row] [am-Col]
							endforeach;
						endif;

					endforeach;
					echo '</div>' . "\n";												// [am-Grid="nested"]
				endforeach;
				// End Nested Grid

				echo '</div>' . "\n";													// [am-Col]
			else:
				$spanCount = 0 + (int)$currentSpan;
				echo '</div>' . "\n";
				echo '<div am-Row="fluid" class="cf">' . "\n";
				echo '<div am-Col="' . $currentSpan . '">' . "\n";
				echo kirbytext($col->copy()) . "\n";

				// Nested Grid
				// Nested Grid
				foreach($col->children()->visible() as $grid):
					if($grid->span() == 'table'): $span = 'table nested'; else: $span = 'nested'; endif;
					echo '<div am-Grid="' . $span . '">' . "\n";
					foreach($grid->children()->visible() as $row):

						// Nested - Column Driven
						if($row->span() == "auto"):
							$spanCountNest = 0;
							echo '<div am-Row="fluid" class="cf">' . "\n";
							foreach($row->children()->visible() as $col):
								$currentSpanNest = html($col->span());
								if(($spanCountNest+(int)$currentSpanNest) <= 16):
									$spanCountNest = $spanCountNest + (int)$currentSpanNest;
									echo '<div am-Col="' . $currentSpanNest . '">' . "\n";
									echo kirbytext($col->copy()) . "\n";
									echo '</div>' . "\n";
								else:
									$spanCountNest = 0 + (int)$currentSpanNest;
									echo '</div>' . "\n";
									echo '<div am-Row="fluid" class="cf">' . "\n";
									echo '<div am-Col="' . $currentSpanNest . '">' . "\n";
									echo kirbytext($col->copy()) . "\n";
									echo '</div>' . "\n";
								endif;
							endforeach;
 						// Nested - Row Driven
						else:
							echo '<div am-Row="' . $row->span() . 'col">' . "\n";
							foreach($row->children()->visible() as $col):
								if($grid->span() == 'table'): $valign = $col->valign(); else: $valign = null; endif;
								echo '<div am-Col="' . $valign .'">' . "\n";
								echo kirbytext($col->copy()) . "\n";
								echo '</div>' . "\n";												// [am-Grid="nested"] [am-Row] [am-Col]
							endforeach;
						endif;

					endforeach;
					echo '</div>' . "\n";												// [am-Grid="nested"]
				endforeach;
				// End Nested Grid

				echo '</div>' . "\n";													// [am-Col]
			endif;
		endforeach;

		echo '</div>' . "\n";															// [am-Row="fluid"]
	echo '</div>' . "\n";


	// Row Driven
	else:

		echo '<div am-Row="' . $row->span() . 'col">' . "\n";
		foreach($row->children()->visible() as $col):
			if($content->span() == 'table'): $valign = $col->valign(); else: $valign = null; endif;
			echo '<div am-Col="' . $valign .'">' . "\n";
			echo kirbytext($col->copy()) . "\n";

			// Nested Grid
			foreach($col->children()->visible() as $grid):
				if($grid->span() == 'table'): $span = 'table nested'; else: $span = 'nested'; endif;
				echo '<div am-Grid="' . $span . '">' . "\n";
				foreach($grid->children()->visible() as $row):
					echo '<div am-Row="' . $row->span() . 'col">' . "\n";
					foreach($row->children()->visible() as $col):
						if($grid->span() == 'table'): $valign = $col->valign(); else: $valign = null; endif;
						echo '<div am-Col="' . $valign .'">' . "\n";
						echo kirbytext($col->copy()) . "\n";
						echo '</div>' . "\n";												// [am-Grid="nested"] [am-Row] [am-Col]
					endforeach;
					echo '</div>' . "\n";													// [am-Grid="nested"] [am-Row]
				endforeach;
				echo '</div>' . "\n";														// [am-Grid="nested"]
			endforeach;

			echo '</div>' . "\n";															// [am-Grid] [am-Row] [am-Col]
		endforeach;
		echo '</div>' . "\n";																// [am-Grid] [am-Row]

	endif;

endforeach;
echo '</div>' . "\n";																	// [am-Grid]
?>