<?php

namespace App\Http\Controllers;
use App\Models\Pastel;
use Illuminate\Http\Request;

class Pastelescontroller extends Controller
{
    public function index(){
        $pasteles= Pastel::all();
        return view('pasteles/inicio',compact('pasteles'));
    }
    public function create()
{
    $pasteles = Pastel::get(); 
    return view('pasteles.create',compact('pasteles'));
}
public function store(Request $request)
{
$pasteles = new Pastel();
$pasteles->nombre = $request->get('nombre');
$pasteles->sabor = $request->get('sabor');
$pasteles->imagen = $request->get('imagen');
$pasteles->save();
return view('pasteles/inicio',compact('pasteles'));
}


public function destroy($id){
    $pasteles= Pastel::findOrFail($id);
    $pasteles -> delete();
    $pasteles= Pastel::all();
    return view('pasteles/inicio',compact('pasteles'));

}
}
