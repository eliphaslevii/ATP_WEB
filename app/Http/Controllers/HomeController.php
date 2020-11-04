<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('emprestados');
    }

    public function retrieve()
    {
        $retrieve = DB::table('item_emprestimo')

        ->join('users', 'users.id','=','item_emprestimo.id_funcionario')

        ->join('item_table','item_table.cod_item','=','item_emprestimo.id_item')

        ->select('users.*','item_emprestimo.*','item_table.*')

        ->get();

        return view('emprestados',['retrieve'=>$retrieve]);
    }



}
