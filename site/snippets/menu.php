<nav id="menu" role="navigation">
	<ul class="<?= isset($layout) ? $layout : 'list'; ?>">
		<li class="list--item">
			<a href="<?= $site->url() ?>">
				<strong><?= $site->title()->html() ?></strong>
			</a>
		</li>
		<? foreach($pages->visible() as $p): ?>
			<li class="list--item <?e($p->isOpen(), ' active')?>">
				<a href="<?= $p->url() ?>">
					<?= $p->title()->html() ?>
				</a>
			</li>
		<? endforeach ?>
	</ul>
</nav>