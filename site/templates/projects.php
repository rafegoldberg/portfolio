<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar') ?>
	<main class="ta-left">
		<? snippet('projects.list',array(
			"wrap"=>"grid-12 parent vertical-align-middle",
			"item"=>"card_huge grid-12"
		)) ?>
	</main>

<? snippet('bottom') ?>