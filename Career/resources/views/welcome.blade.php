<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CareerPath</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://unpkg.com/blaze">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url("http://localhost:8000/images/climbingUp.jpg");
                background-repeat: no-repeat;
                background-size: 100% 100%;
                /*background-position:top center;*/
                background-attachment:fixed;
                /*background-color: #fff;
                color: #636b6f;*/
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                /*height: 100vh;*/
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                /*align-items: center;*/
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                /*position: absolute;*/
                text-align: center;
            }

            .content {
                text-align: center;
                height: 100%;
                position: fixed;
                width: 45%;
                background-color: white;
            }

            .title {
                font-size: 84px;
                color: #f56a6a;
                padding-top: 150px;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
                border: 1px solid #f56a6a;
                border-radius: 25px;
            }

            .info-text {
                font-size: 25px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <!-- put the login stuff here -->
     <div class="content">
        <div class="title m-b-md">
            CareerPath
        </div>
        <p class = 'info-text'>
        Helping you start a great career
        <br>
        Please login or register using the buttons below
        </p>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <!-- <a href="{{ url('/home') }}">Home</a> -->
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

        </div>
     </div>
    </body>
</html>
