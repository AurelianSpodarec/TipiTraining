@if( have_rows('button') )
    
    @while( have_rows('button') ) <?php the_row() ?>

        <?php 
            $button_text = get_sub_field('button_text');
            $button_variant = get_sub_field('button_variant');
            $button_kind = get_sub_field('button_kind');
        ?>
         
    @endwhile

@endif

<div class="flex">

    <div class="w-1/3">
        <img src="https://storybrand.com/wp-content/uploads/2019/08/laptop.png">
        <p>1. REGISTER FOR THE WORKSHOP</p>
    </div>


    <div class="w-1/3">
        <img src="https://storybrand.com/wp-content/uploads/2019/08/eye.png">
        <p>2. WATCH FROM YOUR HOME</p>
    </div>

    <div class="w-1/3">
    <img src="https://storybrand.com/wp-content/uploads/2019/08/chart.png">
    <p>3. GET CLARITY AND INSPIRATION</p>
    </div>

</div>
@if (have_rows('button'))
    <div class="text-center">
        <x-button variant="{{ $button_variant }}" kind="{{ $button_kind }}">{{ $button_text }}</x-button> 
    </div>
@endif