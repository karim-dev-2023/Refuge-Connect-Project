@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div style="width: 100%; font-family: Arial, sans-serif;">
        <div style="max-width: 900px; margin: 0 auto; padding: 30px 16px; text-align: center;">
            <div style="font-size: 36px; font-weight: 700; color: #111111; margin-bottom: 22px;">
                {{ $animal->name }}
            </div>

            <div style="display: inline-flex;align-items: center;gap: 28px;padding: 18px 26px;border-radius: 10px;">
                <div style="width: 140px;height: 140px;overflow: hidden;display: flex;align-items: center;justify-content: center;">
                    <img src="{{ Storage::url($animal->photo) }}" alt="Chien"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                </div>

                <div style="text-align: left; max-width: 520px; font-weight: 700; font-size: 16px;">
                    <div style=" margin-bottom: 40px;">
                        <span>Espèce :</span>
                        <span> {{ $animal->species }}</span>
                    </div>

                    <div style="margin-bottom: 30px;">
                        <span >Age :</span>
                        <span > {{ $animal->age }} ans</span>
                    </div>

                    <div style="font-size: 15px; color: #333333;">
                        {{ $animal->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection