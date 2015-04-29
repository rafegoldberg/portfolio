
<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar') ?>
	<section class="slider">
		<? snippet('project-slider',array(
			'items'  => 'card_huge card ta-right',
			'limit'  => 3
		)) ?>
	</section>
	<main>
		<? snippet('social') ?>
	</main>
	<? foreach (page('projects')->children()->visible() as $project) : ?>
		<?=jsl($project->slug())?>
	<? endforeach ?>

<? snippet('bottom') ?>