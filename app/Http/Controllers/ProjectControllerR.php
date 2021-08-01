<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;
use App\Http\Requests\CreateProjectRequest;


class ProjectControllerR extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$portfolio = DB::table('projects')->get();//sin orm
         
        return view('portfolio', [
            'portfolio' => Project::get()//con Eloquent

        ]);
    }

    public function show($id){
        return view('projects.show',[
            'projecto' => Project::findOrFail($id)
        ]);

    }

    public function create(){
        return view('projects.create');
    }

    public function store(CreateProjectRequest $request){

        // $fields = request()->validate([
        //     'title' => 'required',
        //     'url' => 'required',
        //     'description' =>'required',
        // ]);
        

        Project::create($request->validated());//form request

        return redirect()->route('portfolio.index');
    }

    public function edit(Project $project){
        return view('projects.edit',[
            'projecto' => $project
        ]);
    }
    
}
