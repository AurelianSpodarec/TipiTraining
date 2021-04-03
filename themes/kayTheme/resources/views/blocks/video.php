<?php if ( !empty(get_sub_field( 'video' ) ) ) : ?>
    <video class="<?php the_sub_field( 'rounded_corners' ) ?>"  playsinline autoplay muted loop width="100%" preload="yes"  >
        <source src="<?php the_sub_field( 'video' ) ?>" type="video/mp4">
        <source src="<?php the_sub_field( 'video' ) ?>" type="video/webm">
        <source src="<?php the_sub_field( 'video' ) ?>" type='video/webm;codecs="vp8, vorbis"'> 
        <source src="<?php the_sub_field( 'video' ) ?>" type='video/mp4;codecs="avc1.42E01E, mp4a.40.2"'>
    </video>
<?php endif; ?>