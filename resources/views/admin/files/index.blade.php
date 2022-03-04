@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Lista de Documentos principales de Gobierno</h1>
@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a href="{{route('admin.files.create')}}" class="btn btn-success">Añadir Documento</a>
    </div>
    <div class="card-body">
      <table id="tabla-documetos-principales" class="table table-striped text-center">
             <thead>
                 <tr>
                     <th>ID</th>
                     <th>Nombre</th>
                     <th>URL</th>
                     <th>Vista</th>
                     <th>editar</th>
                     <th>eliminar</th>
                 </tr>
             </thead>
             <tbody>
             @foreach ($files as $file)     
             <tr>
                 <td>{{$file->id}}</td>
                 <td>{{$file->name}}</td>
                 <td>{{$file->url}}</td>
                 <td>
                  
                     <iframe id="pdf" src="{{Storage::url($file->url)}}" ></iframe>
                    </td>
                 <td >
                    <a href="{{route('admin.files.edit',$file)}}" class="btn btn-primary">Editar</a>
                </td>
                 <td > 
                      <form action="{{route('admin.files.destroy',$file)}}" method="POST">
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
    #pdf{
        height: 45vh;
        width: 34vh

    }
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
          $('#tabla-documetos-principales').DataTable({
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


