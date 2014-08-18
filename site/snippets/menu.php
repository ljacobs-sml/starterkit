<nav role="navigation">

  <ul class="menu cf">
    <? foreach($pages->visible() as $p): ?>
    <li>
      <h6><a <? e($p->isOpen(), ' class="active"') ?> href="<? echo $p->url() ?>"><? echo html($p->title()) ?></a></h6>

	<!-- hide submenu
      <? //if($p->hasVisibleChildren()): ?>
      <ul class="submenu">
        <? //foreach($p->children()->visible() as $p): ?>
        <li>
          <a href="<? //echo $p->url() ?>"><? //echo html($p->title()) ?></a>
        </li>
        <? //endforeach ?>
      </ul>
      <? //endif ?>
	-->
	
    </li>
    <? endforeach ?>
  </ul>

</nav>