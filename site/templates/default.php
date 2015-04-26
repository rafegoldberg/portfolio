<? snippet('top') ?>

	<header>
		<? snippet('menu') ?> 
	</header>

  <main role="main">

    <?=$page->text()->kirbytext() ?>

  </main>

	<? snippet('footer') ?>

<? snippet('bottom') ?>