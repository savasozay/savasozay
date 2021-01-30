<section class="content unit w-7-8">
	<article>
		<h1><?= $page->title()->html() ?></h1>
		<h2><?php echo $page->details()->html() ?></h2>


		<?php echo $page->text()->kirbytext() ?>
	</article>
</section>