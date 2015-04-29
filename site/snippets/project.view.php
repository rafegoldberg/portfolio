<div id="project-view">

<? foreach($page->images()->sortBy('sort', 'asc') as $img): ?>
	<? if ( $img!==$page->file($page->bgi()) ) : // ignore featured proj image ?>

		<?=$img->caption_text()->renderAround($img)?>

	<? endif ?>
<? endforeach ?>

	<style>
	#project-view {
		background-color: <?=$page->bg_color()?>;
		color: <?=$page->fg_color()?>;
		width: 100% !important;
	}	
	</style>
</div>