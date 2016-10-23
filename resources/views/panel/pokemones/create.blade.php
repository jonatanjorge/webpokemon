@extends('panel.index')

@section('content')
    <div class="col-xs-6 col-xs-offset-3">

        <h3>Crear pokemon</h3>

        @if(isset($pokemon))
            {!! Form::model($pokemon,["route" => ["update.pokemones",$pokemon->id],"method" => "post"]) !!}

        @else
        {!! Form::open(["route" => "store.pokemones","method" => "post"]) !!}
        @endif
            <div class="form-group">
                {!! Form::label("nombre","Nombre") !!}
                {!! Form::text("nombre",null,["id" => "nombre","placeholder"=> "Ingrese nombre del pokemon","class" => "form-control"]) !!}
            </div>
            {{--<div class="input-group image-preview">--}}
                {{--<input type="text" class="form-control image-preview-filename" disabled="disabled">--}}
                {{--<span class="input-group-btn">--}}

						{{--<button type="button" class="btn btn-default image-preview-clear" style="display:none;">--}}
							{{--<span class="glyphicon glyphicon-remove"></span> Limpiar--}}
						{{--</button>--}}

						{{--<div class="btn btn-default image-preview-input">--}}
							{{--<span class="glyphicon glyphicon-folder-open"></span>--}}
							{{--<span class="image-preview-input-title">Buscar</span>--}}
							{{--<input type="file" accept="image/png, image/jpeg, image/gif" name="fotoPokemon"/>--}}
						{{--</div>--}}
					{{--</span>--}}
            {{--</div>--}}
            {{--<br />--}}
        <div class="form-group">
            {!! Form::label("nivel","Nivel") !!}
            {!! Form::text("nivel",null,["id" => "nivel","placeholder"=> "Ingrese nivel del pokemon","class" => "form-control"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label("sexos_id","Sexo") !!}
            {!! Form::select("sexos_id",$listadoSexos,null,["id" => "sexo","class" => "form-control"]) !!}
        </div>

        <div class="form-group">
            {!! Form::label("especies_id","Especies") !!}
            {!! Form::select("especies_id",$listadoEspecies,null,["class" => "form-control"]) !!}
        </div>


            <button type="submit" class="btn btn-default">Cargar</button>
        {!! Form::close() !!}
    </div>

@endsection
