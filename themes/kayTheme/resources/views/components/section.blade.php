<section {{ $attributes->merge(['class' =>  $bgColor . " " . $gutter . " " . "relative"]) }}>
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>

    {!! $children ?? $slot !!}
    
</div>
</section>