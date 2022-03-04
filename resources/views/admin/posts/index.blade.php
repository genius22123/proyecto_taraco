@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Listado de Posts</h1>

@stop

@section('content')
<div class="card">
    <div class="card-header">
        <a class="btn btn-secondary" href="{{route('admin.posts.create')}}">Nuvo posr</a>

    </div>
<div class="card-body">
    <table id="tabla-post" class="table table-striped text-center">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Exatracto</th>
             
                <th>Imagen</th>
                <th>Fecha</th>
                <th>Editar</th>
                <th>Eliminar</th>
               
            </tr>
        </thead>
        <tbody>
            @foreach ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->name}}</td>
                    <td>{!!$post->extract!!}</td>
              
                     <td>
                        @if ($post->image)
                        <img src="{{Storage::url($post->image->url)}}" class="img-rounded" alt="Cinque Terre" width="300" height="236">
                               @else
                               <img  class="img-rounded" alt="Cinque Terre" width="300" height="236" src="https://caprobi.org.mx/wp-content/uploads/2019/05/imagen-no-disponible.jpg"  >
                        @endif
                         </td>
                    <td>{{$post->created_at}}</td>
                    <td >
                        <a  class="btn btn-primary" href="{{route('admin.posts.edit',$post)}}">editar</a>
                    </td>
                    <td>
                        <form action="{{route('admin.posts.destroy',$post)}}" method="POST">
                           @csrf
                            @method('delete')

                            <button class="btn btn-danger " type="submit">Eliminar</button>
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
          $('#tabla-post').DataTable({
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


