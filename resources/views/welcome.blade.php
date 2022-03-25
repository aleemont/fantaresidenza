<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
        <!--BOOTSTRAP CSS-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    </head>
    <body class="bg-dark">
            <nav class="align-items-center navbar navbar-expand-md bg-dark pt-4 ps-2 pe-2">
                <a href="{{ url('/') }}" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto text-important text-decoration-none">
                    <h1 style="font-weight:bolder">
                        FANTARESIDENZA
                    </h1>
                </a>
                <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 mb-md-0">
                    <li class="text-primary fs-4">
                        <a href="#" class="nav-link px-2 text-white">REGOLAMENTO</a>
                    </li>
                    <li class="text-primary fs-4">
                        <a href="#" class="nav-link px-2 text-secondary">INFO</a>
                    </li>
                </ul>
                @if (Route::has('login'))
                    @auth
                        <!--IF ALREADY LOGGED IN SHOW THIS: --> 
                        <div class="col-md-3 text-end">
                            <a href="{{ url('/dashboard') }}" class="btn btn-primary">GIOCA A FANTARESIDENZA</a>
                        </div>
                    @else
                        <!--ELSE SHOW: -->

                        <div class="col-md-3 text-end">
                            <a href="{{ route('login') }}" class="btn btn-outline-primary me-2">Log in</a>
                            <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                        </div>

                            @endauth
                    @endif
            </nav>
            <br>
            <div class="container" style="margin-left:auto; margin-right:auto; top:40%;">
                <div class="row bg-light">
                    <p class="text-primary"> 
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    et dolore magna aliqua. Etiam dignissim diam quis enim lobortis scelerisque fermentum dui faucibus. 
                    Etiam sit amet nisl purus in mollis nunc. Mi ipsum faucibus vitae aliquet. Sit amet purus gravida quis
                     blandit turpis cursus in hac. Ultricies mi quis hendrerit dolor magna. Morbi non arcu risus quis varius
                      quam quisque. Fames ac turpis egestas maecenas. Feugiat in fermentum posuere urna. Mi bibendum neque egestas
                       congue quisque egestas diam in arcu. Sed velit dignissim sodales ut eu sem integer vitae. A scelerisque 
                       purus semper eget duis at tellus at. Justo eget magna fermentum iaculis eu non diam phasellus vestibulum.
                        Donec et odio pellentesque diam. Etiam sit amet nisl purus in mollis nunc. In hac habitasse platea 
                        dictumst vestibulum rhoncus est pellentesque elit.
                    </p>
                </div>
            </div>
            <!--BOOTSTRAP JS SCRIPTS-->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
