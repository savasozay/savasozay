<section class="content unit w-7-8">
	<article>
		<ul class="content-list">
			<?php foreach ($page->children()->children()->flip()->visible() as $post): ?>
			<li>
				<a href="<?= $post->url() ?>">
					<?= $post->title()->html() ?>
				</a>
			</li>
		<?php endforeach ?>
		</ul>
	</article>
</section>

