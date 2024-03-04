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

<!--- carousel --->

<section <?php echo $anchor; ?> class="carousel -smt <?php echo esc_attr( $class_name ); ?>">
    <div class="carousel__wrapper blur" data-flickity='{ "wrapAround": true, "autoPlay": true, "pageDots": false }'>
        <?php while(have_rows('carousel')) : the_row();
            $icon = get_sub_field('icon');
            $header = get_sub_field('header');
            $txt = get_sub_field('txt');
            ?>

            <div class="carousel__cell">
                <img src="<?php echo esc_html( $icon ); ?>" />
                <h4 class="d-block fs-42 -mt-4"><?php echo esc_html( $header ); ?></h4>
                <p class="-mt-3"><?php echo esc_html( $txt ); ?></p>
            </div>
        <?php endwhile; ?> 
    </div>
</section>