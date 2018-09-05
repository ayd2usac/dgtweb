<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Denuncias GT</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: black;
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

            footer{
                background-color: grey;
                min-height: 50px;
                padding: 40px;
                color: white;
                text-align: center;
                font-size: 15px;
                position: fixed;
                width:100%;                
                left: 0;
                bottom: 0;
            }

            #denuncie{
                min-height: 150px;
                background-color: #80000;
                color: white;
                text-align: center;
                font-size: 30px;
                padding-top: 60px;
                font-weight: bold;
            }
        </style>
    </head>
    <body>

        <div class="">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Ingresar</a>
                        <a href="{{ route('register') }}">Registrarse</a>
                    @endauth
                </div>
            @endif


            <div class="content">
                <img src="{{ asset('images/portada.png') }}" width="100%" style="max-height: 500px">

                <div class="title m-b-md">
                    
                </div>

                <div class="links">
<!--			
                    <a href="https://laravel.com/docs">Documentation</a>

                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
			-->
                </div>

            </div>
            
            <hr>

            <div id="denuncie">
                <a href="{{ route('complaints_create') }}">
                    <img src="{{ asset('images/denuncie_aqui.png') }}""><br>
                    DENUNCIE AQUÍ
                </a>
            </div>

            <hr>
            <!--
            <table width="100%" cellpadding="20px" style="background-color: white">
                <tr>
                    <td width="40%">
                        <img src="{{ asset('images/denuncias_add2.jpg') }}" height="300">
                    </td>
                    <td width="30%">
                        <img src="{{ asset('images/denuncias_add1.jpg') }}" height="300">
                    </td>
                    <td width="30%">
                        <img src="{{ asset('images/denuncie.png') }}" >
                    </td>
                </tr>
            </table>  
            -->              
        </div>  

        <footer>Denuncias GT - Guatemala 2018</footer>      
    </body>    
</html>
