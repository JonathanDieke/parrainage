<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{ asset('css/semantic.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">

        <title>GL Label</title>

        <style>
            .container{;
                /* background-color: #FFF */
            }

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
        </style>

        @livewireStyles

    </head>

    <body style="background-color: #4398FF" >

        <nav style="background-color: rgb(243, 243, 243)" >
            <div class="ui stackable container secondary pointing menu large blue">
                {{--  <a class="item active">
                  Parrains
                </a>
                <a class="item ">
                  Filleuls
                </a>  --}}
                {{--  <div class="right menu">
                  <a class="ui item">
                    Logout
                  </a>
                </div>  --}}
              </div>
              {{--  <div class="ui segment">
                <p></p>
              </div>  --}}
        </nav>

        <main  id="particles-js">

            <livewire:sponsorship-list :godfathers="$godfathers">
        </main>


        <script src="{{ asset('js/semantic.js') }}"></script>
        <script src="{{ asset('js/particles.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>

        @livewireScripts
    </body>
</html>
