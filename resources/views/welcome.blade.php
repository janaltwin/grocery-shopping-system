<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" >
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Grocery Shopping System</title>

        
    </head>
    <body class="bg-[url('https://wallpaperaccess.com/full/1624847.jpg')]">
        <div class="bg-[url('https://wallpaperaccess.com/full/1624847.jpg')]">
            @if (Route::has('login'))
                <div class="">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

           
        </div>



        
    </body>
</html>


