<?snippet('top',array(
	'body' => 'grid parent grid-12',
))?>

	<?snippet('sidebar.doc',array('grid'=>3))?>
	<main class="grid-9 parent clearfix">
		<div class="markdownWrap">
			<section class="markdown markdown_block legible-block centered">
				<h2><?=$page->title()->html()?></h2>
				<?= $page->text()->kirbytext() ?>
			</section>
		</div>
	</main>

<?snippet('bottom')?>