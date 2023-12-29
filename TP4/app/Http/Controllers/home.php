<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function salam() {
        return view("salam", ['nom' => 'Karam']);
    }
    public function hello($nom) {
        return view("hello", ['nom' => $nom]);
    }
}
