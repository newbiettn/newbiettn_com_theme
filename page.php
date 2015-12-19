<?php
get_header ();
?>

<div class="row">

		<!-- POSTS LOOP -->
<?php if ( have_posts() ) { while ( have_posts() ) : the_post(); ?>
			<div class="two columns"></div>
			<div class="eight columns">
				<div class="row">
				<div class="twelve columns">
				<div class="row border-top-normal">
				<article>
					<div <?php post_class(); ?>>
						<h2 class="post_title">
							<span><?php the_title(); ?></span>
						</h2> 
						<?php if ( has_post_thumbnail() ) { ?>     
						<div class="featuredimage"><?php the_post_thumbnail( 'large' ); ?></div>
						<?php } ?>   
						<?php the_content ();
				wp_link_pages ( 'before=<div id="postpaging">Pages:&after=</div>&pagelink=%' );
		?>
					</div>
				</article>
				</div>
				</div>
				</div>
			</div>
<?php endwhile; }?>
	<!-- SIDEBAR -->
<?php get_sidebar(); ?>

</div>

</div>

<?php get_footer(); ?>