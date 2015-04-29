<? if (isset($content)) : ?>
	<?# PARSE VARS
	$tag = isset($tag)?$tag:'h1';
	?>
	<<?=$tag?> class="box--content--headline <?=isset($class)?$class:''?>">
		<?=$content?>
	</<?=$tag?>>
<? endif ?>