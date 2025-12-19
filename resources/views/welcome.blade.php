<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

    <div class="container">
        <div>
            <h1 class="title">Nos animaux</h1>

            <div class="animal-container">

                @forelse ($animals as $animal)
                    <x-animal :id="$animal->id" :photo="$animal->photo" :name="$animal->name" :species="$animal->species" :age="$animal->age"
                        :description="$animal->description">


                    </x-animal>
                @empty
                    NADA
                @endforelse


            </div>


        </div>
    </div>

@endsection
