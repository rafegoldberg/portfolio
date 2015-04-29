<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('header') ?>
	<article class='cms-text'>
		<header class="header">
			<h1><?= $page->project()->html() ?></h1>
			<small>for <?= $page->title()->html() ?></small>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
		<?= $page->tags()->list('inline sep-slash') ?>
	</article>
	<? snippet('footer') ?>
</aside>