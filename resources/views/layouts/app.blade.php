<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>GL Label</title>

        <style>
            #particles-js{
                position:relative;
                z-index:1;
            }
            canvas.particles-js-canvas-el {
                position: absolute;
                top: 0;
                left: 0;
                z-index:2;
                width: 100%;
                height: 100%;
            }

            .typewriter {
                overflow: hidden; /* Ensures the content is not revealed until the animation */
                border-right: .15em solid orange; /* The typwriter cursor */
                white-space: nowrap; /* Keeps the content on a single line */
                margin: 0 auto; /* Gives that scrolling effect as the typing happens */
                letter-spacing: .15em; /* Adjust as needed */
                animation:
                    typing 3s steps(40, end),
                    blink-caret .75s step-end infinite;
            }

            /* The typing effect */
            @keyframes typing {
                from { width: 0 }
                to { width: 100% }
            }

            /* The typewriter cursor effect */
            @keyframes blink-caret {
                from, to { border-color: transparent }
                50% { border-color: black; }
            }
        </style>

        @livewireStyles

    </head>

    <body >

        <nav class="navbar navbar-dark bg-primary">
            <div class="container">
              <a class="navbar-brand mx-auto" href="{{ route('welcome') }}">
                <img src="{{ asset('img/bg.jpeg') }}" alt="" width="120" height="60" style="border-radius: 48%;">
              </a>
            </div>
        </nav>


        <main role="main" class="container pt-4 ">

            @yield('content')

        </main>


        <script src="{{ asset('js/jquery.js') }}"></script>
        <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('js/bootstrap.js') }}"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script >
            // $(() => {
            //     var i = 0;
            //     var txt = 'PARRAINAGE GL - ESATIC';
            //     var speed = 50;

            //     function typeWriter() {
            //         if (i < txt.length) {
            //             document.getElementById("title").innerHTML += txt.charAt(i);
            //             i++;
            //             setTimeout(typeWriter, speed);
            //         }
            //     }

            //     typeWriter()
            // })
        </script>

        @livewireScripts
    </body>
</html>
