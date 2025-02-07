<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('assets/images/logo-icon.png')}}">

        <!-- Css -->
        <link href="{{ asset('assets/libs/tobii/css/tobii.min.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/libs/tiny-slider/tiny-slider.css')}}" rel="stylesheet">
        <link href="{{ asset('assets/libs/js-datepicker/datepicker.min.css')}}" rel="stylesheet">
        <!-- Main Css -->
        <link href="{{ asset('assets/libs/%40mdi/font/css/materialdesignicons.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/tailwind.min.css')}}" rel="stylesheet" type="text/css">

        <title>{{ $title ?? 'Travosy' }}</title>
        @livewireStyles

    </head>
    <body class="dark:bg-slate-900">
        @livewire('layouts.navbar')
        {{ $slot }}
        @livewire('layouts.footer')
        
        <!-- JAVASCRIPTS -->
        <script src="{{ asset('assets/libs/tobii/js/tobii.min.js')}}"></script>
        <script src="{{ asset('assets/libs/tiny-slider/min/tiny-slider.js')}}"></script>
        <script src="{{ asset('assets/libs/js-datepicker/datepicker.min.js')}}"></script>
        <script src="{{ asset('assets/libs/feather-icons/feather.min.js')}}"></script>
        <script src="{{ asset('assets/js/plugins.init.js')}}"></script>
        <script src="{{ asset('assets/js/app.js')}}"></script>
        <!-- JAVASCRIPTS -->
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <x-livewire-alert::scripts />
        @livewireScripts
    </body>
</html>
