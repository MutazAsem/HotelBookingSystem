<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- favicon -->
        <link rel="shortcut icon" href="assets/images/logo-icon.png">

        <!-- Css -->
        <link href="assets/libs/tobii/css/tobii.min.css" rel="stylesheet">
        <link href="assets/libs/tiny-slider/tiny-slider.css" rel="stylesheet">
        <link href="assets/libs/js-datepicker/datepicker.min.css" rel="stylesheet">
        <!-- Main Css -->
        <link href="assets/libs/%40mdi/font/css/materialdesignicons.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/tailwind.min.css" rel="stylesheet" type="text/css">

        <title>{{ $title ?? 'Travosy' }}</title>
        @livewireStyles

    </head>
    <body class="dark:bg-slate-900">
        @livewire('layouts.navbar')
        {{ $slot }}
        @livewire('layouts.footer')
        
        <!-- JAVASCRIPTS -->
        <script src="assets/libs/tobii/js/tobii.min.js"></script>
        <script src="assets/libs/tiny-slider/min/tiny-slider.js"></script>
        <script src="assets/libs/js-datepicker/datepicker.min.js"></script>
        <script src="assets/libs/feather-icons/feather.min.js"></script>
        <script src="assets/js/plugins.init.js"></script>
        <script src="assets/js/app.js"></script>
        <!-- JAVASCRIPTS -->
        @livewireScripts
    </body>
</html>
