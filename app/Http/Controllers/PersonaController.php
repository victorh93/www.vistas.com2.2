<?php

namespace App\Http\Controllers;

use App\Models\persona;
use Faker\Provider\ar_EG\Person;
use Illuminate\Http\Request;


class PersonaController extends Controller
{
    /**
     * index es para mostrar resultados como se una tabla
     */
    public function index()
    {
      $per= persona::all();
      return view('personas.index',['personas'=>$per]);

    }

    /**
     * 
     * como su nombre lo indica es para crear nuevos datos
     */
    public function create()
    {
        return view('personas.create');
    }

    /**
     * Almacene un recurso recién creado en el almacenamiento.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombres'=>'required|max:30',
            'apellidos'=>'required|max:30',
            'fechaNac'=>'required|date',
            'rbuttom'=>'required|max:20',
            'nroDoc'=>'required|max:9|unique:personas,nro_documento',
            'select1'=>'required|in:"Administrativo", "Medico","Paciente"'
            

        ]);

        $Per=new Persona();
        $Per->nombres=$request->input('nombres');
        $Per->apellidos=$request->input('apellidos');
        $Per->fecha_nacimiento=$request->input('fechaNac');
        $Per->tipo_documento=$request->input('rbuttom');
        $Per->nro_documento=$request->input('nroDoc');
        $Per->tipo_persona=$request->input('select1');
        $Per->estado='Activo';
        $Per->save();

        return view("personas.message",['msg' => "Registro Guardado"]);
    }

    /**
     * 
     * 
    *Muestra el recurso especificado.
     */
    public function show(persona $persona)
    {
        //
    }

    /**
     * Muestra el formulario para editar el recurso especificado.
     */
    public function edit($id)
    {
        $per= persona::find($id);
        return view("personas.edit",['personas' => $per]);
    }

    /**
     * Actualice el recurso especificado en el almacenamiento.
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'nombres'=>'required|max:30',
            'apellidos'=>'required|max:30',
            'fechaNac'=>'required|date',
            'rbuttom'=>'required|max:20',
            'nroDoc'=>'required|max:9|unique:personas,nro_documento,'.$id,
            'select1'=>'required|in:"Administrativo", "Medico","Paciente"'
            

        ]);

        $Per= persona::find($id);
        $Per->nombres=$request->input('nombres');
        $Per->apellidos=$request->input('apellidos');
        $Per->fecha_nacimiento=$request->input('fechaNac');
        $Per->tipo_documento=$request->input('rbuttom');
        $Per->nro_documento=$request->input('nroDoc');
        $Per->tipo_persona=$request->input('select1');
        $Per->save();

        return view("personas.message",['msg' => "Registro Editado..."]);
    }

    /**
     * 
     *   Elimina el recurso especificado del almacenamiento.
     */
    public function destroy($id)
    {
        $per=persona::find($id);
        $per->delete();
        return redirect("personas");
    }
}
