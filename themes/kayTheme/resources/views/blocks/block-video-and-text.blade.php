@if( have_rows('button') )
    
    @while( have_rows('button') ) <?php the_row() ?>

        <?php 
            $button_text = get_sub_field('button_text');
            $button_variant = get_sub_field('button_variant');
            $button_kind = get_sub_field('button_kind');
        ?>
         
    @endwhile

@endif

<div class="lg:flex px-6 lg:px-0">

    <div class="w-full lg:w-3/5">
        @if ( $video_thumbnail = get_sub_field( 'video_thumbnail' ) ) 
            <img src="{{ $video_thumbnail }}" alt="alt" />
        @endif
        {{-- <img src="https://storybrand.com/wp-content/uploads/2020/03/Screen-Shot-2020-08-06-at-9.29.12-AM.png" alt="alt" /> --}}
    </div>


    <div class="w-full lg:w-2/5 bg-white">
        <div class="p-8 lg:p-12">

        @if ( $text = get_sub_field( 'text' ) ) 
            <p class="text-lg mb-10 lg:mb-10">{{ $text }}</p>
        @endif

        <x-button size="large" variant="{{ $button_variant }}" kind="{{ $button_kind }}">{{ $button_text }}</x-button> 

    </div>
    </div>

</div>