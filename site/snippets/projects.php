<h2>Latest projects</h2>

<ul class="teaser cf">
	<? foreach(page('projects')->children()->visible()->limit(3) as $project): ?>
	<li>
		<h3>
			<a href="<?= $project->url() ?>"><?= $project->title()->html() ?></a>
		</h3>
		<p>
			<?= $project->text()->excerpt(80) ?>
			<a href="<?= $project->url() ?>">read&nbsp;more&nbsp;→</a>
		</p>
		<? if($image = $project->images()->sortBy('sort', 'asc')->first()) : ?>
			<a href="<?= $project->url() ?>">
				<img src="<?= $image->url() ?>" alt="<?= $project->title()->html() ?>" >
			</a>
		<? endif ?>
	</li>
	<? endforeach ?>
</ul>
