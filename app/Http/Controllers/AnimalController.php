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

    public function showAnimal($id) {
        // Récupérer un enregistrement par son identifiant
        $item = Animals::find($id);

        if (!$item) {
            return "Animal non trouvé";
        }
        return view('welcome', ["article" => $item]);
    }

    public function updateAnimal($id)
    {
        $article = Animals::findOrFail($id);

        $article->update([
            'name' => $article->name . ' modifié'
        ]);

        return 'Mise à jour effectuée';
    }

    public function deleteAnimal($id)
    {
        $article = Animals::find($id);

        if (!$article) {
            return 'Animal non trouvé';
        }

        $article->delete();

        return 'Suppression effectuée';
    }
}
