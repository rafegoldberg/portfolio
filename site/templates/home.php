
<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar') ?>
	<main class="ta-center">
		<section class="slider">
			<? snippet('projects.slider',array(
				'items'  => 'card_huge card ta-right',
				'limit'  => 3
			)) ?>
		</section>
		<? snippet('social') ?>
	</main>

<? snippet('bottom') ?>