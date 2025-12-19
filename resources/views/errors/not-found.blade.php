@extends('layouts.app')
@section('title', '404')
@section('content')
    @isset($error)
        <h1> {{ $error }} </h1>
    @else
        <h1> Page non trouvée </h1>
        @endif
    @endsection
