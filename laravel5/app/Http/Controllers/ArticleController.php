<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
  // Dans ce contrôleur on a une méthode show chargée de générer la vue
    public function show($n)
    {
      return view('article')->with('numero', $n);
    }
}
