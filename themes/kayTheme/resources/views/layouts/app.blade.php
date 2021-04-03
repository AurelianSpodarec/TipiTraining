<div class="max-w-5xl mx-auto">

  <a class="sr-only focus:not-sr-only" href="#main">
    {{ __('Skip to content') }}
  </a>

  @include('partials.header')


    <main id="main">
      @yield('content')
    </main>
 

  @include('partials.footer')
</div>
