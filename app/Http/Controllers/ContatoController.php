<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function contato()
    {
        // Aqui o que a rota deve fazer, por exemplo:
        return view('site.contato');
    }
}
