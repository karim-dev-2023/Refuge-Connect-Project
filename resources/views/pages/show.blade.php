@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <section class="animal-details">
        <div class="animal-details-container">
            <h1 class="animal-details-title">
                {{ $animal->name }}
            </h1>

            <article class="animal-details-card">
                <figure class="animal-details-image-wrapper">
                    <img src="{{ asset($animal->photo) }}" alt="{{ $animal->name }}" />
                </figure>

                <div class="animal-details-info">
                    <p>
                        <span>Espèce :</span>
                        <span>{{ $animal->species }}</span>
                    </p>

                    <p>
                        <span>Age :</span>
                        <span>{{ $animal->age }} ans</span>
                    </p>

                    <p>
                        {{ $animal->description }}
                    </p>
                </div>
            </article>
        </div>
    </section>

@endsection
