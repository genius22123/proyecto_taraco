@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar Item de Galeria</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($portfolio,['route' => ['admin.portfolios.update',$portfolio],'method'=>'put', 'files'=>true ]) !!}

        <div class="form-group">
            {!! Form::label('title', 'titulo') !!}
            {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingres un nombre de la categoria']) !!}
        
            @error('title')
                <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div class="form-group">
            {!! Form::label('extract', 'Extracto') !!}
            {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingres un Slug de la categoria']) !!}

            @error('extract')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="row mb-5">
            <div class="col">
                <div class="image-wrapper">
                <img id="picture" src="{{Storage::url($portfolio->url)}}" alt="">
            </div>
        </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('url', 'Imagen que se mostrara en el post') !!}
                    {!! Form::file('url', ['class'=>'form-control-file','accept'=>'image/*']) !!}            
                </div>
                @error('url')
                    <span class="text-danger">{{$message}}</span>
                @enderror
            </div>
        </div>
        {!! Form::submit('Actualizar Item de Galeria', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop

@section('js')
    <script>
        document.getElementById("url").addEventListener('change', cambiarImagen);

function cambiarImagen(event){
    var file = event.target.files[0];

    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result);
    };

    reader.readAsDataURL(file);
}



    </script>

@stop