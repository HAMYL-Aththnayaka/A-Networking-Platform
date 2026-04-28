<?php

namespace App\Http\Controllers;

use App\Models\Yzz;
use Illuminate\Http\Request;

class memberController extends Controller
{
    public function index()
    {   //fetch all records and pass it into index view
        $names = Yzz::orderBy("created_at","desc")->paginate(10);
        return view("Yzz.index",["names"=> $names]);
    }

    public function show($id)
    {    //fetch asingle record and pass into show view
        $names =Yzz::findOrFail($id);
        return view("Yzz.show",["names"=>$names]);
    }

    public function create(){
        //render a create view (with web form) to user
         return view('Yzz.create');
    }

    public function store(){
        //handle post request to store a new member record in table
    }


}
