<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Travel X' }}</title>
        @livewireStyles

    </head>
    <body>
        @livewire('layouts.navbar')
        {{ $slot }}
        @livewire('layouts.footer')
        @livewireScripts
    </body>
</html>
