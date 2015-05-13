<? snippet('top',array(
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar.default',array('grid'=>3)) ?>
	<main class="grid-9 parent clearfix">
		<section class="cms-text">
			<?= $page->text()->kirbytext() ?>
		</section>
	</main>

<? snippet('bottom') ?>