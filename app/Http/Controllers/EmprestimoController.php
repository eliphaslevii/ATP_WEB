<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class EmprestimoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('emprestimo');

    }

    public function store(Request $request)
    {
        $id_funcionario = Auth::user()->id;
        $id_item = $request->input('id_item');
        $data_emprestimo = Carbon::now();
        $data_devolucao = $request->input('data_devolucao');
        $status = ('1');

        $data = array('id_funcionario'=>$id_funcionario,'id_item'=>$id_item,'data_emprestimo'=>$data_emprestimo,
        'data_devolucao'=>$data_devolucao,'status'=>$status);

        try
        {
            DB::table('item_emprestimo')->insert($data);

            return back()->with('Success','Sucesso!');
        }
        catch(Exception $e)
        {
            return back()->with('errors','errors');
        }


    }



}
