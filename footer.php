<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package  wordpress-team-site
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="footer-container">
			<!-- input code for footer -->
			<?php
            wp_nav_menu(array(
                'menu' => 'Nav Menu',
                'theme_location' => 'footer-menu',
                'menu_class' => 'footer-menu',
                'menu_id' => 'footer-id'
            ))
        	?>
		</div>

		<div class="social-media">
			
				<a href="https://github.com/WordPress-Team">
					<i class="fa-brands fa-github fa-2x"aria-label="github"></i>
				</a>

				<a href="mailto:impactzonedevelopment@gmail.com" target="_blank">
					<i class="fa-solid fa-envelope fa-2x"aria-label="email"></i>
				</a>

				<a href="">
					<i class="fa-brands fa-linkedin fa-2x"aria-label="linkedin"></i>
				</a>
		</div>

		<p class="design-developed"><?php the_field('designed_and_built_1') ?> <br><span class="footer-impactzone"><?php the_field('impact_span') ?> </span> <?php the_field('designed_and_built_2') ?> </p>
		<!-- <p class="members">MEMBERS: KYLE W., DANU V., & GRACE B.</p> -->
		
		<p class="copywright">&#169; Impact Zone</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="js/slider.js"></script>
</body>
</html>
