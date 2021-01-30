<?php snippet('header') ?>

<section class="row">
	<article class="unit w-4-4">
		<p class="error"><strong>404</strong></p>
		<p class="error">This error message is an HTTP standard response code indicating that the client was able to communicate with a given server, but the server could not find what was requested.
		<br><br><br>
		<a href="<?php echo $site->url() ?>">← Go to root</a>
		</p>

	</article>
</section>


<iframe id="error-video" src="https://www.youtube.com/embed/qDrDUmuUBTo?autoplay=1&showinfo=0&controls=0&iv_load_policy=3" frameborder="0" allowfullscreen></iframe>
<?php snippet('footer') ?>