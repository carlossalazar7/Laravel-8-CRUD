<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Curso;

class CursosController extends Controller
{
    //
    public function index(){
        $cursos = Curso::paginate();
         return view('cursos.index', compact('cursos'));
        // return $cursos;
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
      //  compact('curso'); // 
    $curso = Curso::find($id);
    //return $curso;
    // return view('cursos.show', ['curso' => 'curso' ]);
    return view('cursos.show', compact('curso'));
    }
}
