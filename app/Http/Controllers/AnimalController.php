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

        return to_route('home');
    }

    public function showAnimal($id) {
        // Récupérer un enregistrement par son identifiant
        $animal = Animals::find($id);

        if (!$animal) {
            return "Animal non trouvé";
        }
        return view('animal.show', ["animal" => $animal]);
    }

    public function updateAnimal($id)
    {
        $animal = Animals::findOrFail($id);

        $animal->update([
            'name' => $animal->name . ' modifié'
        ]);

        return 'Mise à jour effectuée';
    }

    public function deleteAnimal($id)
    {
        $animal = Animals::find($id);

        if (!$animal) {
            return 'Animal non trouvé';
        }

        $animal->delete();

        return to_route('home');
    }
}
