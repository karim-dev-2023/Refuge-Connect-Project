<?php

namespace App\Http\Controllers;

use App\Models\Animals;

class AnimalController extends Controller
{
    public function addAnimal()
    {
        // Méthode rapide avec create()
        $animal = Animals::create([
            'name' => 'Coquillette',
            'species' => 'Chien',
            'age' => 3,
            'description' => 'Une Shiba Inu vive et joyeuse, toujours prête à jouer et à explorer. Coquillette est curieuse, intelligente et très expressive, avec un petit caractère indépendant mais plein de tendresse pour ceux qu’elle aime.',
            'photo' => 'images/animaux/coquillette.png',
        ]);

        if (!$animal) {
            return view('errors.not-found', ["error" => "Échec de la création de l'animal"]);
        }

        return to_route('home');
    }

    public function showAnimal($id)
    {
        // Récupérer un enregistrement par son identifiant
        $animal = Animals::find($id);

        if (!$animal) {
            return view('errors.not-found', ["error" => "Animal non trouvé"]);
        }

        return view('pages.show', ["animal" => $animal]);
    }

    public function updateAnimal($id)
    {
        $animal = Animals::find($id);

        if (!$animal) {
            return view('errors.not-found', ["error" => "Animal non trouvé"]);
        }

        $animal->update([
            'name' => $animal->name . ' modifié'
        ]);

        return to_route('home');
    }

    public function deleteAnimal($id)
    {
        $animal = Animals::find($id);

        if (!$animal) {
            return view('errors.not-found', ["error" => "Animal non trouvé"]);
        }

        $animal->delete();

        return to_route('home');
    }
}
