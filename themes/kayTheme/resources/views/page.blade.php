@extends('layouts.app')

<!-- @section('content') -->

<h1>Page</h1>

<?php

// $flexibleContentPath = dirname(__FILE__) . '\\blocks\\';
$flexibleContentPath = "C:\\Users\\44775\\Desktop\\Web Development\\Clients\\KayLittlehales\\FutureproofED\\wp-content\\themes\\kayTheme\\resources\\views\\blocks\\";


if ( have_rows( 'flexible_content' ) ) :
	while ( have_rows( 'flexible_content' ) ) : the_row();

        if ( have_rows( 'row' ) ) :
            while ( have_rows( 'row' ) ) : the_row();


                if ( have_rows( 'column' ) ) :
                    while ( have_rows( 'column' ) ) : the_row();

                        $layout = get_row_layout();
                        $file = ( $flexibleContentPath . str_replace( '_', '-', $layout) . '.php' );                        
                        
                        if ( file_exists( $file ) ) {
                            include( $file );
                        }

                    
                        
                    endwhile;
                endif;


            endwhile;
        endif;

	endwhile;
endif;

?>