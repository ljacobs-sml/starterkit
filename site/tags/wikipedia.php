<?php
// wikipedia 
kirbytext::$tags['wikipedia'] = array(
  'attr' => array(
    'text',
    'language'
  ),
  'html' => function($tag) {

    // build the final url
    $url = 'http://' . $tag->attr('language', 'en') . '.wikipedia.org/w/index.php?search=' . urlencode($tag->attr('wikipedia'));

    // build the link tag  
    return '<a class="wikipedia" href="' . $url . '">' . html($tag->attr('text')) . '</a>';    

  }
);
?>