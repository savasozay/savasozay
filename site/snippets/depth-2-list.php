<section class="content unit w-7-8">
	<?php foreach ($page->children()->visible()->flip() as $post): ?>
	<article>
		<h1><a href="<?= $post->url() ?>"><?= $post->title() ?></a></h1>

		<?php echo $post->text()->kirbytext() ?>

	</article>

	<?php endforeach ?>
</section>

