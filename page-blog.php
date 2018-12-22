<?php
/**
 * Template Name: Blog posts page
 * Description: The main williamgill.de blog page
 *
 * @package Toolbox
 * @since Toolbox 0.1
 */


get_header(); ?>
	<div id="primary">
	<?php

	//$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	
	
	//this is needed to correctly retrieve the paged value from the URL.
	//for some reason the standard wordpress function wasn't retrieving it properly.
	parse_str($_SERVER['QUERY_STRING']);
	
	query_posts(array(
		'post_type'      => 'post', // You can add a custom post type if you like
		'paged'          => $paged,
		'posts_per_page' => 10
	));
	
	if ( have_posts() ) : ?>
	
	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part( 'content', get_post_format() ); ?>
	
	<?php endwhile; ?>
	
		<?php my_pagination(); ?>
	
	<?php else : ?>
	
	        <?php // no posts found message goes here ?>
		
	<?php endif; ?>
	</div> 
<?php get_footer(); ?>