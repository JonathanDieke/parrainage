@extends('layouts.app')

@section('title', 'Accueil')

@section('content')

    <div class="title h1 text-center typewriter " style="font-family:  Geneva, Tahoma, sans-serif" id="title">
        {{-- <p>PARRAINAGE GL - ESATIC</p> --}}
    </div>

    <div class="description mx-auto text-center ">



        <figure class="text-center p-3">
            <blockquote class="blockquote">
              <p>
                Si tu donnes tout pour y arriver, attends toi à tout perdre quand t’ y seras.
                La Vie c’est transformer quelque chose d’ordinaire en quelque chose d’extraordinaire jusqu’à ce qu’elle devienne ordinaire à nouveau.
                Ne crois pas en tes rêves, réalise les. Meurs en ayant tout donné car tu n’ emporteras rien avec toi.
                Fais ce qu’il te plaît jusqu’à ce que ça plaise aux autres et pas le contraire...
                </p>
            </blockquote>
            <figcaption class="blockquote-footer p-2">
                Damso, <cite title="Source Title"> L'Antidote</cite>
            </figcaption>
          </figure>

        {{--  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Ipsum totam error sint distinctio sapiente, officia hic, possimus aspernatur, expedita facilis dignissimos rerum ipsam?
        Obcaecati ea facere animi, cumque laudantium nam sapiente possimus delectus sint fugit illo magnam tempore asperiores
        aspernatur voluptas explicabo et? Repellat temporibus perferendis, enim consequuntur doloremque error?
        <br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro architecto, magni aperiam illo placeat!
        Consequuntur quae tenetur, voluptates nisi rerum animi illum sit laborum vitae aliquid aperiam autem deserunt.  --}}
    </div>

    <div class="buttons d-flex justify-content-center mt-4" style="width: 100%">

        <a href="{{ route('sponsorship.relationship', ["relationship" => "godfathers"]) }}"class="btn btn-outline-secondary btn-lg m-1">
            Parrains
        </a>

        <a href="{{ route('sponsorship.relationship', ["relationship" => "godchildren"]) }}"class="btn btn-outline-info btn-lg m-1">
            Filleuls
        </a>

    </div>
@endsection
