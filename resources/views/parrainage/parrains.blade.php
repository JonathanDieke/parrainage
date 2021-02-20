@extends('layouts.app', ['godfatherTab' => $godfatherTab])

@section('content')
    <livewire:sponsorship-list :godfathers="$godfathers">
@endsection
