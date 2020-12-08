<!DOCTYPE html>
<html lang="en">

	<head>

		<title>Default Page - <?=App\Base\Portal::receive('title') ?></title>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">

		<link rel="stylesheet" href="/themes/default/assets/css/bulma-0.7.2/css/bulma.min.css">

		<?=App\Base\Portal::receive('css') ?>

		<?=App\Base\Portal::receive('head') ?>

	</head>

	<body>

		<?=App\Base\Component::render('navigation') ?>

		<?=App\Base\Portal::receive('main') ?>

		<?=App\Base\Component::render('footer', ['text' => 'Copyright 2019']) ?>

		<script src="/themes/default/assets/js/app.js"></script>

		<?=App\Base\Portal::receive('js') ?>

	</body>

</html>
