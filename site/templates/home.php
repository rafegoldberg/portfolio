
<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar') ?>
	<main class="ta-center">
		<? snippet('projects.slider',array(
			'items'  => 'slide--card ta-right',
			'limit'  => 3
		)) ?>
		<? snippet('social') ?>
	</main>

<? snippet('bottom') ?>