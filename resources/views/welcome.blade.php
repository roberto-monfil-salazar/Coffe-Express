<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
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
                font-size: 13px;
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
   <body background="/img/logo.jpg" style="opacity: 0.86; width: 1000; height: 1000;" >
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('home') }}"style="color: #fff;"><b><em>Home</em></b></a>
                    @else
                        <a href="{{ route('login') }}"style="color: #fff;"><b><em>Login</em></b></a>

                       
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <font face="Comic Sans MS,Arial,Verdana" style="color: #fff;"> Coffe-Express</font>
                </div>

                <div class="links" >
                    
                    <a href="https://laravel.com/docs" style="color: #fff;"><b><em> Docs</em></b></a>
                    <a href="https://laracasts.com"style="color: #fff;"><b><em>Laracasts</em></b></a>
                    <a href="https://laravel-news.com"style="color: #fff;"><b><em>News</em></b></a>
                    <a href="https://blog.laravel.com"style="color: #fff;"><b><em>Blog</em></b></a>
                    <a href="https://nova.laravel.com"style="color: #fff;"><b><em>Nova</em></b></a>
                    <a href="https://forge.laravel.com"style="color: #fff;"><b><em>Forge</em></b></a>
                    <a href="https://vapor.laravel.com"style="color: #fff;"><b><em>Vapor</em></b></a>
                    <a href="https://github.com/laravel/laravel"style="color: #fff;"><b><em>GitHub</em></b></a>
                </div>
            </div>
        </div>
    </body>
</html>
