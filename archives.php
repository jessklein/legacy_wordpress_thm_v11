<?php
/*
Template Name: Archives Page
*/
?>
<?php get_header(); ?>
	
	<?php if(!is_paged()) { ?>



	<?php } ?>

	<div id="bottom" class="clearfloat">
		
	<div id="front-list">	
	
	<ul><li><h2>Archives</h2>
<ul>
<?php
$years = $wpdb->get_col("SELECT DISTINCT YEAR(post_date) FROM $wpdb->posts WHERE post_status = 'publish' AND post_type = 'post' ORDER BY post_date DESC");
foreach($years as $year) : 
?>
<li><a href="<?php echo get_year_link($year); ?> "><?php echo $year; ?></a></li>
<?php endforeach; ?>
</ul>
</li></ul>

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
