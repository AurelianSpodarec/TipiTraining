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

<div class="hero relative py-32 lg:py-0 bg-cover bg-no-repeat bg-center" style="background-image: url(https://storybrand.com/wp-content/uploads/2019/03/Watch-Video.jpg);">


    @if ( !(wp_is_mobile()) )
        <video class="object-fit w-full h-full" data-id="2" muted="" autoplay="autoplay" loop="loop">
            <source src="https://player.vimeo.com/external/397303949.sd.mp4?s=24c722d4097e1a4fd7b830ca8992097c7f1d520f&amp;profile_id=165" type="video/mp4">
        </video>
    @endif
   

    <div class="absolute  pt-32 top-0 right-0 bottom-0 left-0">
    <div class="px-5 text-white lg:flex h-full lg:items-center justify-center flex-col lg:text-center">
        
        <div><img class="mb-2" src="https://storybrand.com/wp-content/uploads/2020/03/live-stream-icon-2.png" alt="alt" /></div>
        <h1 class="lg:text-5xl font-bold mb-4">{!! get_sub_field('title') !!}</h1>
        <h2 class="lg:text-2xl mb-4">{!! get_sub_field('subtitle') !!}</h2>
        <span class="text-3xl font-bold block mb-12">{!! get_sub_field('subtitle_2') !!}</span>
        <x-button variant="{{ $button_variant }}" kind="{{ $button_kind }}">{{ $button_text }}</x-button> 


    </div>
    </div>



</div>