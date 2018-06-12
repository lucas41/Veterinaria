<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
Use App\veterinaria;

class CaesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function caes()
    {
        $caes = veterinaria::all();
        return view('cao') -> with('caes', $caes);
    
    }

    public function formulario () {

        return view('cadastro');
        }
    
    public function cadastro(Request $request)
    {

            $caes = new veterinaria();
            
            $caes->nome = $request->input('nome');
            $caes->raca = $request->input('raca');
            
            $caes->save();
            

        return redirect('/caes');
    
        
    }

public function deletar ($id){

    $linhasAfetadas = veterinaria::find($id);
    $linhasAfetadas->delete();
    return redirect('/caes');

}    


}
