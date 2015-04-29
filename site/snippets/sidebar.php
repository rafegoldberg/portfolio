<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<article class='cms-text'>
		<header class="card_huge ta-center">
			<h1><?=$site->title()?></h1>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
	</article>
	<? snippet('footer',array('class'=>'d-n-mobile')) ?>
</aside>