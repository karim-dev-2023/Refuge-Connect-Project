<?php

namespace App\Http\Controllers;

use App\Models\Animals;
use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function addAnimal()
    {
        // Méthode rapide avec create()
        Animals::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
            'photo' => 'images/animaux/coquillette.png',
        ]); 

        return "Ajout éffectué";
    }
}
