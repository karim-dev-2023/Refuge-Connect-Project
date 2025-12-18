<!-- resources/views/welcome.blade.php -->
@extends('layouts.app')
@section('title', 'Accueil')
@section('content')

    <div style="flex:1;display:flex;align-items:center;justify-content:center;">
        <div style="width:100%;max-width:980px;padding:38px 18px 26px;">
            <h1 style="margin:0 0 26px;text-align:center;font-size:42px;letter-spacing:-.5px;color:#0b1220;">Nos
                animaux</h1>

            <div style="display:flex;gap:22px;justify-content:center;flex-wrap:wrap;">

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