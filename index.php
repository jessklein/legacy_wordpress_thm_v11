<?php get_header(); ?>
	
	<?php if(!is_paged()) { ?>



	<?php } ?>

	<div id="bottom" class="clearfloat">
		
	<div id="front-list">	
	
	<?php
      $page = (get_query_var('paged')) ? get_query_var('paged') : 1;
      query_posts("cat=-9,-15&paged=$page&posts_per_page=10"); ?>
	
	<?php while (have_posts()) : the_post(); ?>		

	<div class="clearfloat">
	<div class="title"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></div>
	<div class="meta">Posted by <strong><?php if (function_exists('author_exposed')){author_exposed();} ?></strong> | <?php the_time('j M Y') ?> | <?php the_category(', '); ?> | <?php comments_popup_link('No Comments', 'One Comment', '% Comments');?></div>	
	
	<div class="spoiler">
	<?php	$values = get_post_custom_values("Image");
	if (isset($values[0])) { ?>
      <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>">
	<img src="<?php echo bloginfo('template_url'); ?>/scripts/timthumb.php?src=<?php echo get_option('home'); ?>/<?php
$values = get_post_custom_values("Image"); echo $values[0]; ?>&w=150&h=150&zc=1&q=100"
alt="<?php the_title(); ?>" class="left" width="150px" height="150px"  /></a>
      <?php } ?>

	<?php the_content(''.__('<p>Continue Reading &rarr;</p>').''); ?>
	</div>

	</div>
		
      <?php endwhile; ?>

	<div class="navigation">
		<?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } 
			else { ?>

			<div class="right"><?php next_posts_link('Next Page &raquo;') ?></div>
			<div class="left"><?php previous_posts_link('&laquo; Previous Page') ?></div>
			<?php } ?>

	</div>
	
	</div>
		

	<?php get_sidebar(); ?>

	</div>	

<?php get_footer(); ?>
