@if( have_rows('button') )
    
    @while( have_rows('button') ) <?php the_row() ?>

        <?php 
            $button_text = get_sub_field('button_text');
            $button_variant = get_sub_field('button_variant');
            $button_kind = get_sub_field('button_kind');
        ?>
         
    @endwhile

@endif

<div class="mb-16">
    <div class="text-center">
        <h2 class="text-2xl font-bold mb-4">It's Time to Clarify Your Message and Make a Plan<h2>
    </div>
  </div>

<div class="flex mb-16">

    <div class="w-full lg:w-1/3 text-center">
        <img class="mx-auto" src="https://storybrand.com/wp-content/uploads/2019/08/laptop.png">
        <p class="font-semibold text-2xl">1. REGISTER FOR THE WORKSHOP</p>
    </div>


    <div class="w-full lg:w-1/3 text-center">
        <img class="mx-auto" src="https://storybrand.com/wp-content/uploads/2019/08/eye.png">
        <p class="font-semibold text-2xl">2. WATCH FROM YOUR HOME</p>
    </div>

    <div class="w-full lg:w-1/3 text-center">
        <img class="mx-auto" src="https://storybrand.com/wp-content/uploads/2019/08/chart.png">
        <p class="font-semibold text-2xl">3. GET CLARITY AND INSPIRATION</p>
    </div>

</div>
@if (have_rows('button'))
    <div class="text-center">
        <x-button size="large" variant="{{ $button_variant }}" kind="{{ $button_kind }}">{{ $button_text }}</x-button> 
    </div>
@endif