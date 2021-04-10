@extends('layouts.app')
@section('content')


<?php
    // $flexibleContentPath = dirname(__FILE__) . '\\blocks\\';
    $flexibleContentPath = "C:\\Users\\44775\\Desktop\\Web Development\\Clients\\KayLittlehales\\FutureproofED\\wp-content\\themes\\kayTheme\\resources\\views\\blocks\\";
    $count = 0;
?>


@if ( have_rows( 'flexible_content' ) ) 
@while ( have_rows( 'flexible_content' ) ) <?php the_row(); ?>


    @if ( have_rows( 'row' ) )
    @while ( have_rows( 'row' ) ) <?php the_row(); ?>
    <x-section bgColor="{{ $page[$count]['backgroundColor'] }}" container="{{ $page[$count]['container'] }}">


        @if ( have_rows( 'column' ) )
        @while ( have_rows( 'column' ) ) <?php the_row(); ?>
        <div class="{{ $page[$count]['columnWidth'] }}">


            <?php 
                $layout = get_row_layout();
                $layoutConverted = str_replace( '_', '-', $layout);
                $file = ( $flexibleContentPath . str_replace( '_', '-', $layout) . '.blade.php' );
            ?>

            @if( file_exists( $file ))
                @include('blocks.' . $layoutConverted)
            @endif


        </div>
        @endwhile
        @endif
        
    
    </x-section>
    @endwhile
    @endif
    <?php $count++; ?>


@endwhile
@endif


@endsection