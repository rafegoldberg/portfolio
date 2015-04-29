<ul class="soft--links list m-t-none <?=isset($wrap)?$wrap:''?>">
<? foreach(page('projects')->children()->visible()->limit(isset($limit)?$limit:-1) as $project): ?>
	<?#=COMPOSE VARS
	$id  = 'project-'.$project->slug();
	$bgi = $project->bgi() ? ($project->hasImages()?$project->image($project->bgi())->url() : '') : '';
	?>
	<li>
		<a id="<?=$id?>" href="<?=$project->url()?>" class="<?=isset($item)?$item:''?>" style="display:block;">
			<div>
				<strong><?=$project->project()->html()?></strong>
			</div>
			<small><?=$project->category()->html()?> <em>for</em> <?=$project->title()?></small>
			<style>
			#<?=$id?> {
				background-image: url("<?= $bgi; ?>");
			}
			</style>
		</a>
	</li>
<? endforeach ?>
</ul>