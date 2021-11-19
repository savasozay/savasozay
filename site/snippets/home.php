<section class="home">
	<?php foreach ($page->children()->flip()->visible() as $post): ?>
	<article>
		<?php echo $post->text()->kirbytext() ?>
	</article>

	<?php endforeach ?>
</section>



