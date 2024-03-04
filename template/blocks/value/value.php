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

?>

<!--- value --->

<section <?php echo $anchor; ?> class="<?php echo esc_attr( $class_name ); ?> value c-main -mt-10">
    <div class="grid-4 -gap-3 -mt-5 grid-2-m grid-1-s">
        <?php while(have_rows('value')) : the_row();
            $img = get_sub_field('img');
            $header = get_sub_field('header');
            $txt = get_sub_field('txt');
            ?>
            <div class="value__card bg-white b-border text-center blur -px-2 -py-4">
                <img src="<?php echo esc_html( $img ); ?>" />
                <h6 class="-mt-1"><?php echo esc_html( $header ); ?></h6>
				<p class="-mt-1"><?php echo esc_html( $txt ); ?></p>
            </div>
        <?php endwhile; ?> 
    </div>
</section>
 

