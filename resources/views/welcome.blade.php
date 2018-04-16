<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Rebbit</title>

        <!-- Fonts -->

        <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Titillium Web', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .navbar-default {
                background-color: #FFFFFF;
                border-color: #FFFFFF;
            }

            li {
                font-size: 15px;
            }

            li:hover {
                background-color: #42f4a1;
                color: white;
            }

            .typewriter {
                color: #000000;
                overflow: hidden;
                border-right: .15em solid #42f4a1;
                white-space: nowrap;
                margin: 0 auto;
                letter-spacing: .15em;
                animation: typing 3.5s steps(25, end), blink-caret .5s step-end infinite;
            }

            @keyframes typing {
              from { width: 0 }
              to { width: 100% }
            }

            @keyframes blink-caret {
              from, to { border-color: transparent }
              50% {  border-color: #42f4a1 }
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <nav class="navbar navbar-default navbar-fixed-top">
                    <div class="container-fluid">
                      <div class="navbar-header">
                        <a class="navbar-brand" href="#">Rebbit</a>
                      </div>
                      <ul class="nav navbar-nav navbar-right">
                            <li>@auth<a class="button" href="{{ url('/home') }}">Home</a></li>
                            <li>@else<a class="button" href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a>@endauth</li>
                      </ul>
                    </div>
                </nav>
            @endif

            <div class="content">
                <div class="title m-b-md typewriter">
                    Welcome to Rebbit
                </div>

                <blockquote class="blockquote">
                  <p class="mb-0">When you write your dream, it becomes one step closer to be real.</p>
                  <footer class="blockquote-footer">Mohammad Ghifari Haekal, 2018</footer>
                </blockquote>

                <!--<div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>-->
            </div>
        </div>
    </body>
</html>
