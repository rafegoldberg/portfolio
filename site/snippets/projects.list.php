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
			<header class="header">
				<h1><?=$project->project()->html()?></h1>
				<small class="aside">
					<?=$project->category()->html()?> <em>for</em> <?=$project->title()?>
				</small>
			</header>
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
	<nav class="pagination grid-12 parent nextprev cf block-center-solo ta-center soft--links">

		<? if($projects->pagination()->hasNextPage()): ?>
			<a class="next grid-6 card_big" href="<?= $projects->pagination()->nextPageURL() ?>">
				<span class="iconic d-ib va-m gutter-right" data-glyph="caret-left"></span>
				<span class="va-m d-ib">Previous</span>
			</a>
			
		<? endif ?>
		
		<? if($projects->pagination()->hasPrevPage()): ?>
			<a class="prev grid-6 card_big" href="<?= $projects->pagination()->prevPageURL() ?>">
				<span class="va-m d-ib">Next</span>
				<span class="iconic d-ib va-m gutter-left" data-glyph="caret-right"></span>
			</a>
		<? endif ?>

	</nav>
<? endif; ?>