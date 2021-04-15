<section {{ $attributes->merge(['class' =>  $bgColor . " " . $gutter]) }}>
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>

    {!! $children ?? $slot !!}
    
</div>
</section>