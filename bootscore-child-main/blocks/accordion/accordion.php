<?php
/**
 * Testimonial Block Template.
 *
 * @param   array $block The block settings and attributes.
 * @param   string $content The block inner HTML (empty).
 * @param   bool $is_preview True during backend preview render.
 * @param   int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param   array $context The context provided to the block by the post or it's parent block.
 */

// Anchor
$anchor = '';
if ( ! empty( $block['anchor'] ) ) {
    $anchor = 'id="' . esc_attr( $block['anchor'] ) . '" ';
}

// Class
$class_name = '';
if ( ! empty( $block['className'] ) ) {
    $class_name .= ' ' . $block['className'];
}
$align = '';
if ( ! empty( $block['align'] ) ) {
    $align .= ' align' . $block['align'];
}

?>

<!--- accordion --->

<section class="c-main -smt <?php echo esc_attr( $class_name ); ?>">
	<?php if( get_field('heading')): ?> 
		<h2 class="-pb-3 blur"><?php the_field('heading'); ?></h2>
	<?php endif; ?>	

	<?php while ( have_rows( 'accordion' ) ) : the_row();
		$header = get_sub_field( 'header' );
		$txt = get_sub_field( 'txt' );
	?>

	<div class="accordion-wrapper">     
		<div class="accordion blur">
			<input class="acc-check" type="radio" name="radio-a" id="check<?php echo get_row_index(); ?>">
			<label class="accordion-label" for="check<?php echo get_row_index(); ?>"><?php echo esc_html( $header ); ?></label>
			<div class="accordion-content">
				<p class="" ><?php echo ( $txt ); ?></p>
			</div>
		</div>
	</div> 
	<?php endwhile; ?> 
</section>