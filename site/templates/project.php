<? snippet('top',array(
	'css'=> 'home',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar.project') ?>
	<main class="clearfix prefix-desktop-3 prefix-tablet-6 gutter-left">

		<? foreach($page->images()->sortBy('sort', 'asc') as $img): ?>
			<? if ( $img!==$page->file($page->bgi()) ) : ?>
				<img src="<?= $img->url() ?>">
			<? endif ?>
		<? endforeach ?>

		<nav class="grid-12 parent nextprev cf block-center-solo ta-center" role="navigation">
			<? if($prev = $page->prevVisible()): ?>
				<a class="prev grid-6 card_huge" href="<?= $prev->url() ?>">&larr; previous</a>
			<? endif ?>
			<? if($next = $page->nextVisible()): ?>
				<a class="next grid-6 card_huge" href="<?= $next->url() ?>">next &rarr;</a>
			<? endif ?>
		</nav>

	</main>

<? snippet('bottom') ?>