<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Wordpress_Base_Theme
 */

?>

	<footer id="colophon" class="site-footer sFoot">

		<div class="footTop">

		</div>

		<div class="footBottom textCenter">
			<?php $copyright_text = get_field('copyright_text','option'); if($copyright_text): ?>
				<div class="site-info copyRights font16"><?php echo str_replace('{year}',date('Y'),$copyright_text); ?></div>
			<?php endif; ?>
		</div>

	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
