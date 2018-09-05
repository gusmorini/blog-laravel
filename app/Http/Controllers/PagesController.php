<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('home.templates.home');
    }

    public function empresa()
    {
        return view ('home.templates.empresa');
    }

    public function categoria()
    {
        return view ('home.templates.categoria');
    }

    public function contato()
    {
       return view ('home.templates.contato'); 
    }

}