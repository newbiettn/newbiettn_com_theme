<?php
get_header ();
?>


<!-- Main Page Content and Sidebar -->
<div class="row">
	<div class="two columns">
	</div>
	<div class="content-container eight columns">
		<!-- Post -->
		<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
		<?php

		if (! get_post_format ()) {
			$format = 'standard';
		} else {
			$format = get_post_format ();
		}
		?>  	
       
       <div class="row article-container">
			<div class="twelve columns">
				<div class="row border-top-normal">
						<article>
							<div <?php post_class(); ?>>
								<header class="post_title">
									<div class="row">
										<div class="one columns">
											<time class="dateline" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
										</div>
										<div class="eleven columns">
											<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
										</div>
									</div>
								</header>
								

      <?php
		get_template_part ( 'format', esc_attr ( $format ) );
		?> 

      <div class="row">
									<div class="maincontent">
										<div class="twelve columns">
      <?php
		$content_or_excerpt = get_theme_mod ( 'content_or_excerpt' );
		if ($content_or_excerpt == 'content') {
			the_content ();
		} else {
			the_excerpt ();
			?>
      <div class="more">
												<a href="<?php the_permalink(); ?>"
													title="<?php the_title(); ?>"><?php echo get_theme_mod( 'read_more' ); ?></a>
											</div>
      <?php } ?>
      

      </div>
									</div>
								</div>
							</div>
						</article>
				</div>

			</div>
		</div>
           <?php endwhile;?>
         <!-- End Post -->
		<div class="row paging collapse">
			<div class="row article-container">
<?php if(function_exists('wp_pagenavi')) {?>
<?php wp_pagenavi(); ?>  
<?php } else {  ?>
   
     <div class="six columns navigation">
					<div class="moreprevious"><?php next_posts_link(__('&larr; Older Entries', 'aude')) ?></div>
				</div>
				<div class="six columns navigation">
					<div class="morenext"><?php previous_posts_link(__('Newer Entries &rarr;', 'aude')) ?></div>
				</div>
<?php } ?> 
</div>
		</div>   

  <?php } else { ?> 
<p><?php _e('Sorry, no posts matched your criteria.','aude'); ?></p>
<?php } ?>      
  </div>

	<!-- SIDEBAR -->
<?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>