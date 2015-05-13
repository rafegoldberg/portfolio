
<?#=PARSE VARS
$parent = $page->parent() #get parent
?>

<aside id="sidebar" class="soft--links <?= isset($grid)?"grid-$grid":'' ?>">
	<? snippet('menu',array('layout'=>'list_sep-slash')) ?>
	<section id="sidebar-main" class='cms-text cms-text_pad-edges'>
		<header class="card_huge ta-center">
			<?=brick('img',false,array('src'=>$parent->file($parent->logo())->url()))?>
			<h1><?=$page->title()->html()?></h1>
		</header>
		<hr>
		<div class="d-b ta-center" style="color:#999">
			<a href="<?=$page->parent()->url()?>" class="button">
				<small class="d-inline-block va-middle iconic" data-glyph="arrow-right-angle-thick-bottom-left-fill"></small>
				<small class="d-inline-block va-middle ">Back to <strong><?=$page->parent()->title()->html()?></strong></small>
			</a>
			<!--
			<aside>
				<ul class="list list_inline">
					<li>
						<?#PARSE VARS
						$mod = strtotime($page->modified());
						?>
						<span class="d-ib va-middle iconic iconic-sz-s iconic-s tooltip" title="Modified" data-glyph="clock"></span>
						<span class="d-ib va-middle"><?=date("F j",$mod)?></span>
					</li>
					<li>
						<span class="d-ib va-middle iconic iconic-sz-s iconic-s tooltip" title='Document Status' data-glyph="lock-locked"></span>
						<span class="d-ib va-middle">
							<?=$page->status()->html()?>
						</span>
					</li>
				</ul>
			</aside>
			|-->
		</div>
	</section>
	<? snippet('footer',array('class'=>'d-n-mobile d-n-tablet')) ?>
</aside>