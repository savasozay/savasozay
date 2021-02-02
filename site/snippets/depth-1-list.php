<section class="content unit w-7-8">
	<?php foreach ($page->children()->children()->flip()->visible() as $post): ?>
	<article>
		<h1><a href="<?= $post->url() ?>"><?= $post->title()->html() ?></a></h1>
		<h2><?= $post->details()->html() ?></h2>

		<?php echo $post->text()->kirbytext() ?>

	</article>

	<?php endforeach ?>
</section>



