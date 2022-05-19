<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <script src="{{ asset('js/app.js') }}" defer></script>

        <title>@yield('title')</title>
        {{-- autre methode --}}
        {{-- <title>{{isset($title) ? config('app.name') .' | '. $title : config('app.name')}}</title> --}}
        <script src="https://cdn.tailwindcss.com"></script>
    </head>
    <body class=" flex flex-col  justify-between min-h-screen">
        <main role="main">
            @yield('content')
            {{-- @yield('content') --}}
        </main>

       <footer>
           <p class="text-gray-500 items-center">
               &copy; CopyRight {{date('Y')}}
               @if(!(Route:: is('about')))
               &middot; <a href="{{route('about')}}" class="text-indigo-500
               hover:text-indigo-600 underline">About Us</a>
               @endif
           </p>
       </footer>
    </body>
</html>
