<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashController extends Controller
{
    
    public function index()
    {

        if (isset($_GET['logado']) AND $_GET['logado'] == 1 )
        {
            return view('dashboard.home');
        }
        else
        {
            return view ('dashboard.login');
        }

    }

    public function forms()
    {
        return view ('dashboard.forms');
    }

    public function list()
    {
        return view ('dashboard.list');
    }

    public function login()
    {
        
    }

    public function recuperar()
    {
        return view ('dashboard.recuperar-senha');
    }

    public function resetar()
    {
        return view ('dashboard.resetar-senha');
    }


}

/*

*/
