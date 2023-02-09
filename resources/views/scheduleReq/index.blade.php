@auth
    <!doctype html>
    <x-app-layout>
    <html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('scheduleReq.component.header')
            <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Appointments') }}
            </h2>
        </x-slot>
    </head>
    <body class="bg-light">
        @include('scheduleReq.component.scheduleList')
        
    </body>
    </x-app-layout>
    </html>

@endauth




@guest
    <script>window.location.replace("/login");</script>
@endguest


























