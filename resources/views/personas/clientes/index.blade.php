@extends ('layouts.admin') 
@section ('contenido')
   <div class="row">
        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
            <br>
            <h3 class="text-center">Listado de Clientes <a href="clientes/create" > <button class="btn btn-success">Nuevo Cliente</button> </a></h3>
            @include('personas.clientes.search') <br>
        </div>
   </div>

   <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
        <div class=" col-lg-12 col-md-8 col-sm-8 col-xs-8"></div>
        <div class="table-responsive">
            <table class="table table-striped table-bordered table-condensed table-hover"> <!-- hacer la tabla responsive-->
                <thead>
                    <th>Id</th>
                    <th>codigo_raiz</th>
                    <th>codigo_reciente</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>telefono</th>
                    <th>nota</th>
                </thead>

                @foreach ($clientes as $clien)
                <tr>
                    <td>{{$clien->id_cliente}}</td>
                    <td>{{$clien->codigo_raiz}}</td>
                    <td>{{$clien->codigo_reciente}}</td>
                    <td>{{$clien->nombre}}</td>
                    <td>{{$clien->apellido}}</td>
                    <td>{{$clien->telefono}}</td>
                    <td>{{$clien->nota}}</td>
                    <td>
                        <a href="{{URL::action('ClientesController@edit',$clien->id_cliente)}}"><button class="btn btn-info">Editar</button></a>
                        <a href="" data-target="#modal-delete-{{$clien->id_cliente}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
                    </td>
                </tr>
                <!-- incluimos al modal.blade.php (se hace antes de culminar el foreach)-->
                @include('personas.clientes.modal')
                @endforeach
            </table>
        </div>
        {{$clientes->render()}}
   </div>
@endsection  