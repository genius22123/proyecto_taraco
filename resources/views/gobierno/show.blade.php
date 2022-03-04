@extends('layouts.plantilla')
@section('title')
   {{$doc->name}} -Muni Taraco
@endsection
@section('link')
Gobierno
@endsection
@section('link2')
  {{$doc->name}}
@endsection
@section('name')
{{$doc->name}}
@endsection
@section('content')
    <section>
        <div class="container">
            <div class="section-title" data-aos="fade-up">
                <h2> <span id="span">{{$doc->name}}</span></h2>

              </div>
            <div class="ratio ratio-16x9" >
           
            <iframe src="{{Storage::url($doc->url)}}" frameborder="5"></iframe>
            </div>
        </div>
    </section>
@endsection