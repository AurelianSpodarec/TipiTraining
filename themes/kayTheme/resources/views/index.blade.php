@extends('layouts.app')

<!-- @section('content') -->
    @include('partials.page-header')


    <x-section container="md:container mx-auto p-4" bgColor="secondary">
    <div class="flex flex-wrap">
      
        <div class="w-full lg:w-1/2">
            <span>Create a Hands-Off<span>
            <h2>Income</h2>
            <p>Build a profitable HMO property portfolio with the help of our in-house specialists and create a lifestyle that generates 30% returns on your investment.</p>
            <x-button variatn="primary" kind="outline">Downolad Prospectus</x-button>
        </div>

        <div class="w-full lg:w-1/2">
            <img class="rounded-full" src="https://sourcedfranchise.co/wp-content/uploads/2020/11/293284-P6WZYT-188.jpg" alt="none"/>
        </div>

    </div>
    </x-section>

    <!-- bgcolor rename to variant perhpas -->
    <x-section bgColor="teritary">
    dj
    </x-section>


    <x-section>
        <h2>Buttons</h2>

        <x-button variant="primary" kind="solid">Primary</x-button>
        <x-button variant="secondary" kind="solid">Secondary</x-button>
        <x-button variant="success" kind="solid">Success</x-button>
        <x-button variant="warning" kind="solid">Warning</x-button>
        <x-button variant="danger" kind="solid">Danger</x-button>
        <x-button variant="info" kind="solid">Info</x-button>
        {{--    <x-button variant="info">Light</x-button>--}}
        {{--    <x-button variant="info">Dark</x-button>--}}
        {{--    <x-button variant="link">Link</x-button>--}}
    </x-section>

    <x-section>
        <h2>Outline Buttons</h2>
        <x-button variant="primary" kind="outline">Primary</x-button>
        <x-button variant="secondary" kind="outline">Secondary</x-button>
        <x-button variant="success" kind="outline">Success</x-button>
        <x-button variant="warning" kind="outline">Warning</x-button>
        <x-button variant="danger" kind="outline">Danger</x-button>
        <x-button variant="info" kind="outline">Info</x-button>
    </x-section>

    <h2>Sizes</h2>
    {{--Size/block--}}

    <h2>Active State</h2>

    <x-section>
        <h2>Disabled State</h2>
        <x-button variant="primary" kind="solid" disabled>Primary</x-button>
        <x-button variant="secondary" kind="solid" disabled>Secondary</x-button>
        <x-button variant="success" kind="solid" disabled>Success</x-button>
        <x-button variant="warning" kind="solid" disabled>Warning</x-button>
        <x-button variant="danger" kind="solid" disabled>Danger</x-button>
        <x-button variant="info" kind="solid" disabled>Info</x-button>
    </x-section>

    <h2>Button Loading State</h2>
@endsection
