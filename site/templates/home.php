<? snippet('top') ?>

	<div class="grid-6 card">
		<? snippet('header') ?>
	</div>
	<div class="grid-6 card">
		<? snippet('menu',array('list_layout'=>'inline')) ?>
	</div>
	<main class="grid-12">
		<section class="slider">
			<? snippet('projects',array('layout'=>'slider','items'=>'card')) ?>
		</section>
	</main>
	<main class="grid-6 card" role="main">
		<?= $page->text()->kirbytext() ?>
	</main>
	<div class="grid-6 card"><? snippet('footer') ?></div>

<? snippet('bottom') ?>