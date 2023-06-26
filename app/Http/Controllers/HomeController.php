<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Obtener las 2 noticias reales
        $noticiasReales = Noticia::whereIn('id', [1, 2])->get();

        // Obtener 3 noticias ficticias
        $noticiasFicticias = Noticia::whereNotIn('id', [1, 2])->limit(3)->get();

        // Combinar las noticias reales y ficticias
        $noticias = $noticiasReales->concat($noticiasFicticias);

        return view('home', compact('noticias'));
    }
}
