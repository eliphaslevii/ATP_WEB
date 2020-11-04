<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DadosController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function retrieve()
    {
        $retrieve = DB::table('users')
        ->get();
        return view('dados',['retrieve'=>$retrieve]);
    }

    public function store(Request $request)
    {

        $name = $request->input('name');
        $email = $request->input('email');
        $id = $request->input('id');
        $born = $request->input('born');
        $contact = $request->input('contact');

        $data_store = array('name'=>$name,'email'=> $email,'born'=>$born,'contact'=>$contact);

            DB::table('users')
            ->where('id','=', $id)
            ->update($data_store);


            return back()->with('Success','Sucesso!');


    }
}
