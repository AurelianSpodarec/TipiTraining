@extends('layouts.app')

<h1>Page</h1>

<?php

// $flexibleContentPath = dirname(__FILE__) . '\\blocks\\';
$flexibleContentPath = "C:\\Users\\44775\\Desktop\\Web Development\\Clients\\KayLittlehales\\FutureproofED\\wp-content\\themes\\kayTheme\\resources\\views\\blocks\\";
 
var_dump($site);
if ( have_rows( 'flexible_content' ) ) :
	while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
 

   <?php if ( have_rows( 'row_config' ) ) :
         while ( have_rows( 'row_config' ) ) : the_row(); ?>

            <?php if ( get_sub_field( 'background_color' ) ) : ?>
             
            <?php $bgColor = get_sub_field( 'background_color'); ?>
        
            <?php endif; ?>
    
        <?php endwhile; ?>
    <?php endif; ?>
 

    <?php if ( have_rows( 'row' ) ) :
            while ( have_rows( 'row' ) ) : the_row();
            echo $site

           
            ?>
            <x-section bgColor="{!! $site !!}">SECTION</x-section>
 
                <?php if ( have_rows( 'column' ) ) :
                    while ( have_rows( 'column' ) ) : the_row(); ?>

                    <div>
                        <?php $layout = get_row_layout();
                        $file = ( $flexibleContentPath . str_replace( '_', '-', $layout) . '.php' );                        
                        
                        if ( file_exists( $file ) ) {
                            include( $file );
                        }
                        ?>
                    
                    </div>

                    <?php

                    endwhile;
                endif; 
                ?>
        
        <?php endwhile;
            endif;

	endwhile;
endif;

?>