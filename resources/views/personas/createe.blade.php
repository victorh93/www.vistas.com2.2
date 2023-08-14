
@extends('layouts/template');
@section('title','Sistema Visitas | Registrar Personas')

@section('contenido')
<div class="container">
    
       <h2>Registro de Personas</h2><br>

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

    <form action="{{url('personas')}}" method="post">
        @csrf
            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label ">Nombre:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control form-control-user" id="nombre">
                </div>
                
            </div>
            

            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label  ">Apellidos:</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control-" id="apellidos">
                </div>
                
            </div>
            <div class="row">
                
            </div>
            <br>
            <div class="mb-3 row">
                <div class="col-md-2">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rbuttom" id="rb1">
                        <label class="col-sm-2 form-check-label" for="flexRadioDefault1">
                            C.I.
                        </label>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="rbuttom" id="rb2">
                        <label class="col-sm-2 form-check-label" for="flexRadioDefault2">
                            Otros
                        </label>
                    </div>
                </div>
                
            </div>
            <br>
            <div class="mb-3 row">
                    <label for="" class="col-sm-2 col-form-label ">Nro. Documento:</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control-" id="nro. documento">
                    </div>
                
            </div>

           

            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label ">Fecha De Nacimiento;</label>
                <div class="col-sm-5">
                    <input type="Date" class="form-control-" id="nro. documento">
                </div>
            </div>


            <div class="mb-3 row">
                <label for="" class="col-sm-2 col-form-label ">Tipo Persona</label>
                <div class="col-sm-5">
                    <select name="" id="" class="form-select" required>
                            <option value="Seleccionar">Seleccionar</option>
                            <option value="Administrativo">Administrativo</option>
                            <option value="Medico">Medico</option>
                            <option value="Paciente">Paciente</option>
                    </select>
                </div>
            </div>
            <a href="{{url('personas')}}" class="btn btn-primary">Regresar</a>
            <button type="submit" class="btn btn-success">Guardar</button>

    </form>

        
        
    

</div>
    
@endsection