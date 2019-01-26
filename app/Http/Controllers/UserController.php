<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function help()
    {
        return 'Ayuda';
    }

    public function comments()
    {
        return 'Comentarios';
    }

    public function preregister()
    {
        return 'Preregistro';
    }
}
