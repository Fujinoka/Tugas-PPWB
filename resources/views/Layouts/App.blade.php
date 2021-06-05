<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
     <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
     <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
     <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css">

     <title>@yield('title')</title>
     <style>
         * {
             margin: 0;
             padding: 0;         
            }
         .changecolor {
             animation: change-color 7s ease infinite;
         }
         @keyframes change-color{
             0% {
                color: #ff9aa2;
            } 16% {
                color: #ffb7b2;
            } 32% {
                color: #ffdac1;
            } 48% {
                color: #e2f0cb;
            } 64% {
                color: #b5ead7;
            } 80% {
                color: #c7ceea;
            } 100% {
                color: #ff9aa2;
            }
         }
         .jumbotron {
            height: 100vh;
         }
     </style>
</head>
<body class="bg-white">
    <header class="nav navbar-dark bg-dark">
            @yield('header')
            {{-- @include('Layouts.Navigation')--}}
    </header>
    <main>
        <div class="jumbotron" >
            <div class="">
                <div class="card shadow p-3 mb-10 rounded">
                    @yield('content')
                </div>
            </div>
        </div>
    </main>    
</body>
</html>