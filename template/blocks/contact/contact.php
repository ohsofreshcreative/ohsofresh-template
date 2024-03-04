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

<!--- contact --->

<section class="c-main contact -mt-5 <?php echo esc_attr( $class_name ); ?>">
    <?php
        $contact = get_field('contact');
		if( have_rows('contact') ): while ( have_rows('contact') ) : the_row();  ?>
            <div class="grid-2 grid-1-l -gap-10-l">
				<div class="contact__data">
					<h3 class="blur"><?php echo ( $contact['header'] ); ?></h3>
					<div class="blur -mt-2"><?php echo ( $contact['txt'] ); ?></div>
					<p class="phone blur -mt-1"><a href="tel:<?php echo ( $contact['phone'] ); ?>"><?php echo ( $contact['phone'] ); ?></a></p>
					<p class="mail blur -mt-1"><a href="mailto:<?php echo ( $contact['mail'] ); ?>"><?php echo ( $contact['mail'] ); ?></a></p>
					<p class="address blur -mt-1"><?php echo ( $contact['address'] ); ?></p>
					<div class="main-btn blur -mt-4"><a href="#map">Sprawdź dojazd</a></div>
				</div>
                <div class="contact__form blur">
					<?php the_field('form'); ?>
                </div> 
            </div>
    <?php endwhile; endif; ?>
</section>
 

