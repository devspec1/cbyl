<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Tenant') }}</title>

        <!-- Fonts -->
        
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Raleway&display=swap" rel="stylesheet">
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <style>
            .vjs-poster {
                background: transparent !important;
            }
            .vjs-theme-fantasy .vjs-big-play-button {
                color: white !important;
            }

            h1, h2, h3, h4, h5 {
                font-family: "Montserrat" !important;
            }

            .overlapped-bg {
                width: 100vw;
                background: #FBFBFB;
                height: 100%;
                z-index: -1;
                top: 0;
            }
        </style>
        <script src="https://unpkg.com/feather-icons"></script>

        @livewireStyles
        <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
        <!-- City -->
        <link
            href="https://unpkg.com/@videojs/themes@1/dist/fantasy/index.css"
            rel="stylesheet"
        />

        <!-- Scripts -->
        <script src="https://js.stripe.com/v3/"></script>

        <script src="{{ asset('js/manifest.js') }}" defer></script>
        <script src="{{ asset('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
        <script src="{{ asset('js/payment.js') }}"></script>
    </head>
    <body class="font-sans antialiased bg-white overflow-x-hidden min-h-screen">
        <x-app-navigation></x-app-navigation>

        <!-- Page Content -->
        <main class="container">
            {{ $slot }}
        </main>

        <x-footer></x-footer>

        <livewire:create-account-modal />
        <livewire:login-modal />
        <livewire:forgot-modal />

        <script src="https://unpkg.com/flowbite@1.4.1/dist/datepicker.js"></script>
        <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>

        @livewireScripts

        @stack('scripts')

        <script>
            function handlerAlertToaster(event) {
                if (!toastr) {
                    throw Error('Toastr not loaded!');
                }

                toastr[event.detail.type](event.detail.message, event.detail.title ?? ''), toastr.options = {
                    "closeButton": true,
                    "progressBar": true,
                    onHidden: function (e) {
                        console.log('HIDDEN!', e);
                    }
                };
            }

            // alert listener
            window.addEventListener('alert', handlerAlertToaster);
        </script>
    </body>
</html>
