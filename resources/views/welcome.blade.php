<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Matilda SiamDream Fansite</title>
        <link rel="shortcut icon" href="../img/matilda1.jpg" type="image/jpg">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

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
                z-index: 5;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 20px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                transition: font-size 0.1s;
            }

            .links > a:hover {
                color: black;
                font-size: 22px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .bgimage {
                position: fixed;
                width: 100%;
                height: 100%;
                top: 0;
                left: 0;
                opacity: 0.2;
                filter: alpha(opacity = 20);
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Matilda SiamDream Fansite
                </div>

                <div class="links">
                    <a href="/main">Go to Website</a>
                </div>
            </div>

            <div class="bgimage">
                <img src="{{ URL::to('/img/matilda24.jpg') }}" alt="mtdbg">
            </div>
        </div>
    </body>
</html>
