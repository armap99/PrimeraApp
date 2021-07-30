<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;

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

    public function store(){
        $tilte = request('title');
        $url = request('url');
        $description = request('description');

        Project::create([
            'title' => $tilte,
            'url' => $url,
            'description' => $description,
        ]);

        return redirect()->route('portfolio.index');
    }
    
}
