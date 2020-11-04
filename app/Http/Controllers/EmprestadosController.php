<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmprestadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrieve()
    {

    }
}
