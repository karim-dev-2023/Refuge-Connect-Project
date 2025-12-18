@extends('layouts.app')
@section('title', 'Accueil')
@section('content')
    <div style="width: 100%; font-family: Arial, sans-serif;">
        <div style="max-width: 900px; margin: 0 auto; padding: 30px 16px; text-align: center;">
            <div style="font-size: 36px; font-weight: 700; color: #111111; margin-bottom: 22px;">
                {{ $item->name }}
            </div>

            <div style="display: inline-flex;align-items: center;gap: 28px;padding: 18px 26px;border-radius: 10px;">
                <div style="width: 140px;height: 140px;overflow: hidden;display: flex;align-items: center;justify-content: center;">
                    <img src="{{ Storage::url($item->photo) }}" alt="Chien"
                        style="width: 100%; height: 100%; object-fit: cover; display: block;" />
                </div>

                <div style="text-align: left; max-width: 520px; font-weight: 700; font-size: 16px;">
                    <div style="font-size: 16px; color: #111111; margin-bottom: 40px;">
                        <span style="font-weight: 700;">Espèce :</span>
                        <span style=""> {{ $item->species }}</span>
                    </div>

                    <div style="font-size: 16px; color: #111111; margin-bottom: 30px;">
                        <span >Age :</span>
                        <span > {{ $item->age }} ans</span>
                    </div>

                    <div style="font-size: 15px; color: #333333;">
                        {{ $item->description }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection