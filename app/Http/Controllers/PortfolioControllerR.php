<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Project;

class PortfolioControllerR extends Controller
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

    
}
