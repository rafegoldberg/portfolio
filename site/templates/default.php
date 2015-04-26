<? snippet('top') ?>
<? snippet('header'); ?>

  <main role="main">

    <h1><?= $page->title()->html() ?></h1>
    <section>
    	<?= $page->text()->kirbytext() ?>
	</section>

  </main>

<? snippet('footer') ?>
<? snippet('bottom') ?>