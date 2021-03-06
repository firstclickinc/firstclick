<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

	<div class="wrapper" id="wrapper-footer">
		<div class="<?php echo esc_html( $container ); ?>">
			<div class="row">
				<div class="col-md-12">
					<footer class="site-footer" id="colophon">
						<div class="site-info">
							&copy; <?php echo date( 'Y' ) . ' ' . get_bloginfo( 'name' ); ?> | Web Development by <a href="https://www.firstclickinc.com/" rel="nofollow" target="_blank">First Click, Inc.</a>
						</div><!-- /.site-info -->
					</footer><!-- /#colophon -->
				</div><!-- /.col -->
			</div><!-- /.row -->
		</div><!-- /.<?php echo esc_html( $container ); ?> -->
	</div><!-- /#wrapper-footer -->
</div><!-- #page -->
<?php wp_footer(); ?>

</body>
</html>
