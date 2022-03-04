@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Iamgenes de portafolio</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.portfolios.create')}}" class="btn btn-success">Añadir Imagen</a>
    </div>
    <div class="card-body">
      <table id="tabla-portafolio" class="table table-striped text-center">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Titulo</th>
                     <th>Extracto</th>
                     <th>Imagen</th>
                     <th>Editar</th>
                     <th>Eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($portfolios as $portfolio)     
             <tr>
                 <td>{{$portfolio->id}}</td>
                 <td>{{$portfolio->title}}</td>
                 <td>{{$portfolio->extract}}</td>
                 <td><img src="{{Storage::url($portfolio->url)}}" class="img-rounded" alt="Cinque Terre" width="300" height="236"></td>
                 <td >
                    <a href="{{route('admin.portfolios.edit',$portfolio)}}" class="btn btn-primary">Editar</a>
                </td>
                 <td > 
                      <form action="{{route('admin.portfolios.destroy',$portfolio)}}" method="POST">
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
          $('#tabla-portafolio').DataTable({
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




