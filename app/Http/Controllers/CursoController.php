<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
      $cursos = Curso::orderBy('id','desc')->get();
      return view('curso.listar',compact('cursos'));
    }

    public function create()
    {
        return view('curso.create');
    }

  
    public function store(Request $request)
    {
        $name=$request->input('name');
        $description=$request->input('description');

        Curso::create([
            'name'=>$name,
            'description'=>$description,


        ]);

        echo 'guardado';
    }


    
public function show(Curso $curso){
   
     
    return view('curso.show',compact('curso'));
}
    
public function destroy(Curso $curso){
    $curso->delete();
    return redirect()->route('curso.index');
}
}

