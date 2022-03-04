@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar etiqueta</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert  alert-success">
    <strong>{{session('info')}}</strong>

</div>
@endif
   <div class="card">
       <div class="card-body">
           {!! Form::model($tag, ['route'=>['admin.tags.update',$tag],'method'=>'put']) !!}
           <div class="form-group">
            {!! Form::label('name', 'Nombre:') !!}
            {!! Form::text('name', null, ['class'=>'form-control','placeholder'=>'Ingrese nombre de la etiqueta'])!!}
        
            @error('name')
                <small class="text-danger">{{$message}}</small>
            @enderror
        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug:') !!}
            {!! Form::text('slug', null, ['class'=>'form-control','placeholder'=>'Ingrese Slug','readonly'])!!}
            @error('slug')
            <small class="text-danger">{{$message}}</small>
        @enderror
        </div>

        

<div class="form-group">
    {{--  <label for="">Colors</label>
     <select name="color" class="form-control" id="">
         <option value="red">Color Rojos</option>
         <option value="green">Color verde</option>
         <option selected value="blue">Color azul</option>
     </select> --}}
     {!! Form::label('color', 'Selccion color') !!}
     {!! Form::select('color', $colors, null, ['class'=>'form-control']) !!}
     @error('color')
     <small class="text-danger">{{$message}}</small>
 @enderror
 </div>
     
            {!! Form::submit('acrtualizar ', ['class'=>'btn btn-primary']) !!}
           {!! Form::close() !!}
       </div>
   </div>
   @stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop


@section('js')
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
@endsection
