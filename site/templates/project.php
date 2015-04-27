<? snippet('top') ?>
<? snippet('header') ?>

	<main class="main" role="main">

		<header class="header">
			<h1><?= $page->title()->html() ?></h1>
			<small>for <?= $page->client() ?></small>
		</header>

		<ul class="meta cf">
			<li><b>Year:</b> <time datetime="<?= $page->date('c') ?>"><?= $page->year() ?></time></li>
			<li><b>Tags:</b> <?= $page->tags()->list('inline sep-slash') ?></li>
		</ul>

		<div class="text">
			<?= $page->text()->kirbytext() ?>

			<? foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
				<figure>
					<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>">
				</figure>
			<? endforeach ?>
		</div>

		<nav class="nextprev cf" role="navigation">
			<? if($prev = $page->prevVisible()): ?>
				<a class="prev" href="<?= $prev->url() ?>">&larr; previous</a>
			<? endif ?>
			<? if($next = $page->nextVisible()): ?>
				<a class="next" href="<?= $next->url() ?>">next &rarr;</a>
			<? endif ?>
		</nav>

	</main>

<? snippet('footer') ?>
<? snippet('bottom') ?>