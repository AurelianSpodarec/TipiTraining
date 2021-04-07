<?php if ( !empty(get_sub_field( 'image' ) ) ) : ?>
    <img class="<?php the_sub_field( 'rounded_corners' ) ?>" src="<?php the_sub_field( 'image' ); ?>" />
<?php endif; ?>