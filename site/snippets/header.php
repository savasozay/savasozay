<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php echo $site->description()->html() ?>">

	<?php if($page->isHomepage()): ?>
		<title><?php echo $site->title()->html(); ?></title>
	<?php else: ?>
		<title><?php echo $site->title()->html(); ?> — <?php echo $page->title()->html() ?></title>
	<?php endif ?>

	<title><?php echo $site->title()->html() ?></title>
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<link rel="shortcut icon" href="<?php echo $site->url() ?>/assets/images/favicon.ico" />

	<?php echo css('assets/css/main.css') ?>




</head>
<body class="row">

	<header class="unit w-1-8">
		<nav>
			<h1><a href="<?php echo $site->url() ?>">Savas Ozay</a></h1>
			<?php snippet('treemenu') ?>
		</nav>
	</header>
