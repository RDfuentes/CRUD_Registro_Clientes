@extends ('layouts.admin')
@section ('contenido')
    <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8">
        <div class="col-lg-12 col-md-8 col-sm-8 col-xs-8"> <br>
            <h3 class="text-center">Nuevo Cliente</h3>
            @if (count($errors)>0)
            <div class="alert alert-danger">
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
                </ul>
            </div> 
            @endif

            {!!Form::open(array('url'=>'personas/clientes','method'=>'POST','autocomplete'=>'off'))!!}
            {{Form::token()}}

                <div class="form-group">
                    <label for="codigo_raiz"></label>
                    <input type="number" name="codigo_raiz" class="form-control" placeholder="Codigo Original Cliente" id="">
                </div>
                <div class="form-group">
                    <label for="codigo_reciente"></label>
                    <input type="number" name="codigo_reciente" class="form-control" placeholder="Codigo Reciente Cliente" id="">
                </div>
                <div class="form-group">
                    <label for="nombre"></label>
                    <input type="text" name="nombre" class="form-control" placeholder="Nombre Cliente" id="">
                </div>
                <div class="form-group">
                    <label for="apellido"></label>
                    <input type="text" name="apellido" class="form-control" placeholder="Apellido Cliente" id="">
                </div>
                <div class="form-group">
                    <label for="telefono"></label>
                    <input type="number" name="telefono" class="form-control" placeholder="Telefono Cliente" id="">
                </div>
                <div class="form-group">
                    <label for="nota"></label>
                    <input type="text" name="nota" class="form-control" placeholder="Notas" id="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Guardar</button>
                    <a class="btn btn-danger" href="{{ url('/personas/clientes') }}">Cancelar</a>
                </div>
            {!!Form::close()!!}

        </div>
    </div>
@endsection