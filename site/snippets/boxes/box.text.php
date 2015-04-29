<? if (isset($content)) : ?>
	<div class="box--content--text <?=isset($class)?$class:''?>">
		<?=kirbytext($content)?>
	</div>
<? endif ?>