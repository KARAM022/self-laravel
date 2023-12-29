<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerTP1 extends Controller
{
    public function etudiant()
    {
        $data = [];
        $data['nom'] = 'karam';
        $data['prenom'] = 'ouafik';
        $data['poste'] = 'stagiare';
        $data['modules'] = ['developper en frantend', 'developper en backend', 'Gestion des donnees'];

        return view('affichage', $data);
    }
}
