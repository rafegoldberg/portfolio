<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<article class='cms-text centered'>
		<header class="header card_huge ta-center">
			<strong class="d-block"><?= $page->project()->html() ?></strong>
			<small>for <?= $page->title()->html() ?></small>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
		<?= $page->tags()->list('inline list_tags sep-comma') ?>
	</article>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>