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

<!--- accordion-img --->

<section class="c-main accImg -smt <?php echo esc_attr( $class_name ); ?>">
    <?php
        $accImg = get_field('accImg');
		if( have_rows('accImg') ): while ( have_rows('accImg') ) : the_row();  ?>
            <div class="grid-2 grid-1-l items-c -gap-4-l">
				<div class="accImg__img order2 order1-l">
					<img class="blur-1" src="<?php echo aq_resize( $accImg['img']['url'], 700, true ); ?>" alt="<?php echo esc_attr( $accImg['img']['alt'] ); ?>" />
				</div>
                <div class="order1 order2-l -mr-10 -mr-0-l">
                    <h2 class="blur-2"><?php echo ( $accImg['header'] ); ?></h2>
					<div class="blur-3"><?php echo ( $accImg['txt'] ); ?></div>

                    <?php while ( have_rows( 'accordion' ) ) : the_row();
                    $header = get_sub_field( 'header' );
                    $txt = get_sub_field( 'txt' );
                    ?>

                    <div class="accordion-wrapper blur-4 -mt-4">     
                        <div class="accordion">
                        <input class="acc-check" type="radio" name="radio-a" id="check<?php echo get_row_index(); ?>">
                        <label class="accordion-label" for="check<?php echo get_row_index(); ?>"><?php echo esc_html( $header ); ?></label>
                        <div class="accordion-content">
                            <p class="" ><?php echo ( $txt ); ?></p>
                        </div>
                        </div>
                    </div> 
                    <?php endwhile; ?> 

					<?php if( $accImg['btn'] ): ?> 
						<div class="main-btn blur-5 -mt-3"><a href="<?php echo esc_url( $accImg['btn']['url'] ); ?>"><?php echo esc_html( $accImg['btn']['title'] ); ?></a></div>
					<?php endif; ?>

                </div> 
            </div>
    <?php endwhile; endif; ?>
</section>
 
