@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>editar categoroa</h1>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        {!! Form::model($category,['route' => ['admin.categories.update',$category],'method'=>'put' ]) !!}

        <div class="form-group">
            {!! Form::label('name', 'nombre') !!}
            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingres un nombre de la categoria']) !!}
        
            @error('name')
                <span class="text-danger">{{$message}}</span>
            @enderror

        </div>
        <div class="form-group">
            {!! Form::label('slug', 'Slug') !!}
            {!! Form::text('slug', null, ['class' => 'form-control', 'placeholder' => 'Ingres un Slug de la categoria','readonly']) !!}

            @error('slug')
            <span class="text-danger">{{$message}}</span>
        @enderror
        </div>
        {!! Form::submit('Actualizar categoria', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
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