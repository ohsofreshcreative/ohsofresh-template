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

<!--- gallery --->

<section <?php echo $anchor; ?> class="gallery c-main -smt <?php echo esc_attr( $class_name ); ?> ">
    <div class="gallery__wrapper">
     <?php 
    $images = get_field('gallery');
    if( $images ): ?>
        <div class="grid-4 -gap-5 grid-3-l grid-2-s">
            <?php foreach( $images as $image ): ?>
                
                    <a class="blur" href="<?php echo esc_url($image['url']); ?>">
                        <img src="<?php echo aq_resize( $image['url'], 660, true ); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    </a>
                
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
    </div>
</section>