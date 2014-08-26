<?php
// site variables
kirbytext::$tags['site'] = array(
  'attr' => array(
    'text',
	'popup',
	'class',
  ),
  'html' => function($tag) {
    global $site;
    $variable = strtolower($tag->attr('site'));
	if(str::contains($variable, 'email')):
		return '<a class="' . $tag->attr('class') . '" href="mailto:' . $site->$variable() . '">' . $site->$variable() . '</a>';
	elseif(str::contains($variable, 'url')):
		if($tag->attr('popup') == "yes") $target = 'target="_blank"'; else $target = '';
		return '<a class="' . $tag->attr('class') . '" href="' . $site->$variable() . '" ' . $target . '>' . $tag->attr('text') . '</a>';
	else:
    	return $site->$variable();
	endif;
  }
);
?>