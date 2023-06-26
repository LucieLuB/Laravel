<?php

namespace App\Http\Controllers;

use App\Models\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
{
    public function show($id)
    {
        $noticia = Noticia::find($id);
        return view('show', compact('noticia'));
    }

    public function apiShow($id)
    {
        $noticia = Noticia::find($id);

        if (!$noticia) {
            return response()->json(['error' => 'Noticia no encontrada'], 404);
        }

        return response()->json($noticia);
    }

    public function getFirstPage()
    {
        $noticias = Noticia::paginate(10); // Obtener las noticias paginadas, 10 por página

        return response()->json($noticias);
    }
}
