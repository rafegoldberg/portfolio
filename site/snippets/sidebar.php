<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('header') ?>
	<article class='cms-text'>
		<?= $page->sidebar()->kirbytext() ?>
	</article>
	<? snippet('footer') ?>
</aside>