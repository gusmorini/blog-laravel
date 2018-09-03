<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    
    public function index()
    {
        return view('welcome');
    }

    public function amigos()
    {
        $amigos = [
            ['nome'=>'José', 'idade'=>22],
            ['nome'=>'Maria', 'idade'=>18],
            ['nome'=>'Dunha', 'idade'=>30],
        ];
        return $amigos;
    }

    public function sobre()
    {
    	$eu = [
    		'nome'=>'Gustavo Morini',
    		'idade'=>31
    	];

    	//return $eu;
    	return view ('sobre', compact('eu'));
    }


}
