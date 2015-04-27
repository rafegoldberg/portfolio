<nav role="navigation">
	<ul class="<?= $list_layout?"list_$list_layout":'list'; ?>">
		<? foreach($pages->visible() as $p): ?>
			<li class="list--item">
				<a <? e($p->isOpen(), ' class="active"') ?> href="<?= $p->url() ?>">
					<?= $p->title()->html() ?>
				</a>
			</li>
		<? endforeach ?>
	</ul>
</nav>