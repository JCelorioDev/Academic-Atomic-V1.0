<?php

namespace App\Http\Controllers;

use App\Models\Personas;
use Illuminate\Http\Request;

class PersonasController extends Controller
{
    public function Home(){
        return view('welcome');
    }
    public function Index (){
        $P = Personas::all();
        return view('Formulario.ventanaprincipal',compact('P'));
    }

    public function Save(Request $request){
        $personas = new Personas();
        $personas->Nombre = $request->nombre_person;
        $personas->Apellido = $request->apellido_person;
        $personas->Cedula = $request->cedula_person;
        $personas->Avatar = $request->avatar_person;
        $personas->save();
        return back();
    }

    public function EdicionPerson($Id){
        $personas = Personas::find($Id);
        return view('Formulario.ventanasecundaria',compact('personas'));
    }

    public function ActualizarPerson(Request $request,$Id){
        $personas = Personas::find($Id);
        $personas->Nombre = $request->nombre_person;
        $personas->Apellido = $request->apellido_person;
        $personas->Cedula = $request->cedula_person;
        $personas->Avatar = $request->avatar_person;
        $personas->save();
        return redirect('Persona');
    }
}
