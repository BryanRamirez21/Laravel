<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class cursoController extends Controller
{
    public function index(){
        $cursos = Curso::orderBy('id', 'desc')->paginate();

        return view('cursos.index', compact('cursos'));
    }

    public function create(){
        return view('cursos.create');
    }

    public function show($id){
        $curso = Curso::find($id);

        return view('cursos.show', ['curso'=>$curso]);
    }

    public function store(Request $request){
        //return $request->all(); this prints all the requested information in json but doesnt do anything
        $request->validate([//This works as an if, where if our info is empty, it returns
            'name' => 'required|max:10',
            'description' => 'required|min:10',
            'category' => 'required'
        ]);
        
        $curso = new Curso();
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;
        $curso->save();

        return redirect()->route('cursos.category', $curso);
    }

    public function edit(Curso $curso){//this does the exact same thing as bellow
        /* this finds a returns the object wich id its the same as the get in the param (wich was "$id")
        $curso = Curso::find($id);
        return $curso;
        */

        //return $curso; this does the same thing as above but only use this return

        return view('cursos.edit', compact('curso'));
    }

    public function update(Request $request, Curso $curso){
        $request->validate([//This works as an if, where if our info is empty, it returns
            'name' => 'required',
            'description' => 'required',
            'category' => 'required'
        ]);
        
        $curso->name = $request->name;
        $curso->description = $request->description;
        $curso->category = $request->category;

        $curso->save();
        return redirect()->route('cursos.category', $curso);
    }
}
