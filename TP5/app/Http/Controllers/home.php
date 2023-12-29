<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class home extends Controller
{
    public function blads(){
        return view("blads", [
            'nom' => 'Karam',
            'languages' => [
                "php",
                "js",
                "c",
                "python"
            ]
        ]);
    }
}
