<? snippet('header') ?>

  <main role="main">
    <h1><? echo html($page->title()) ?></h1>
    <ul class="meta cf">
      <li><b>Year:</b> <time datetime="<? echo $page->date('c') ?>"><? echo $page->date('Y', 'year') ?></time></li>
      <li><b>Tags:</b> <? echo $page->tags() ?></li>
    </ul>
    <div class="text">
      <? echo kirbytext($page->text()) ?>

      <? foreach($page->images() as $image): ?>
      <figure>
        <img src="<? echo $image->url() ?>" alt="<? echo html($page->title()) ?>">
      </figure>
      <? endforeach ?>

    </div>
    <nav class="nextprev cf">
      <? if($prev = $page->prevVisible()): ?>
      <a class="btn prev" href="<? echo $prev->url() ?>">&larr; previous</a>
      <? endif ?>
      <? if($next = $page->nextVisible()): ?>
      <a class="btn next" href="<? echo $next->url() ?>">next &rarr;</a>
      <? endif ?>
    </nav>
  </main>

<? snippet('footer') ?>