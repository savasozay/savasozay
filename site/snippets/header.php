<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<meta name="description" content="<?php echo $site->description()->html() ?>">

	<?php if($page->isHomepage()): ?>
		<title><?php echo $site->title()->html(); ?></title>
	<?php else: ?>
		<title><?php echo $site->title()->html(); ?> / <?php echo $page->title()->html() ?></title>
	<?php endif ?>

	<title><?php echo $site->title()->html() ?></title>
	<meta name="ROBOTS" content="INDEX,FOLLOW">
	<link rel="icon" type="image/png" href="<?php echo $site->url() ?>/assets/images/favicon.png" />

	<?php echo css('assets/css/main.css') ?>

	

</head>
<body>


<header class="row">
<?php $items = $pages->visible(); ?>

	<nav class="unit w-2-4">	
		<ul>
			<?php foreach($items as $item): ?>
				<li><a<?php e($item->isOpen(), ' class="active"') ?> href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
				</li>
			<?php endforeach ?>
		</ul>
	</nav>

		<h1 class="unit w-2-4 logo">
			<a href="<?= url() ?>">Savas Ozay</a>
		</h1>
</header>



	


