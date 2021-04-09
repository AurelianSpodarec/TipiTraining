<?php 
if( have_rows('button') ):
    
    while( have_rows('button') ) : the_row();
       
        $button_text = get_sub_field('button_text');
        $button_variant = get_sub_field('button_variant');
        $button_kind = get_sub_field('button_kind');
         
    endwhile;
 
else :
    
endif;
 
?>

<div class="hero relative">

    <video class="object-fit w-full h-full" data-id="2" muted="" autoplay="autoplay" loop="loop">
        <source src="https://player.vimeo.com/external/397303949.sd.mp4?s=24c722d4097e1a4fd7b830ca8992097c7f1d520f&amp;profile_id=165" type="video/mp4">
    </video>

    <div class="absolute top-0 right-0 bottom-0 leftt-0">
    <div class="flex h-full items-center justify-center flex-col text-center">
        
        <div><img alt="alt" src="https://storybrand.com/wp-content/uploads/2020/03/live-stream-icon-2.png" /></div>
        <h1>{!! get_sub_field('title') !!}</h1>
        <h2>{!! get_sub_field('subtitle') !!}</h2>
        <div>{!! get_sub_field('subtitle_2') !!}</div>
        <x-button variant="{{ $button_variant }}" kind="{{ $button_kind }}">{{ $button_text }}</x-button> 


    </div>
    </div>



</div>