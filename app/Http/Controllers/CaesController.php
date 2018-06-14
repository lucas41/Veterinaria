<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;
Use App\veterinaria;
use App\Http\Requests\ProdutoRequest;

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
    
    public function cadastro(ProdutoRequest $request)
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
public function editar($id){
    $editar = veterinaria::find($id);
 return view('editar')->with('cao',$editar);
}
    public function update(Request $request, $id){
        $data = $request->all();
        $caes = veterinaria::find($id);
        $caes->fill($data);
        $caes->save();
        return redirect('/caes');
    }
}

