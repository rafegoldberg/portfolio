<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<section id="sidebar-main" class='cms-text cms-text_pad-edges'>
		<header class="card_huge ta-center">
			<? if ($page->file($page->logo())->url()) : ?>
				<?=brick('img', false, array(
					"src" => $page->file($page->logo())->url()
				))?>
			<? else: ?>
				RGD2 <em>for</em> <strong><?=$page->title()->html()?></strong>
			<? endif ?>
		</header>
		<?= $page->sidebar()->kirbytext() ?>
	</section>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>