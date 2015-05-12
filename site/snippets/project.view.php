<div id="project-view">

<? foreach($page->images()->sortBy('sort', 'asc') as $img): ?>
	<? if ( $img!==$page->file($page->bgi()) && $img!==$page->file($page->img_meta()) ) : // ignore featured proj image ?>

		<section>
			<img class="hide" src="<?=$img->url()?>" alt="<?=$page->title()->html()?>">
			<?=$img->caption_text()->renderAround($img)?>
		</section>

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