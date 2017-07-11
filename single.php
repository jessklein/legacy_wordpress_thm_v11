<?php get_header(); ?>

	<div id="content">
	
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

	<div class="post" id="post-<?php the_ID(); ?>">
	
	<span class="breadcrumbs"><a href="<?php echo get_option('home'); ?>/">Home</a> &raquo; <?php the_category(', ') ?></span>
	
	<h2 class="title"><?php the_title(); ?></h2>
	
	<div id="stats">
		<?php the_time('j F Y') ?> | Posted by <strong><?php if (function_exists('author_exposed')){author_exposed();} ?></strong> | <?php comments_number('No Comments', 'One Comment', '% Comments' );?></div>


	<div class="entry clearfloat">
	
	<?php the_content('Read the rest of this entry &raquo;'); ?>

	<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
	
	<div class="postfoot"><p>If you enjoyed this post, feel free to join the discussion and <a href="#comments">leave a comment</a>. Don't forget to <a href="<?php if($db_feedburner_address) { echo $db_feedburner_address; } else { bloginfo('rss2_url'); } ?>">subscribe to the feed</a> so you never miss an update! You can also <a href="http://technorati.com/faves?sub=addfavbtn&add=http://www.thehuntersmark.net">Fave This Blog</a> on Technorati, or <a href="http://massiveblips.com/post/" onclick="location.href='http://massiveblips.com/post/url/?url='+encodeURIComponent(location.href)+'&title='+encodeURIComponent(document.title);return false;">Vote it Up</a> on MassiveBlips!
    </p></div>	
	
	</div>

	</div>
	
	<div id="comments">
	<?php comments_template(); ?>
	</div>

	<?php endwhile; else: ?>

	<p>Sorry, no posts matched your criteria.</p>

	<?php endif; ?>

	</div>

<?php get_sidebar(); ?>
<?php get_footer(); ?>