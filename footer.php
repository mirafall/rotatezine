<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>
<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	
			</div><!-- .row -->
		</div><!-- .container -->

	</div><!-- #content -->
    <?php get_template_part( 'footer-widget' ); ?>
	<footer id="colophon" class="site-footer <?php echo wp_bootstrap_starter_bg_class(); ?>" role="contentinfo">
		<div class="container pt-3 pb-3">
			<div class="row">
				<div class="site-info col-lg-6 col-sm-12">
					&copy; <?php echo date('Y'); ?> <?php echo '<a href="'.home_url().'">'.get_bloginfo('name').'</a>'; ?>
					<span class="sep"> | </span>
					<a class="credits" href="https://afterimagedesigns.com/wp-bootstrap-starter/" target="_blank" title="WordPress Technical Support" alt="Bootstrap WordPress Theme"><?php echo esc_html__('Bootstrap WordPress Theme','wp-bootstrap-starter'); ?></a>

            </div><!-- close .site-info -->

			<div class="col-lg-6 col-sm-12">
			
					<?php if ( function_exists('cn_social_icon') ) echo cn_social_icon(); ?>
					</div>
		</div>
	</footer><!-- #colophon -->

<?php endif; ?>
</div><!-- #page -->

<?php wp_footer(); ?>

<?php if(!is_page_template('page-templates/template-home.php')){ ?>
			</div><!-- .row -->
		</div><!-- .container -->

		<?php } ?>
          


</body>
</html>