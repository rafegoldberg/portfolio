<ul class="<?= $layout=='slider' ? 'slide--wrap' : '' ?>">
	<? foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
		<li class="<?= $layout=='slider' ? 'slide' : '' ?>">

			<a href="<?= $project->url() ?>" class="<?= $items ?>" style="display:block;">
				<div><strong><?= $project->title()->html() ?></strong></div>
				<small><?= $project->category()->html() ?> <em>for</em> <?= $project->client() ?></small>
			</a>

		</li>
	<? endforeach ?>
</ul>