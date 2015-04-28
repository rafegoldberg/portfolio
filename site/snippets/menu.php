<ul class="<?= isset($layout) ? $layout : 'list'; ?>">
	<? foreach($pages->visible() as $p): ?>
		<li class="list--item <?e($p->isOpen(), ' active')?>">
			<a href="<?= $p->url() ?>">
				<?= $p->title()->html() ?>
			</a>
		</li>
	<? endforeach ?>
</ul>