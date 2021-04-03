<button type="button" {{ $attributes->merge(['class' => "button" . " " . $buttonVariant . " " . $buttonKind . " " . $buttonRadius . " " . $buttonSize]) }}>
    {!! $message ?? $slot !!}
</button>

{{--<button {{ $attributes->merge(['class' => $kind]) }}>--}}
{{--    {!! $message ?? $slot !!}--}}
{{--</button>--}}
