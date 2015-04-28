<? snippet('top',array(
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar',array('grid'=>3)) ?>
	<main class="grid-9 parent clearfix">
		<section class="slider">
			<? snippet('project-slider',array(
				'items'  => 'card',
			)) ?>
		</section>
	</main>

<? snippet('bottom') ?>