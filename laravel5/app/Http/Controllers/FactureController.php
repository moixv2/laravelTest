<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactureController extends Controller
{
  // Dans ce contrôleur on a une méthode show chargée de générer la vue
    public function show($n)
    {
      return view('facture')->with('numero', $n);
    }
}
