<div {{ $attributes->merge(['class' => 'button ' . $type . ' ' . $kind]) }}>
  <div class="px-4 py-3">
    {!! $message ?? $slot !!}
  </div>
</div>
