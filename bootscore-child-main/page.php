<?php

/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootscore
 */

get_header();
?>

<div id="content" class="site-content container mt-4 -pb-0">
<div id="primary" class="content-area">

<!-- Hook to add something nice -->
<?php bs_after_primary(); ?>

<main id="main" class="site-main <?php the_field('main_class'); ?>">

	<div class="bread blurIn">
		<?php the_breadcrumb(); ?>
	</div>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<footer class="entry-footer">
		<?php comments_template(); ?>
	</footer>

</main>

</div>
</div>

<?php
get_footer();
