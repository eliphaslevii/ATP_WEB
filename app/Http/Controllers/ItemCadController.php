<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ItemCadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('item');
    }

    public function store(Request $request)
    {

        $this->validate($request,[

            'cod_item' => 'unique:item_table'
        ],[
            'cod_item.unique' => ""
        ]);

        $nome_item = $request->input('nome_item');
        $desc_item = $request->input('desc_item');
        $cod_item = $request->input('cod_item');
        $created_item_data = Carbon::now();

        $data = array('nome_item'=>$nome_item,'desc_item'=>$desc_item,'cod_item'=>$cod_item,'created_item_data'=>$created_item_data);

        try
        {
            DB::table('item_table')->insert($data);
            return back()->with('Success','Sucesso!');

        }

        catch (Exception $e)
        {
            return back()->with('errors');
        }



    }
}
