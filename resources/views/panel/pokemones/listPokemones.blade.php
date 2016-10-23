@extends('panel.index')

@section('content')

<div class="col-xs-12">
    <a href="{!! route('create.pokemones') !!}" class="btn btn-xs btn-primary"><i class="fa fa-plus"></i> Nuevo</a>
</div>
<br>
<br>
<div class="col-xs-12">
    <form action="#" method="get">
        <div class="input-group">
            <!-- USE TWITTER TYPEAHEAD JSON WITH API TO SEARCH -->
            <input class="form-control" id="system-search" name="q" placeholder="Buscar por" required>
            <span class="input-group-btn">
                <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
            </span>
        </div>
    </form>
</div>
<div class="col-xs-12">
    <table class="table table-list-search">
        <thead>
            <tr>
                <th>#id</th>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Tipos</th>
                <th>Sexo</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @if($pokemones->count() > 0)
                @foreach($pokemones as $pokemon)

                    <tr>
                        <td>{!! $pokemon->id !!}</td>
                        <td>{!! $pokemon->nombre !!}</td>
                        <td>{!! $pokemon->especies->nombre !!}</td>
                        <td>
                            <ul>
                            @foreach($pokemon->especies->tipos as $tipos)
                                <li>{!! $tipos->nombre !!}</li>
                            @endforeach
                            </ul>

                        </td>
                        <td>{!! $pokemon->sexos->nombre !!}</td>
                        <td>
                            <div class="btn-group-xs" role="group" >
                                <a href="{!! route("edit.pokemones",$pokemon->id) !!}" class="btn btn-success"><i class="fa fa-edit"></i></a>
                                {!! Form::open(['route' => "destroy.pokemones",'class' => "btn btn-group", "role" => "group","method" => "post"]) !!}
                                    {!! Form::hidden("id",$pokemon->id) !!}

                                    <button type="submit" class="btn btn-xs btn-danger"><i class="fa fa-trash"></i></button>

                                {!! Form::close() !!}
                            </div>
                        </td>
                    </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No tenés pokemones cargados todavia</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>

@endsection