<?php

namespace App\Http\Controllers;
use App\Models\mi_model;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;

class mi_control extends Controller
{
    public function index()

    {

        $Datos=ubications::get();

        return view('index', compact('Datos'));
        

    }
}
