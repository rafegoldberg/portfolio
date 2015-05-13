<?snippet('top',array(
	"css"  => 'client-single',
	'body' => 'grid parent grid-12',
))?>

<?snippet('sidebar.client')?>
<main>
	<div class="grid-12 markdownWrap">
		<section class="markdown markdown_block centered">
			<?=$page->text()->kirbytext()?>
		</section>
	</div>
</main>

<?snippet('bottom')?>