<div class="flex">

      <?php
        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

            $args = array( 
                'showposts' => '9',
                'paged' => $paged,
            );

            $loop = new WP_Query( $args );
        ?>

        <?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
        
            <article class="w-full md:w-1/2 lg:w-1/3 px-4">
 {{-- @php(post_class()) --}}
                <header class="case-studies__heading relative">

                    <div class="absolute flex flex-col text-center bg-black text-white" style="top: 1rem;
                    left: -.5rem;
                    width: 2.5rem;
                    height: 2.5rem;
                    padding-top: .325rem;
                    line-height: 1;
                    color: #fff;
                    text-align: center;
                    background-color: #d63a81;">
                        <span class="text-md"><?php echo get_the_date('d'); ?></span>
                        <span style="font-size: 10px;" class="text-xs uppercase"><?php echo get_the_date('M'); ?></span>
                    </div>

                    <a href="<?php echo get_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(); ?>
                    </a>
                </header>

                <section>

                    <a href="<?php echo get_permalink(); ?>">
                        <h3 class="text-2xl font-semibold py-3">       
                            <?php echo the_title(); ?>
                        </h3>
                    </a>

                    <?php if(has_excerpt()) : ?>
                        <p><?php echo substr(get_the_excerpt(), 0, 200); ?></p>
                    <?php else: ?>
                        <p><?php echo substr(get_the_content(), 0, 170); ?></p>
                    <?php endif; ?>

                    <a class="mt-3 block underline text-pink" style="color: #ec008c;" href="<?php echo get_permalink(); ?>">Read More »</a>

                </section>

            </article>

        <?php endwhile; ?> 

</div>