<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ mix('css/app.css') }}" rel="stylesheet">

    <style>
        main {
            height: calc(100vh - 50px);
            min-height: calc(100vh - 50px);
            padding-top: 60px;
        }

        footer {
            height: 50px;
        }

        .bg-home {
            background-color: #8898eb;
        }
    </style>
</head>

<body>
    <div id="app">
        @component('components.header')
        @endcomponent

        @component('components.flash')
        @endcomponent

        <main class="bg-home d-flex align-items-center w-100 h-100">
         <ul>
          <li class="nav-item">
               <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
          </li>
          <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
           </li>
         </ul>
        </main>

        @component('components.footer')
        @endcomponent
    </div>
</body>

</html>