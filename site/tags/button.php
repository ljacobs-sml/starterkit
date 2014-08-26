<?php
// site variables
kirbytext::$tags['button'] = array(
  'attr' => array(
    'text'
  ),
  'html' => function($tag) {
    $variable = $tag->attr('button');
    return '<div class="btn '.$tag->attr('button').'">'.$tag->attr('text').'</div>';
  }
);
?>