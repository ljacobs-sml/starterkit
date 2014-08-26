<? snippet('header') ?>

  <main class="content" role="main">
    <h1><? echo html($page->title()) ?></h1>
    <? echo kirbytext($page->text()) ?>

    <section>
      <? snippet('projects') ?>
    </section>
  </main>

<? snippet('footer') ?>