<?php
/**
 * Template Name: Main
 *
 * 
 *
 * 
 *
 * @package  wordpress-team-site
 */

?>

<?php get_header(); ?>
<!-- Laoding in header  -->

<?php get_template_part('template-parts/banner')?> 
<!-- Loading in Banner Section -->

<?php get_template_part('template-parts/mission')?> 
<!-- Loading in Mission Statement Section  -->

<?php get_template_part('template-parts/projects')?> 
<!-- Loading in Projects Section -->

<?php get_template_part('template-parts/team')?> 
<!-- Loading in Team Memebers Section  -->

<?php get_template_part('template-parts/about')?> 
<!-- Loading in About Section -->

<?php get_template_part('template-parts/contact')?> 
<!-- Loading in Contact Section -->

<?php get_template_part('template-parts/acknowledgements')?> 
<!-- Loading in Acknowledgements Section -->

<?php get_footer(); ?>
<!-- Loading in Footer -->