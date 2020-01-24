<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;

class NoticiaController extends Controller
{
    public function index() {

        $noticias = Noticia::all();

        $argumentos = array();
        
        $argumentos['noticias'] = $noticias;

        return view('noticias.index', $argumentos);
    
    }

    public function show($id) {

        $noticia = Noticia::find($id);

        $argumentos = array();
        $argumentos['noticia'] = $noticia;

        return view('noticias.show',  $argumentos);
        
    }

} 
