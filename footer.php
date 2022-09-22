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
			<i class="fa-brands fa-github fa-2x"aria-label="github"></i>
			<i class="fa-solid fa-envelope fa-2x"aria-label="github"></i>
			<i class="fa-brands fa-linkedin fa-2x"aria-label="github"></i>
		</div>

		<p class="design-developed">Designed & Developed by <br><span class="footer-impactzone">Impact Zone</span> members: <br> Kyle W. , Danu V. , & Grace B.</p>
		<!-- <p class="members">MEMBERS: KYLE W., DANU V., & GRACE B.</p> -->
		
		<p class="copywright">&#169; Impact Zone</p>

	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script src="js/slider.js"></script>
</body>
</html>
