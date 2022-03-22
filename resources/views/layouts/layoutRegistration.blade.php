<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link  href="{{ URL::asset('css/registration.css')}}" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;300;400;700;900&display=swap" rel="stylesheet">
        <link href="{{ URL::asset('css/bootstrap.min.css')}}" rel="stylesheet">
        <link href="{{ URL::asset('css/tooplate-little-fashion.css')}}" rel="stylesheet">
        <title>Sign in/Sign up </title>
    </head>
    <body class="g-sidenav-show  bg-gray-200">
        <div class="login-wrap">
            <div class="login-html">
                @yield('content')
            </div>
        </div>
    </body>
</html>
