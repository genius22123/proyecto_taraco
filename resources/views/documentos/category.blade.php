@extends('layouts.plantilla')
@section('title')
   {{$category->name}} - Taraco
@endsection
@section('link')
Documentos
@endsection
@section('link2')
{{$category->name}}
@endsection
@section('name')
{{-- {{$doc->name}} --}}
@endsection
@section('content')
    <section>
        <div class="container">
            <h1 class="text-center text-uppercase"> {{$category->name}}</h1>
<div class="table-responsive text-center " style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
        <table id="documentos-tabla" class="table table-striped">
            <thead style="background-color: #0d6dfd7e">
              <tr>
                <th scope="col">Titulo</th>
                <th scope="col">Descripcion</th>
                <th scope="col">Archivo</th>
                <th scope="col">Fecha de publicacion</th>
              </tr>
            </thead>
            <tbody>

                @foreach ($posts as $post)
              
              <tr>
                <th scope="row">{{$post->title}}</th>
                <td>{!!$post->extract!!}</td>
                <td><a href="{{Storage::url($post->file->url)}}"><i class="bi bi-file-earmark-text fs-1" style="font-size: 30px"></i></a></td>
                <td>{{$post->created_at}}</td>
              </tr>
                  @endforeach
            
           
            
            </tbody>
          </table>
        </div>

        </div>
     

     
  

    </section>
    <script>
   
  

    </script>
@endsection