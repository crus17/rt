@component('mail::layout')
    {{-- Header --}}
    @slot('header')
        @component('mail::header', ['url' => config('app.url')])
            <!--<img src="{{asset('temp/img/logo.png')}}" alt="{{ config('app.name') }}" style="width: 90px">-->
            <div>
              <img src="{{asset('temp/img/logo.png')}}" alt="{{ config('app.name') }}" style="vertical-align:middle">
              <span style="color:#04b9f4;font-size:25px;">{{ config('app.name') }}</span>
            </div>
        @endcomponent
    @endslot

    {{-- Body --}}
    {{ $slot }}

    {{-- Subcopy --}}
    @isset($subcopy)
        @slot('subcopy')
            @component('mail::subcopy')
                {{ $subcopy }}
            @endcomponent
        @endslot
    @endisset

    {{-- Footer --}}
    @slot('footer')
        @component('mail::footer')
            © {{ date('Y') }} {{ config('app.name') }}. All rights reserved.
        @endcomponent
    @endslot
@endcomponent
