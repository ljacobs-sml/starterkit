<nav role="navigation">
	<ul class="menu cf">
	<? foreach($pages->visible() as $p): ?>
		<li>
			<h6><a <? e($p->isOpen(), ' class="active"') ?> href="<? echo $p->url() ?>"><? echo html($p->title()) ?></a></h6>	
		</li>
	<? endforeach ?>
	</ul>
</nav>