<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">


        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous"> --}}

        <link rel="stylesheet" href="{{ asset('css/all.css') }}">
        {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" /> --}}



        <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">

        <title>GL Label</title>

        <style>
            html, body, main {
                height: 100%;
            }

            main{
                height: 100vh;
            }

            #particles-js{
                position:relative;
                z-index:200;
            }

            canvas.particles-js-canvas-el {
                position: absolute;
                top: 0;
                left: 0;
                z-index:1;
                width: 100%;
                height: 100%;
            }

            .content{
                position: relative;
                z-index: 500;
            }
        </style>

        @livewireStyles

    </head>

    <body  id="particles-js">

        <nav class="navbar navbar-dark bg-primary">
            <div class="container content" style="width: min-content">
              <a class="navbar-brand mx-auto" href="{{ route('welcome') }}">
                <img src="{{ asset('img/bg.jpeg') }}" alt="" width="120" height="60" style="border-radius: 48%;">
              </a>
            </div>
        </nav>


        <main role="main" class="pt-4 ">

            <div class="content container" >
                @yield('content')
            </div>

        </main>

        <footer>
            <div class="alert my-2">
                <h3 class="fst-italic fw-bold text-center pt-4 small @if(Route::is("welcome")) {{ 'fixed-bottom' }} @endif " style="font-family: Geneva"><i class="fas fa-code"></i> with <i class="fas fa-heart"></i> by Jonathan Dieke</h3>
            </div>
        </footer>


        <script src="{{ asset('js/jquery.js') }}"></script>
        {{-- <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> --}}

        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script> --}}
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script> --}}


        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        @if (isset($godfatherTab) && !$godfatherTab )
            <script src="{{ asset('js/scripts.js') }}" defer></script>
        @endif


        <script >
            $(() => {
                var i = 0;
                var txt = 'PARRAINAGE GL - ESATIC';
                var speed = 50;

                function typeWriter() {
                    if (i < txt.length) {
                        document.getElementById("title").innerHTML += txt.charAt(i);
                        i++;
                        setTimeout(typeWriter, speed);
                    }
                }

                typeWriter()
            })
        </script>

        @livewireScripts
    </body>
</html>
