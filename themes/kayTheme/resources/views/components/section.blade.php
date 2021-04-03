<section {{ $attributes->merge(['class' =>  $bgColor . " " . $container]) }}>
    {!! $children ?? $slot !!}
</section>
