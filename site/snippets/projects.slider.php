<div class="js_slider slider">
	<ul class="js_slide--wrap slide--wrap soft--links">
	<? foreach(page('projects')->children()->visible()->limit(isset($limit)?$limit:-1) as $project): ?>
		<?#=COMPOSE VARS
		$id  = 'project-'.$project->slug();
		$bgi = $project->hasImages() ? $project->image($project->bgi())->url() : '';
		?>
		<li class="js_slide slide">
			<a id="<?=$id?>" href="<?=$project->url()?>" class="slide--inner slide--inner_huge <?=$items?>" style="display:block;">
				<h1><?=$project->project()->html()?></h1>
				<small><?=$project->category()->html()?> <em>for</em> <?=$project->title()?></small>
				<style>
				#<?=$id?> {
					background-image: url("<?= $bgi; ?>");
				}
				</style>
			</a>
		</li>
	<? endforeach ?>
		<li class="js_slide slide">
			<a href="<?=page('projects')->url()?>" class="slide--inner slide--inner_huge <?=$items?>" style="display:block;">
				<h1>View Portfolio</h1>
				<small>All Projects</small>
			</a>
		</li>
	</ul>
</div>