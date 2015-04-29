<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar.project') ?>
	<main class="clearfix prefix-desktop-3 prefix-tablet-6 gutter-left">

		<? foreach($page->images()->sortBy('sort', 'asc') as $image): ?>
			<figure>
				<img src="<?= $image->url() ?>" alt="<?= $page->title()->html() ?>">
			</figure>
		<? endforeach ?>

		<nav class="nextprev cf" role="navigation">
			<? if($prev = $page->prevVisible()): ?>
				<a class="prev" href="<?= $prev->url() ?>">&larr; previous</a>
			<? endif ?>
			<? if($next = $page->nextVisible()): ?>
				<a class="next" href="<?= $next->url() ?>">next &rarr;</a>
			<? endif ?>
		</nav>

	</main>

<? snippet('bottom') ?>