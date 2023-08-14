 @extends('layouts/template');

@section('title','Sistema Visitas | Personas')
    
@section('contenido')
<div class="row">
    <div class="col-12">
        <h2 style="text-align: center">PERSONAS</h2>
    </div>
    
</div>
<div class="row">
    <a class="btn btn-primary btn-sm" href="{{url('personas/create')}}"> Nuevo Registro </a>
</div><br>
                    <!-- DataTales Example -->
    <div class="card shadow mb-4">
                       
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Tipo De Documento</th>
                                            <th>Nro. De Documento</th>
                                            <th>Fecha De Nacimiento</th>
                                            <th>Tipo De Persona</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Tipo De Documento</th>
                                            <th>Nro. De Documento</th>
                                            <th>Fecha De Nacimiento</th>
                                            <th>Tipo De Persona</th>
                                            <th>#</th>
                                            <th>#</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($personas as $persona)
                                        <tr>
                                            <td>{{$persona->id}}</td>
                                            <td>{{$persona->nombres}}</td>
                                            <td>{{$persona->apellidos}}</td>
                                            <td>{{$persona->tipo_documento}}</td>
                                            <td>{{$persona->nro_documento}}</td>
                                            <td>{{$persona->fecha_nacimiento}}</td>
                                            <td>{{$persona->tipo_persona}}</td>
                                            <td><a href="{{url('personas/'.$persona->id.'/edit')}}" class="btn btn-primary">Editar</a></td>
                                            <td>
                                                <form action="{{url('personas/'.$persona->id)}}" method="POST">
                                                    @method("DELETE")
                                                    @csrf
                                                    <!-- Button trigger modal -->
                                                    <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#staticBackdrop{{$persona->id}}">
                                                        Eliminar
                                                    </button>
                                                    
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop{{$persona->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel " aria-hidden="true">
                                                        <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                            <h5 class="modal-title" id="staticBackdropLabel">Advertencia...</h5>
                                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                
                                                                ¿Esta Seguro De Eliminar A La Paersona: {{$persona->nombres}} {{$persona->apellidos}}? 
                                                            </div>
                                                            <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary">Aceptar</button>
                                                            </div>
                                                        </div>
                                                        </div>
                                                    </div>
                                                </form> 
                                            </td>
                                            
                                        </tr>
                                        
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
@endsection