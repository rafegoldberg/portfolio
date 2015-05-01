<? snippet('top',array(
	'css'=> 'project',
	'body' => 'grid parent grid-12',
)) ?>

	<? snippet('sidebar.project') ?>
	<main class="clearfix prefix-desktop-3 prefix-tablet-6 gutter-left">

		<? snippet('project.view') ?>

		<nav class="grid-12 parent nextprev cf block-center-solo ta-center soft--links" role="navigation" style="background-color:<?=$page->fg_color()?>;color:<?=$page->bg_color()?>;">
			<? if($next = $page->nextVisible()): ?>
				<a class="next grid-6 card_big" href="<?= $next->url() ?>">
					<span class="iconic d-ib va-m gutter-right" data-glyph="caret-left"></span>
					<span class="va-m d-ib">Prior Project</span>
				</a>
			<? endif ?>
			<? if($prev = $page->prevVisible()): ?>
				<a class="prev grid-6 card_big" href="<?= $prev->url() ?>">
					<span class="va-m d-ib">Next Project</span>
					<span class="iconic d-ib va-m gutter-left" data-glyph="caret-right"></span>
				</a>
			<? endif ?>
		</nav>

	</main>

<? snippet('bottom') ?>