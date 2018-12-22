<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _s
 */
?>

	</div><!-- #content -->

	<footer id="colophon" role="contentinfo">
		
		<div id="site-generator">
			<div class="footer-column-right">
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			</div>
			<div class="footer-content">
				<div class="footer-column">
					<h2>Sitemap</h2>
					<ul>
						<li>&nbsp;</li>
						<li><a class="footer-link" href="http://williamgill.de" title="William Gill - Home">Home</a></li>
						<li><a class="footer-link" href="http://williamgill.de/about" title="William Gill - About">About</a></li>
						<li><a class="footer-link" href="http://williamgill.de/wills-blog" title="William Gill - Blog">Blog</a></li>
					</ul>
				</div>
				
				<div class="footer-column">
					<h2>Connect</h2>
					<ul>
						<li>&nbsp;</li>
						<li><a class="footer-link" href="http://de.linkedin.com/in/williamgill" title="William Gill on LinkedIn">LinkedIn</a></li>
						<li><a class="footer-link" href="http://www.facebook.com/willgill83" title="William Gill on Facebook">Facebook</a></li>
						<li><a class="footer-link" href="https://twitter.com/williamgill" title="William Gill on Twitter">Twitter</a></li>
						<li><a class="footer-link" href="http://instagram.com/willgill83" title="William Gill on Instagram">Instagram</a></li>
					</ul>
				</div>
				
				
				<br class="clear" />
			</div>
			<hr />
			
			
			<div class="footer-bottom">
				<?php do_action( 'toolbox_credits' ); ?>
				© Copyright 2017 William Gill. Site design and development by William Gill.
				<span class="sep"> | </span>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'toolbox' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'toolbox' ); ?>" rel="generator"><?php printf( __( 'Powered by %s', 'toolbox' ), 'WordPress' ); ?></a>.
			</div>	

		<br class="clear" />
		</div><!-- #site-generator -->
	</footer><!-- #colophon -->
</div><!-- #page -->


<?php wp_footer(); ?>

</body>
</html>