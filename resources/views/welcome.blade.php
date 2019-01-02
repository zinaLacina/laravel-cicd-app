<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="menu" style="background-color:blue;color:white">
                    <div class="top-right links">
                        @if (Auth::check())
                            <a href="{{ route('home') }}"><strong>Home</strong> </a>
                        @else
                            <a href="{{ route('login') }}"><strong>Login</strong></a>
                            <a href="{{ route('register') }}"><strong>Register</strong></a>
                        @endif
                    </div>
                </div>
                
            @endif

            <div class="content">
                <div class="container">
                    <div class="row">
                        <img src="https://s3-ap-northeast-1.amazonaws.com/webill-s3-bucket/schema.png" alt="" class="img-responsive">
                    </div>
                </div>
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Laravel Documentation</a>
                    <a href="#">Laracasts</a>
                    <a href="#">News</a>
                    <a href="https://github.com/zinaLacina/laravel-cicd-app">GitHub Project</a>
                </div>
            </div>
        </div>
    </body>
</html>
