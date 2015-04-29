
<?# PARSE VARS
$classes = array_merge(
	isset($class)?explode(' ',$class):array(),
	get_stately_classes(explode(' ',$grid)) );
?>

<div class="box <?=implode(' ',$classes)?>">
	<?= isset($link) ? "<a href='$link'>" : '' ?>
	<? foreach ($boxes as $box => $args) : ?>
		<div class="box--content <?="box_$box"?>">
			<? snippet( "boxes/box.$box", isset($args)?$args:array() ); ?>
		</div>
	<? endforeach ?>
	<?= isset($link) ? "</a>" : '' ?>
</div>