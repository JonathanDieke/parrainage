@extends('layouts.app')

@section('title', "Accueil")

@section('content')

    <div class="title h1 text-center typewriter " style="font-family:  Geneva, Tahoma, sans-serif" id="title">
        {{-- <p>PARRAINAGE GL - ESATIC</p> --}}
    </div>

    <div class="description mx-auto text-center ">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit.
        Ipsum totam error sint distinctio sapiente, officia hic, possimus aspernatur, expedita facilis dignissimos rerum ipsam?
        Obcaecati ea facere animi, cumque laudantium nam sapiente possimus delectus sint fugit illo magnam tempore asperiores
        aspernatur voluptas explicabo et? Repellat temporibus perferendis, enim consequuntur doloremque error?
        <br>
        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Aut porro architecto, magni aperiam illo placeat!
        Consequuntur quae tenetur, voluptates nisi rerum animi illum sit laborum vitae aliquid aperiam autem deserunt.
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
