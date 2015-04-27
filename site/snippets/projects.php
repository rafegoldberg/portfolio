<ul class="<?= $layout=='slider' ? 'slide--wrap' : '' ?>">
	<? foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
		<li class="<?= $layout=='slider' ? 'slide' : '' ?>">

			<a href="<?= $project->url() ?>" class="<?= $items ?>" style="display:block;">
				<div><?= $project->title()->html() ?></div>
				<small> <em>for</em> <?= $project->client() ?></small>
			</a>

			<!--
			<p>
				<?= $project->text()->excerpt(80) ?>
				<a href="<?= $project->url() ?>">read&nbsp;more&nbsp;→</a>
			</p>
			|-->
		</li>
	<? endforeach ?>
</ul>