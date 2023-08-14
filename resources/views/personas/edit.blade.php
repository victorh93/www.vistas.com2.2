@extends('layouts/template');
@section('title','Sistema Visitas | Editar Personas')

@section('contenido')



    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Editar  Personas</h1>
                            </div>
                                <!--  aqui validamos los cada campo  que tenemos dentro de nuestro formulario  con blade-->
                                @if ($errors->any())
                                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                        
                                        <ul>
                                            @foreach($errors ->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">&times;</span></button>
                                    </div>
                                @endif

                            <form class="user" action="{{url('personas/'.$personas->id)}}" method="post">
                                @method("PUT")
                                @csrf
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" class="form-control form-control-user" name="nombres" id="nombres"
                                            placeholder="Nombre Completo" value="{{$personas->nombres}}">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" class="form-control form-control-user" name="apellidos" id="apellido"
                                            placeholder="Apellidos" value="{{$personas->apellidos}}">
                                    </div>
                                </div>
                                <div class="form-group row">
                                        <div class="col-sm-4 mb-3 mb-sm-0">
                                            <label class=" form-check-label" for="flexRadioDefault1" >
                                               Tipo Documento
                                            </label>
                                        </div>
                                    

                                        @if($personas->tipo_documento == 'C.I.')
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="form-check">
                                                                                            
                                                    <input class="form-check-input" type="radio" name="rbuttom" id="C.I." value="C.I." checked="true">

                                                    <label class=" form-check-label" for="flexRadioDefault1">
                                                        C.I.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="form-check">
                                                
                                                    <input class="form-check-input" type="radio" name="rbuttom" id="Otros" value="Otros" >
                                                    <label class=" form-check-label" for="flexRadioDefault2">
                                                        Otros
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                        @if($personas->tipo_documento == 'Otros')
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="form-check">
                                                                                            
                                                    <input class="form-check-input" type="radio" name="rbuttom" id="C.I." value="C.I." >

                                                    <label class=" form-check-label" for="flexRadioDefault1">
                                                        C.I.
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="col-sm-4 mb-3 mb-sm-0">
                                                <div class="form-check">
                                                
                                                    <input class="form-check-input" type="radio" name="rbuttom" id="Otros" value="Otros" checked="true">
                                                    <label class=" form-check-label" for="flexRadioDefault2">
                                                        Otros
                                                    </label>
                                                </div>
                                            </div>
                                        @endif
                                        
                                     
                                        
                                    
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0"><br>
                                        <input type="text" class="form-control form-control-user"
                                            id="nroDoc" name="nroDoc" placeholder="Nro. Documento" value="{{$personas->nro_documento}}">
                                    </div>
                                    <div class="col-sm-6">
                                        Nacimiento<input type="date" class="form-control form-control-user"
                                            id="fechaNac" name="fechaNac" value="{{$personas->fecha_nacimiento}}">
                                    </div>
                                </div><br>

                                <div class="form-group row">
                                    <div class="col-sm-6 ">
                                        <select name="select1" id="select1" class="form-control rounded-pill" required>
                                            @if($personas->tipo_persona == 'Administrativo' )
                                                <option value="Tipo Persona">Tipo Persona</option>
                                                <option value="Administrativo"  selected>Administrativo</option>
                                                <option value="Medico">Medico</option>
                                                <option value="Paciente">Paciente</option>
                                            @endif
                                            @if($personas->tipo_persona == 'Medico' )
                                                <option value="Tipo Persona">Tipo Persona</option>
                                                <option value="Administrativo">Administrativo</option>
                                                <option value="Medico" selected>Medico</option>
                                                <option value="Paciente">Paciente</option>
                                            @endif
                                            @if($personas->tipo_persona == 'Paciente' )
                                                <option value="Tipo Persona">Tipo Persona</option>
                                                <option value="Administrativo">Administrativo</option>
                                                <option value="Medico" >Medico</option>
                                                <option value="Paciente" selected>Paciente</option>
                                            @endif

                                            
                                        </select>
                                    </div>

                                </div>
                                <button  class="btn btn-primary btn-user btn-block" type="submit">
                                    Guardar
                                </button>
                                
                                <a href="{{url('personas')}}" class="btn btn-google btn-user btn-block">
                                    <i class="fa fa-floppy-o fa-5x" aria-hidden="true"></i> Regresar
                                </a>
                               
                            </form>
                            <hr>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    
  


@endsection