<section class="relative text-center w-full js-parallax h-44 md:h-96" data-parallax-speed="0.3">
<div class="absolute top-0 right-0 bottom-0 left-0 bg-center bg-cover bg-no-repeat" style="background-image: url(http://aurelianspodarec.co.uk/wp-content/uploads/2018/03/collaborate-collaboration-company-min.jpg);" >

	<div class="flex items-center justify-center z-20 relative h-full w-full js-parallax" data-parallax-speed="0.4">
	<div class="page-intro__content-outer">

		<h1 class="text-white font-bold text-3xl lg:text-5xl">
            <?php 
                if((get_sub_field('title'))) {
                    the_sub_field('title');
                } else {
                    wp_title('');
                }
            ?>
        </h1>

        <?php if(get_sub_field('subtitle')) :  ?>
            <span style="color: #BBB;" class="text-md lg:text-2xl"><?php the_sub_field('subtitle'); ?></span>
        <?php endif;  ?>

	</div>
	</div>

    <div class="absolute top-0 right-0 bottom-0 left-0 bg-center bg-cover bg-no-repeat" style="background: #262626; opacity: 0.75;"></div>
	
</div>
</section>