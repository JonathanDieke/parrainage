@extends('layouts.app', ['script' => $godfatherTab])

@section('content')

    <livewire:sponsorship-list :godfathers="$godfathers">

@endsection


