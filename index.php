<?php get_header(); ?>

		<?php $page_data = get_page($_GET['page_id']); ?>
		<?php echo $page_data->post_content; ?>

		<figure id="image">
			<img src="images/photoCV.png" title="Ma photo" alt="photo de moi" height="331" width="300"/>
		</figure>
		<section id="contenu" class="accueil">
			<p>Hello, my name is <span>Xavier Bekaert.</span></p>
			<p>I'm a Web Designer &&nbsp;Developer.</p>
		</section>
<?php get_footer(); ?>

