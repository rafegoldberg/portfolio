<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<section id="sidebar-main" class='cms-text_pad-edges'>
		<header class="card_huge ta-center">
			<h1><?=$site->title()?></h1>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
	</section>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>