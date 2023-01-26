<!doctype html>
<x-app-layout>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('schedule.component.header')
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scheduler') }}
        </h2>
    </x-slot>
</head>
<body class="bg-light">
    <!--@include('schedule.component.navbar')-->
    @include('schedule.component.addForm')
    
    
</body>
</x-app-layout>
</html>