<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<? snippet('meta.test') ?>	
	<?= css('assets/css/main.css') ?>

	<? if (isset($css)): ?>
		<? foreach (explode(' ',$css) as $sheet) : ?>
			<?= css("assets/css/$css.css") ?>
		<? endforeach ?>
	<? endif ?>

</head>
<body class='grid<?= isset($body)?" $body":''  ?>'>