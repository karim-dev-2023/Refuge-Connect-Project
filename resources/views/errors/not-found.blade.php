@extends('layouts.app')
@section('title', '404')
@section('content')
@isset($error)
        <h1 style="text-align: center;"> {{ $error }} </h1>
@else
<h1 style="text-align: center;"> Page non trouvée </h1>
@endif
@endsection