@extends('layouts.app')
<div class="z-50" id="progress-bar"></div>
 
<article class="article mt-32 px-6"> 


<?php
 

?>

    <div class="mx-auto max-w-4xl">
        <span class="block mb-6 text-md md:text-xl">{{ get_the_date('dS F Y') }}</span>
        <h1 class="text-3xl md:text-7xl font-bold mb-6">{{ the_title() }}</h1>
        <div class="text-md md:text-xl">Roughly a x minute read by <?php the_author(); ?></div>
    </div>

    <div class="mx-auto max-w-6xl my-12">
        <img src="{!! get_the_post_thumbnail_url() !!}" alt="image"/>
    </div>

    <div class="mx-auto max-w-3xl mb-8 text-xl"> 
        @php the_content() @endphp
    </div>

</article>

 