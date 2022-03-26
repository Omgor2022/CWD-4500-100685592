<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Herbal_Beauty
 */

?>

	<footer id="colophon" class="site-footer">
		<?php
		$recipe_args = array(
			'post_types'     => array( 'herbalbeauty_recipe' ),
			'posts_status'   => 'publish',
			'posts_per_page' => 3,
			'orderby'        => 'rand',
			'post_not_in'    => array( get_the_ID() )
		);

		$recipe_query = new WP_Query( $recipe_args );

		if( $recipe_query->have_posts() ) {
			?>
			<div class="grid-container">
				<div class="grid-x grid-margin-x grid-margin-y">
					<?php
					while ( $recipe_query->have_posts() ) {
						$recipe_query->the_posts();
						?>
						<div class="cell small-12 medium-4">
							<?php
							the_post_thumbnail();
							the_title( '<h3>', '</h3>' );
							the_excerpt();
							?>
						</div>
						<?php
					}
					wp_reset_postdata();
					?>
				</div>
			</div>
			<?php } ?>
		
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'herbalbeauty' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'herbalbeauty' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'herbalbeauty' ), 'herbalbeauty', '<a href="http://underscores.me/">Om Gor</a>' );
				?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
