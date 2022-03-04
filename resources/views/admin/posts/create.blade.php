@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>CREAR NUEVA Publicacion</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route'=>'admin.posts.store','autocomplete'=>'off','files'=>true]) !!}

              
            {!! Form::hidden('user_id', auth()->user()->id) !!}
            <div class="form-group">
                {!! Form::label('name', 'Nombre' ) !!}
                {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingres nombre']) !!}
                @error('name')
                    <small class="text-danger">{{$message}}</small>
                @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('slug', 'Slug' ) !!}
                {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingres Slug','readonly']) !!}
                @error('slug')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('category_id', 'Categoria: ') !!}
                {!! Form::select('category_id', $categories, null, ['class'=>'form-control']) !!}
                @error('category_id')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            
            <div class="form-group">
                <p class="font-weight-bold">Etiquetas: </p>
            
                @foreach ($tags as $tag)
                    <label class="mr-2" >
                        {!! Form::checkbox('tags[]', $tag->id,null) !!}
                        {{$tag->name}}
                    </label>
                @endforeach
            
                @error('tags')
                <br>
                <small class="text-danger">{{$message}}</small>
            @enderror
            <hr>
            </div>
            
            <div class="form-group ">
                <p class="font-weight-bold">Estado: </p>
            
                <label >
                    {!! Form::radio('status', 1, true) !!}
                    Borrador
                </label>
            
                
                <label >
                    {!! Form::radio('status', 2, false) !!}
                    Publicado
                </label>
             
                @error('status')
                <br>
                <small class="text-danger">{{$message}}</small>
            @enderror
            <hr>
            </div>
            
            <div class="row mb-3">
                <div class="col">
                    <div class="image-wrapper">
                            @isset ($post->image)
                            <img id="picture" src="{{Storage::url($post->image->url)}}" alt="">
                            @else
                            <img id="picture" src="https://cdn.pixabay.com/photo/2016/07/07/16/46/dice-1502706_960_720.jpg" alt="">
                            @endisset
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        {!! Form::label('file', 'IMAGEN  que se mostraraa en la Publicacion') !!}
                        {!! Form::file('file', ['class'=>'form-control-file','accept'=>'image/*']) !!}
                        @error('file')
                        <small class="text-danger">{{$message}}</small>
                        @enderror
                    </div>
               
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit, omnis iste? Ipsam error repellat nemo alias aperiam doloremque sequi praesentium eveniet, omnis vitae ullam voluptatibus illum labore quidem fugit mollitia!
                </div>
            </div>
            
            
            <div class="form-group">
                {!! Form::label('extract', 'Extracto') !!}
                {!! Form::textarea('extract', null, ['class'=>'form-control','placeholder'=>'Ingrese un corto Extracto']) !!}
                @error('extract')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>
            
            <div class="form-group">
                {!! Form::label('body', 'Extracto') !!}
                {!! Form::textarea('body', null, ['class'=>'form-control','placeholder'=>'Ingres el Cuerpo o informacion completa de la Publicacion']) !!}
                @error('body')
                <small class="text-danger">{{$message}}</small>
            @enderror
            </div>

                {!! Form::submit('Crear post', ['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <style>
        .image-wrapper{
            position: relative;
         ;

        }
        .image-wrapper img{
            display: block;
  width: 856px;
  height: 460px;

        }
    </style>
@stop

@section('js')

   
    <script src="https://cdn.ckeditor.com/ckeditor5/27.0.0/classic/ckeditor.js"></script>
    <script src="{{ asset('vendor/jquery-string/jquery.stringToSlug.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $("#name").stringToSlug({
                setEvents: 'keyup keydown blur',
                getPut: '#slug',
                space: '-'
            });
        });
    </script>
    <script>

        ClassicEditor
        .create( document.querySelector( '#extract' ) )
        .catch( error => {
            console.error( error );
        } );
        ClassicEditor
        .create( document.querySelector( '#body' ) )
        .catch( error => {
            console.error( error );
        } );

        //Cambiar imagen
        document.getElementById("file").addEventListener('change', cambiarImagen);

        function cambiarImagen(event){
            var file = event.target.files[0];

            var reader = new FileReader();
            reader.onload = (event) => {
                document.getElementById("picture").setAttribute('src', event.target.result); 
            };

            reader.readAsDataURL(file);
        }
    </script>
@endsection
