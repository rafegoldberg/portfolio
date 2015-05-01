<?#=COMPOSE VARS
$limit    = isset($limit) ? $limit : 4;
$projects = page('projects')->children()->visible()->paginate($limit);
?>

<ul class="soft--links list m-t-none <?=isset($wrap)?$wrap:''?>">
<? foreach($projects as $project): ?>

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

<? if ($projects->pagination()->hasPages()) : ?>
	<nav class="pagination">
		<? if($projects->pagination()->hasNextPage()): ?>
		<a class="next" href="<?= $projects->pagination()->nextPageURL() ?>">&lsaquo; newer posts</a>
		<? endif ?>

		<? if($projects->pagination()->hasPrevPage()): ?>
		<a class="prev" href="<?= $projects->pagination()->prevPageURL() ?>">older posts &rsaquo;</a>
		<? endif ?>
	</nav>
<? endif; ?>