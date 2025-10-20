<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function principal()
    {
        return view('site.principal');
    }
}
