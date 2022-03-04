@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar Docuemnto </h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($file,['route' => ['admin.files.update',$file],'method'=>'put', 'files'=>true ]) !!}

      
        <div class="form-group">
            {!! Form::label('name', 'Nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingres un Slug de la categoria']) !!}

            @error('name')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>

        <div class="row mb-5">
            <div class="col">
                <div class="image-wrapper">
                    <iframe id="picture" src="{{Storage::url($file->url)}}" ></iframe>
               
            </div>
        </div>
            <div class="col">
                <div class="form-group">
                    {!! Form::label('url', 'Pdf que se mostrara en el post') !!}
                    {!! Form::file('url', ['class'=>'form-control-file','accept'=>'pdf']) !!}            
                </div>
                @error('url')
                    <span class="text-danger">{{$message}}</span>
                @enderror
                
        {!! Form::submit('Crear Docuemnto', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@stop
@section('css')
<style>
    .image-wrapper{
        position: relative;
     
    }
    .image-wrapper iframe{
        display: block;
    width: 80vh;
    height: 100vh;
    object-fit: cover;

    }
</style>
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