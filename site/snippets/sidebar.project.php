<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<article class='cms-text cms-text_pad-edges centered'>
		<header class="header card_huge ta-center">
			<h1 class="d-block"><?= $page->project()->html() ?></h1>
			<small><?=$page->category()?> <em>for</em> <?= $page->title()->html() ?></small>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
		<?= $page->tags()->list('inline tags sep-comma') ?>
	</article>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>