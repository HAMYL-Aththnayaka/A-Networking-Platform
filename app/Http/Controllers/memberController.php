<?php

namespace App\Http\Controllers;

use App\Models\Yzz;
use Illuminate\Http\Request;
use App\Models\Locations;

class memberController extends Controller
{
   public function index()
{
    $names = Yzz::with('location')->latest()->paginate(10);

    return view("Yzz.index", ["names" => $names]);
}

    public function show(Yzz $member)
    {    //fetch asingle record and pass into show view
        $member->load('location');
        return view("Yzz.show",["names"=>$member]);
    }

    public function create(){
        //render a create view (with web form) to user
        $locations = Locations::all();


         return view('Yzz.create',["locations"=>$locations]);
    }

    public function store(Request $request){
        //handle post request to store a new member record in table
       $validated = $request->validate([
            "name"=>"required|string|max:255",
            "skill"=>"required|integer|min:0|max:100",
            "bio"=>"required|string|min:20|max:255",
            "location_id"=>"required|exists:locations,id"
        ]);
        Yzz::create($validated);
        return redirect()->route("Yzz.index")->with("success","Member created successfully");
    }

    public function destroy(Yzz $member){
        //handle delete request to delete a record from table
        $member->delete();
        return redirect()->route("Yzz.index")->with("success","Member deleted successfully");
    }

}
