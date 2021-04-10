<section {{ $attributes->merge(['class' =>  $bgColor ]) }}>
<div {{ $attributes->merge(['class' =>  $container . " mx-auto"]) }}>

    {!! $children ?? $slot !!}
    
</div>
</section>
