<?php 
	$term = get_term_by('slug',get_query_var('term'),get_query_var('taxonomy') );
	echo ('<h1>Tous les travaux dans :'.$term->name.'</h1>');
?>


<?php if(have_posts() ): ?>
			<?php while(have_posts() ):the_post(); ?>
			
			<h2><?php the_terms($post->ID,'techniques','classé dans : ','','.'); ?></h2>
			<h2><?php the_content(); ?></h2>
			
			
			<?php endwhile ?>
		<?php endif ?>	
	

		
		

