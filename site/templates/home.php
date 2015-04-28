<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar') ?>
	<section class="slider">
		<? snippet('project-slider',array(
			'items'  => 'card_big card ta-right',
			'limit'  => 3
		)) ?>
	</section>
	<main class="clearfix prefix-desktop-3 prefix-tablet-6 gutter-left">
	</main>

<? snippet('bottom') ?>