@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Documentos Normativos - Registrar nuevo documento</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.documentos-normativos-posts.store','autocomplete'=>'off','files'=>true]) !!}


            




            <div class="form-group">
                {!! Form::label('title', 'Titulo') !!}
                {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingres un Titulo del Documento']) !!}
            
                @error('title')
                    <span class="text-danger">{{$message}}</span>
                @enderror

            </div>
      

            <div class="form-group">
                {!! Form::label('category_id', 'Categoria') !!}
                    {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                @error('category_id')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div> 

            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}


            {!! Form::textarea('extract', null, ['class' => 'form-control']) !!}
                @error('extract')
                <span class="text-danger">{{$message}}</span>
            @enderror
            </div> 

            <div class="row mb-5">
                <div class="col">
                    <div class="image-wrapper">
                        <iframe id="picture" src="https://www.uma.es/ejemplo-grupo-de-investigacion/navegador_de_ficheros/repositorio-grupos-de-investigacion/descargar/documentaci%C3%B3n%20becas%20junta/documento%20de%20prueba.pdf" ></iframe>
                   
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
    <script src="{{ asset('vendor/jquery-string/jquery.stringToSlug.min.js') }}"></script>
    <script src="{{ asset('ckeditor5/ckeditor.js') }}" ></script>

    <script>
  document.getElementById("url").addEventListener('change', cambiarImagen)

function cambiarImagen(event){
    var file = event.target.files[0];
    var reader = new FileReader();
    reader.onload = (event) => {
        document.getElementById("picture").setAttribute('src', event.target.result);
    };
    reader.readAsDataURL(file);


}

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
    </script>
@endsection
