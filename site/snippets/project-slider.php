<ul class="slide--wrap soft--links">

<? foreach(page('projects')->children()->visible()->limit(isset($limit)?$limit:-1) as $project): ?>
	<?#=COMPOSE VARS
	$id  = 'project-'.$project->slug();
	$bgi = $project->hasImages() ? $project->image($project->bgi())->url() : '';
	?>
	<li class="slide">
		<a id="<?=$id?>" href="<?=$project->url()?>" class="<?=$items?>" style="display:block;">
			<div><strong><?=$project->project()->html()?></strong></div>
			<small><?=$project->category()->html()?> <em>for</em> <?=$project->title()?></small>
			<style>
			#<?=$id?> {
				background-image: url("<?= $bgi; ?>");
			}
			</style>
		</a>
	</li>
<? endforeach ?>

	<li class="slide">
		<a href="<?=page('projects')->url()?>" class="<?=$items?>" style="display:block;">
			<div><strong>View Portfolio</strong></div>
			<small>All Projects</small>
		</a>
	</li>

</ul>