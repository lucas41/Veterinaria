<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  Illuminate\Support\Facades\DB;


class CaesController extends Controller
{
    public function index()
    {
        return view('home');
    }
    public function caes()
    {
        $caes = DB::select('select * from caes');

        return view('cao') -> with('caes', $caes);
    
    }

    public function formulario () {

        return view('cadastro');
        }
    
    public function cadastro(Request $request)
    {

       
            
            $nome = $request->input('nome');
            $raca = $request->input('raca');
            
            DB::select('insert into caes (nome, raca) values (?, ?)' , [$nome, $raca]);
            return redirect('/caes');
            


    
        
    }

public function deletar (){

    $linhasAfetadas = DB::delete('delete from caes where id = ?', [$id]);
    return redirect('/caes');

}    


}
