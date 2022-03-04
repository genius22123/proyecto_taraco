@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Añador nueva Imagen</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.portfolios.store','files'=>true]) !!}
            
            <div class="form-group">
                {!! Form::label('title', 'Titulo') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingres un texto para el Titulo']) !!}
            
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>  

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::text('extract', null, ['class' => 'form-control', 'placeholder' => 'Ingres un texto como extracto']) !!}
            
                @error('extract')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>  
            <div class="row mb-5">
                <div class="col">
                    <div class="image-wrapper">
                    <img id="picture" src="https://www.solvetic.com/uploads/tutorials/monthly_02_2018/264f3cdbfcb773a1da48921c2f7ce14d.png" alt="">
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
         
            {!! Form::submit('Añadir Iamgen', ['class' => 'btn btn-primary']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
<style>
    .image-wrapper{
        position: relative;
     
    }
    .image-wrapper img{
        display: block;
    width: 100%;
    height: 100%;
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