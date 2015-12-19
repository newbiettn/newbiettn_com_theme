<?php
get_header ();
?>


<!-- Main Page Content and Sidebar -->


<div class="row">

	<div class="two columns">
	</div>
	<div class="eight columns">
		<!-- Post -->
<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
<?php

		if (! get_post_format ()) {
			$format = 'standard';
		} else {
			$format = get_post_format ();
		}
		?>  
       <div class="row">
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
		
the_content ();
		wp_link_pages ( 'before=<div id="postpaging">Pages:&after=</div>&pagelink=%' );
		if (get_the_tags ()) {
			?>
      <p class="tags"><?php  the_tags('', ' ', ''); ?></p> 
      <?php } ?> 
      
      <div class="prevnext">
												<div class="row">
													<div class="six columns">
       <?php previous_post_link(); ?>
       </div>
													<div class="six columns text-right">
       <?php next_post_link(); ?>
       </div>
												</div>
											</div>
										</div>

									</div>
								</div>

							</div>
						</article>

						<div class="comments">
      <?php comments_template(); ?>
      </div>
				</div>

			</div>
		</div>
           <?php endwhile;?>
         <!-- End Post -->

  <?php } else { ?> 
<p><?php _e('Sorry, no posts matched your criteria.','aude'); ?></p>
<?php } ?> 



  </div>



	<!-- SIDEBAR -->
<?php get_sidebar(); ?>

</div>
<?php get_footer(); ?>