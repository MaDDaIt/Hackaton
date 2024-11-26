<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RecepcionController extends Controller
{
    public function index()
    {
        return view('recepcion.index');
    }
}
