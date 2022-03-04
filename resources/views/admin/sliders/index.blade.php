@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de sliders</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.sliders.create')}}" class="btn btn-success">Añadir Slider</a>
    </div>
    <div class="card-body">
      <table id="tabla-slider" class="table table-striped text-center">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>url</th>
                     <th>Vista</th>
                  
                     <th>eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($sliders as $slider)     
             <tr>
                 <td>{{$slider->id}}</td>
                 <td>{{Str::limit($slider->url,30)}}</td>
                 <td><img src="{{Storage::url($slider->url)}}" id="img-slider" class="img-rounded" alt="Cinque Terre" width="600" height="236"></td>
              
                 <td > 
                      <form action="{{route('admin.sliders.destroy',$slider)}}" method="POST">
                         @csrf
                         @method('delete')
                         <button type="submit" class="btn btn-danger">Eliminar</button>
                     </form>
                 </td>
             </tr>
                 
             @endforeach
             </tbody>
      </table>
    </div>
</div>
@stop

@section('css')
<style>
   
    @media (max-width: 694px) {
    #img-slider{
            height: 150px;
            width:285px; 
    }
  /*   @media (max-width: 1370px) {
    #img-slider{
            height: 150px;
            width:285px; 
    }
    } */
   
</style>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@stop


@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>


    <script>
          $('#tabla-slider').DataTable({
                      responsive:true,
                      autoWidth:false,
                      "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search': 'Buscar: ',
            'paginate': {
              'next': 'Siguiente',
              'previous': 'Anterior'
            }
        }
                    });
    </script>
@endsection






