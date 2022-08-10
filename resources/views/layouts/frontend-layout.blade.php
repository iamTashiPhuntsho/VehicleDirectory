<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/styles.css') }}>
        <link rel="stylesheet" href={{ asset('css/all.min.css') }}>
        <link rel="stylesheet" href={{ asset('css/directory.css') }}>
        <link 
  href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.css" 
  rel="stylesheet"  type='text/css'>
        <!-- Fonts -->
        {{-- <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap"> --}}

        <!-- Scripts -->
        
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
    </head>
    <body id="body-pd" class="font-sans antialiased">
        
        <div class="min-h-screen bg-gray-100">

            <!-- Page Content -->
            <main>
                {{ $slot }}
                
    
                
            </main>
        </div>
        <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    </body>
</html>
