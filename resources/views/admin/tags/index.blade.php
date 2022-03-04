
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')

 
   
  
    <h1>mostrar etiquetas</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert  alert-success">
    <strong>{{session('info')}}</strong>

</div>
@endif
  <div class="card">
      <div class="card-header">
        <a class="btn btn-success " href="{{route('admin.tags.create')}}">añadir</a>
      </div>
      <div class="card-body">
          <table id="tabla-tag" class="table table-striped text-center">

            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>color</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($tags as $tag)
                    <tr>
                        <td>{{$tag->id}}</td>
                        <td>{{$tag->name}}</td>
                        <td class="badge rounded-pill text-wrap mx-1 text-white " style="background-color: {{$tag->color}}">{{$tag->color}}</td>
                      
                       
                        <td >
                            
                            <a class="btn btn-primary" href="{{route('admin.tags.edit',$tag)}}">Editar</a>
                  
                        </td>
                        <td>

                        
                            <form action="{{route('admin.tags.destroy',$tag)}}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="btn btn-danger" type="submit">Elimianr</button>
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
          $('#tabla-tag').DataTable({
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



