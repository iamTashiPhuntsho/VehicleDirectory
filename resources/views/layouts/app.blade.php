<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>
        <script src="{{ asset('datatables/jQuery-3.6.0/jquery-3.6.0.min.js') }}"></script> 
        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
        <link rel="stylesheet" href={{ asset('css/styles.css') }}>
        <link rel="stylesheet" href={{ asset('css/all.min.css') }}>
        <link rel="stylesheet" href={{ asset('datatables/datatables.min.css') }}>
        
  
        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-100">
            @include('layouts.navigation')

            <!-- Page Content -->
            <main>
                @if(session('status') == '1')
                    <div class="bg-green-500 text-white w-1/2 mx-auto rounded-b-md">
                        <p class="text-sm title2 py-1 px-5 text-center">{{ session('msg') }}</p>
                    </div>
                @endif
                @if(session('status') == '0')
                    <div class="bg-red-500 text-white w-1/2 mx-auto rounded-b-md">
                        <p class="text-sm title2 py-1 px-5 text-center">{{ session('msg') }}</p>
                    </div>
                @endif
                {{ $slot }}
            </main>
        </div>
        <script src="{{ asset('js/all.min.js') }}"></script>
        <script src="{{ asset('js/custom.js') }}"></script>
        <script src="{{ asset('datatables/datatables.min.js') }}"></script> 
    </body>
</html>
