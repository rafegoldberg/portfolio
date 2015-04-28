<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width,initial-scale=1.0">

	<title><?= $site->title()->html() ?> | <?= $page->title()->html() ?></title>

	<meta name="description" content="<?= $site->description()->html() ?>">
	<meta name="keywords" content="<?= $site->keywords()->html() ?>">

	<?= css('assets/css/main.css') ?>

	<? if (isset($css)): ?>
		<? foreach (explode(' ',$css) as $sheet) : ?>
			<?= css("assets/css/$css.css") ?>
		<? endforeach ?>
	<? endif ?>

</head>
<body class='grid<?= isset($body)?" $body":''  ?>'>