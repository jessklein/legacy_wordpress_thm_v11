</div>  

<div id="front-popular" class="clearfloat">

<div id="recentpost" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(5) ) : ?> 		
<?php endif; ?></div> 		

<div id="mostcommented" class="clearfloat">
<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(6) ) : ?> 
<?php endif; ?>
</div>

<div id="recent_comments" class="clearfloat">
<?php if (function_exists('get_most_viewed')): ?>
<?php endif; ?>

<?php 	/* Widgetized sidebar, if you have the plugin installed. */ 					if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar(7) ) : ?> 
<?php endif; ?>
</div>
</div>

<div id="footer"> <?php wp_footer(); ?> Powered by <a href="http://wordpress.org/">WordPress</a> | <?php if ( is_user_logged_in() ) { ?> <?php wp_register('', ''); ?> | <?php } ?> <?php wp_loginout(); ?> | <a href="<?php bloginfo('rss2_url'); ?>">Entries (RSS)</a> | <a href="<?php bloginfo('comments_rss2_url'); ?>">Comments (RSS)</a> | <span xmlns:dc="http://purl.org/dc/elements/1.1/" property="dc:title">The Hunter's Mark</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="http://www.thehuntersmark.net/" property="cc:attributionName" rel="cc:attributionURL">Lassirra</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by-nc-nd/3.0/us/">Creative Commons Attribution-Noncommercial-No Derivative Works 3.0 United States License</a>.

<!-- <?php echo get_num_queries(); ?> queries. <?php timer_stop(1); ?> seconds. -->

</div>

</body>
</html>