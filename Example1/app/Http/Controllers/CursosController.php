<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    //
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();
         return view('cursos.index', compact('cursos'));
        // return $cursos;
    }

    public function create(){
        return view('cursos.create');
    }

    public function store(Request $request){

        $request->validate([
            'name' => 'required',
            'descripcion' => 'required',
            'categoria' => 'required'
        ]);
        //return $request->all();
        $curso = new Curso();

        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();

        return redirect()->route('cursos.show', $curso); return redirect()->route('cursos.show', $curso);
    }
    public function show(Curso $curso){
    //   //  compact('curso');  
    // $curso = Curso::find($id);
    //return $curso;
    // return view('cursos.show', ['curso' => 'curso' ]);
        return view('cursos.show', compact('curso'));
    }

    public function edit(Curso $curso){
        return  view('cursos.edit', compact('curso'));
    }
    // crear una instancia de del modelo curso
    public function update(Curso $curso, Request $request){
        $curso->name = $request->name;
        $curso->descripcion = $request->descripcion;
        $curso->categoria = $request->categoria;
        $curso->save();
        // return $curso;
        return redirect()->route('cursos.show', $curso);
    }
}


