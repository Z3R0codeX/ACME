<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blueprint;

class BlueprintController extends Controller
{
    public function getBlueprint(){
        
        $data = Blueprint::all();

       // dd($data);

       return view("admin.planos")
        ->with('blueprint',$data);

    }

    public function createBlueprint(Request $request){

        //dd($request->all());

        $request->validate([
            'name' => 'required|min:3|',
            'description' => 'required|min:3',
            'version' => 'required|integer',
        ]);

        $blueprint = new Blueprint();

        $blueprint->name = $request->input('name');
        $blueprint->description = $request->input('description');
        $blueprint->version = $request->input('version');

        $blueprint->save();

        return redirect('/planos')
        ->with('success','Plano insertado correctamente');

    }

}
