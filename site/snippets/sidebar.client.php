<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<section id="sidebar-main" class='cms-text cms-text_pad-edges'>
		<header class="card_huge ta-center">
			<small class="aside">
				<?=brick('img', false, array(
					"src" => $page->file($page->logo())->url()
				))?>
			</small>
			<hr>
			RGD2 <em>for</em> <strong><?=$page->title()->html()?></strong>
		</header>
		<?= $site->description()->kirbytext() ?>
		<? snippet('social',array(
			'wrap' =>'list_sep-slash ta-center card'
		)); ?>
	</section>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>