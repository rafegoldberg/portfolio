<footer id="footer" role="contentinfo" class="<?=isset($class)?$class:''?>">
	<? if (!isset($social)) : ?> 
		<?= $site->copyright()->kirbytext() ?>
	<? else: ?>
		<small class="grid-3"><?= $site->copyright()->kirbytext() ?></small>
		<small class="d-b ta-right" style="opacity:.375;">
			<? snippet('social',array('wrap'=>'grid-9 list_sep-slash')) ?>
		</small>
	<? endif ?>
</footer>