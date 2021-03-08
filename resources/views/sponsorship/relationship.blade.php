@extends('layouts.app')

@section('title', "Parrainage")

@section('content')
    <livewire:sponsorship-list :godfathers="$godfathers" :godchildren="$godchildren">
@endsection
