<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale())}}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <title>{{__('header.company name')}}</title>
        <!-- Loading third party fonts -->
        <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:300,300italic,400,700')}}" rel="stylesheet" type="text/css">
        <link href="{{ asset('fonts/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <!-- Loading main css file -->
        <link rel="stylesheet" href="{{ asset('css/animate.min.css')}}">
        <link rel="stylesheet" href="{{ asset('css/style.css')}}">

        <script src="{{ asset('js/ie-support/html5.js')}}"></script>
        <script src="{{ asset('js/ie-support/respond.js')}}"></script>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased" >
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Heading -->
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
