<?php

namespace App\Http\Controllers;
use App\Project;
use Illuminate\Http\Request;
use App\Http\Requests\CreateProjectRequest;

class ContactoController extends Controller
{

    public function __construct(){
        $this->middleware('auth')->except('index', 'show');
    }

    public function index()
    {
        $arreglo = Project::orderBy('id', 'DESC')->get();
        return view('Contacto', compact('arreglo'));
    }

    public function show($id){
        $project = Project::findOrFail($id);

        return view('project.show', [
                'project' => $project
        ]);
    }
    
    public function create(){
        return view('project.create', [
            'project' => new Project
        ]);
    }

    public function store(CreateProjectRequest $request){

        Project::create($request->validated());

        return redirect()->route('contacto.index')->with('status', 'El proyecto ha sido creado con éxito');
    }

    public function edit(Project $project){
        return view('project.edit',[
            'project' => $project
        ]);
    }

    public function update(Project $project, CreateProjectRequest $request){
        $project->update($request->validated());

        return redirect()->route('contacto.show', $project)->with('status', 'El proyecto fue actualiado');
    }

    public function destroy(Project $project){
        $project->delete();
        return redirect()->route('contacto.index')->with('status', 'El proyecto fue eliminado');
    }
}
