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

<!--- con-img --->

<section class="conImg c-main -smt <?php echo esc_attr( $class_name ); ?>">
    <?php
        $conImg = get_field('conImg');
		if( have_rows('conImg') ): while ( have_rows('conImg') ) : the_row();  ?>
            <div class="grid-2 grid-1-l items-c -gap-4-l">
				<div class="conImg__img order2 order1-l">
					<img class="blur-1" src="<?php echo aq_resize( $conImg['img']['url'], 700, true ); ?>" alt="<?php echo esc_attr( $conImg['img']['alt'] ); ?>" />
				</div>
                <div class="order1 order2-l -mr-10 -mr-0-l">
                    <h2 class="blur-2"><?php echo ( $conImg['header'] ); ?></h2>
					<div class="blur-3"><?php echo ( $conImg['txt'] ); ?></div>

					<?php if( $conImg['btn'] ): ?> 
						<div class="main-btn blur-4 -mt-3"><a href="<?php echo esc_url( $conImg['btn']['url'] ); ?>"><?php echo esc_html( $conImg['btn']['title'] ); ?></a></div>
					<?php endif; ?>

                </div> 
            </div>
    <?php endwhile; endif; ?>
</section>
 
