<!-- Footer -->

  <footer class="row">
    <div class="twelve columns">
      <hr />
      <div class="row">
        <div class="twelve columns">
          <p class="text-center"><?php echo get_theme_mod( 'footer_text' );  ?> | &copy; All Rights Reserved </p>
        </div>
      </div>
    </div>
  </footer>

  <?php if (get_theme_mod( 'google_analytics' )) { 
 echo get_theme_mod( 'google_analytics' );       
 } ?>
<?php wp_footer(); ?>
</body>
<script>
// 	$(window).load(function(){
// 		$('.content-container').infinitescroll({
// 			navSelector  : "div.navigation",            
// 	        // selector for the paged navigation (it will be hidden)
// 			nextSelector : "div.moreprevious a:first",    
// 	        // selector for the NEXT link (to page 2)
// 			itemSelector : "div.content-container div.article-container"          
// 	        // selector for all items you'll retrieve
// 		});
// 	});
// 	window.onload = function() {
// 		// Because the <code>wp_localize_script</code> method makes everything a string
// 			infinite_scroll = jQuery.parseJSON(infinite_scroll);
// 			jQuery( infinite_scroll.contentSelector ).infinitescroll( infinite_scroll, function(newElements, data, url) { eval(infinite_scroll.callback); });
// 		};
 </script>
</html>

  <!-- End Footer -->