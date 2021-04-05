@extends('layouts.app')

<h1>Page</h1>

<?php

// $flexibleContentPath = dirname(__FILE__) . '\\blocks\\';
$flexibleContentPath = "C:\\Users\\44775\\Desktop\\Web Development\\Clients\\KayLittlehales\\FutureproofED\\wp-content\\themes\\kayTheme\\resources\\views\\blocks\\";
 
$count = 0;
if ( have_rows( 'flexible_content' ) ) :
	while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
 

    <?php if ( have_rows( 'row' ) ) :
            while ( have_rows( 'row' ) ) : the_row(); ?>

            <x-section bgColor="{{ $page[$count]['backgroundColor'] }}">


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
                endif; ?>


            </x-section>


        <?php endwhile;
            endif;

            $count++;

	endwhile;
endif;

?>