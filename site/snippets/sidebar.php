<aside id="sidebar" class="<?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('header') ?>
	<article class='cms-text'>
		<?= $page->text()->kirbytext() ?>
	</article>
	<? snippet('footer') ?>
</aside>