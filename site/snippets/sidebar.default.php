<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<section id="sidebar-main" class='cms-text cms-text_pad-edges'>
		<header class="card_huge ta-center">
			<h1><?=$page->title()->html()?></h1>
		</header>
	</section>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>